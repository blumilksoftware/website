### PHP DEPENDENCIES ###
# https://hub.docker.com/_/composer/tags
FROM composer:2.7.7@sha256:3d023c753a64cca5ff898b843449c55b33e788c0816f70854472ea3a6e9eb180 AS vendor

WORKDIR /app_composer_dependencies

COPY composer.json composer.lock ./

RUN composer install \
        --no-interaction \
        --no-scripts \
        --no-dev \
        --prefer-dist \
        --ignore-platform-reqs

### FRONTEND ###
# https://hub.docker.com/_/node/tags
FROM node:22.5.1-bookworm-slim@sha256:2fb92fe9d7350866a73c5cc311c1a19919ffd47e8592d4233374ee330e3bdb1e AS frontend

WORKDIR /app_frontend_dependencies

COPY package.json package-lock.json postcss.config.js tailwind.config.js vite.config.js tsconfig.json ./
COPY ./environment/prod/app/vite.env .env

RUN npm clean-install

COPY resources/js ./resources/js/
COPY resources/css ./resources/css/
COPY resources/views ./resources/views/

RUN npm run build

### APPLICATION ###
# https://hub.docker.com/_/php/tags
FROM php:8.3.10-fpm-bookworm@sha256:c07fc99f042e567b6cb825ba39a8f6b907f1a44869a19d3b7f581449d1a4ca3a AS app

COPY --from=vendor /usr/bin/composer /usr/local/bin/composer

# For other versions check: http://nginx.org/packages/mainline/debian/pool/nginx/n/nginx/
ARG NGINX_VERSION="1.27.0-2~bookworm"
# For other versions check: https://pecl.php.net/package/redis
ARG PHPREDIS_VERSION=6.0.2

RUN apt-get update \
    && apt-get install --assume-yes gpg \
    && curl https://nginx.org/keys/nginx_signing.key | gpg --dearmour --output /etc/apt/trusted.gpg.d/apt.nginx.org.gpg > /dev/null \
    && echo "deb https://nginx.org/packages/mainline/debian bookworm nginx" | tee /etc/apt/sources.list.d/nginx.list \
    && apt-get update && apt-get install --assume-yes \
        nginx=${NGINX_VERSION} \
        libzip-dev \
        libpq-dev \
        libicu-dev \
        supervisor \
        cron \
    && pecl install redis-${PHPREDIS_VERSION} \
    && docker-php-ext-install \
        zip \
        pdo_pgsql \
        intl \
        bcmath \
        calendar \
        opcache \
        pcntl \
    && docker-php-ext-enable \
        redis

RUN mv "${PHP_INI_DIR}/php.ini-production" "${PHP_INI_DIR}/php.ini"

COPY ./environment/prod/app/php.ini "${PHP_INI_DIR}/conf.d/zzz-overrides-php.ini"
COPY ./environment/prod/app/php-fpm.conf "/usr/local/etc/php-fpm.d/zzz-overrides.conf"
COPY ./environment/prod/app/nginx.conf "/etc/nginx/nginx.conf"
COPY ./environment/prod/app/supervisord.conf "/etc/supervisor/custom-supervisord.conf"
COPY ./environment/prod/app/entrypoint.sh /entrypoint.sh

WORKDIR /application

# Copy Frontend build
COPY --chown=www-data:www-data --from=frontend /app_frontend_dependencies/public/build ./public/build/

# Copy Composer dependencies
COPY --chown=www-data:www-data --from=vendor /app_composer_dependencies/vendor ./vendor/

# Copy App files
COPY --chown=www-data:www-data . .

# Remove unnecessary files
RUN rm --recursive --force \
    ./environment/prod/app \
    eslint.config.js \
    postcss.config.js \
    tailwind.config.js \
    tsconfig.json \
    vite.config.js \
    .dockerignore

USER www-data

RUN composer dump-autoload --optimize

USER root

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]

ARG DEPLOYMENT_PROJECT_VERSION_ARG
ENV DEPLOY_VERSION=${DEPLOYMENT_PROJECT_VERSION_ARG}

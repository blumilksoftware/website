### PHP DEPENDENCIES ###
# https://hub.docker.com/_/composer/tags
FROM composer:2.7.9@sha256:cb5ec802fc7a6b151d22baba3613c23e73ed07ceef1d8bed60154c004afba0fb AS vendor

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
FROM node:22.8.0-bookworm-slim@sha256:377674fd5bb6fc2a5a1ec4e0462c4bfd4cee1c51f705bbf4bda0ec2c9a73af72 AS frontend

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
FROM php:8.3.11-fpm-bookworm@sha256:64f4020404a790a1ffef730873b54661cc45333bec7e55fffe88daef2a43ddd9 AS app

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

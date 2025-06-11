### PHP DEPENDENCIES ###
# https://hub.docker.com/_/composer/tags
FROM composer:2.8.6@sha256:685473b4cd31d70bfe71926409f812d5dd9245972d38b659ba35d70f4007808c AS vendor

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
FROM node:22.14.0-bullseye-slim@sha256:d69b7c7ea65e223e1837a03784c6caa987e50bd2f1fcc174156554adfbe7ca6e AS frontend

WORKDIR /app_frontend_dependencies

COPY package.json package-lock.json postcss.config.js vite.config.js tsconfig.json ./
COPY ./environment/prod/app/vite.env .env

RUN npm clean-install

COPY resources/js ./resources/js/
COPY resources/css ./resources/css/
COPY resources/views ./resources/views/

RUN npm run build

### APPLICATION ###
# https://hub.docker.com/_/php/tags
FROM php:8.4.5-fpm-bookworm@sha256:182b3466ea500120199794457bc7563dfc599f742f6833722dc7d3ca3f69a328 AS app

COPY --from=vendor /usr/bin/composer /usr/local/bin/composer

# For other versions check: http://nginx.org/packages/mainline/debian/pool/nginx/n/nginx/
ARG NGINX_VERSION="1.27.3-1~bookworm"
# For other versions check: https://pecl.php.net/package/redis
ARG PHPREDIS_VERSION=6.1.0

RUN apt-get update \
    && apt-get install --assume-yes gpg \
    && curl https://nginx.org/keys/nginx_signing.key | gpg --dearmour --output /etc/apt/trusted.gpg.d/apt.nginx.org.gpg > /dev/null \
    && echo "deb https://nginx.org/packages/mainline/debian bookworm nginx" | tee /etc/apt/sources.list.d/nginx.list \
    && apt-get update && apt-get install --assume-yes \
        nginx=${NGINX_VERSION} \
        libzip-dev \
        libpq-dev \
        libicu-dev \
        libjpeg-dev \
        libpng-dev \
        libwebp-dev \
        supervisor \
        cron \
    && pecl install redis-${PHPREDIS_VERSION} \
    && docker-php-ext-configure \
        gd --with-jpeg --with-webp \
    && docker-php-ext-install \
        zip \
        pdo_pgsql \
        intl \
        gd \
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

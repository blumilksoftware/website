# https://hub.docker.com/_/alpine
FROM alpine:3.20.2@sha256:0a4eaa0eecf5f8c050e5bba433f58c052be7587ee8af3e8b3910ef9ab5fbe9f5 AS secops-tools

# https://github.com/FiloSottile/age/releases
ARG AGE_VERSION="1.1.1"

# https://github.com/getsops/sops/releases
ARG SOPS_VERSION="3.8.1"

RUN wget --output-document age.tar.gz "https://github.com/FiloSottile/age/releases/download/v${AGE_VERSION}/age-v${AGE_VERSION}-linux-amd64.tar.gz" \
    && tar --extract --file age.tar.gz \
    && mv age/age /usr/local/bin \
    && mv age/age-keygen /usr/local/bin \
    && wget --output-document /usr/local/bin/sops "https://github.com/getsops/sops/releases/download/v${SOPS_VERSION}/sops-v${SOPS_VERSION}.linux.amd64" \
    && chmod +x /usr/local/bin/sops

# For other versions check: https://hub.docker.com/_/composer/tags
FROM composer/composer:2.7.7-bin@sha256:1832641f1ba36c8e748f4b4462f77e7c8836cca7730fdf0540580d703b78f2e7 AS composer-bin

# For other versions check: https://hub.docker.com/_/node/tags
FROM node:22.5.1-bookworm-slim@sha256:2fb92fe9d7350866a73c5cc311c1a19919ffd47e8592d4233374ee330e3bdb1e AS node

# For other versions check: https://hub.docker.com/_/php/tags
FROM php:8.3.10-fpm-bookworm@sha256:c07fc99f042e567b6cb825ba39a8f6b907f1a44869a19d3b7f581449d1a4ca3a

COPY --from=composer-bin ./composer /usr/bin/composer
COPY --from=secops-tools /usr/local/bin/age /usr/local/bin/age
COPY --from=secops-tools /usr/local/bin/age-keygen /usr/local/bin/age-keygen
COPY --from=secops-tools /usr/local/bin/sops /usr/local/bin/sops

ARG USER_NAME=host-user
ARG USER_ID=1000
ARG PHP_FPM_GROUP=www-data

RUN adduser \
        --disabled-password \
        --uid ${USER_ID} \
        ${USER_NAME} \
    && usermod \
        --append \
        --groups \
        ${PHP_FPM_GROUP} \
        ${USER_NAME}

# Add node and npm
COPY --from=node --chown=${USER_NAME}:root /usr/local/lib/node_modules /usr/local/lib/node_modules
COPY --from=node --chown=${USER_NAME}:root /usr/local/bin/node /usr/local/bin/node
RUN ln --symbolic /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm \
    && chown --no-dereference ${USER_NAME}:root /usr/local/bin/npm \
    && ln --symbolic /usr/local/lib/node_modules/npm/bin/npx-cli.js /usr/local/bin/npx \
    && chown --no-dereference ${USER_NAME}:root /usr/local/bin/npx

# Use the default development configuration
RUN mv "${PHP_INI_DIR}/php.ini-development" "${PHP_INI_DIR}/php.ini"

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
    && docker-php-ext-enable \
        redis

# For other versions check: https://pecl.php.net/package/xdebug
ARG XDEBUG_VERSION=3.3.2
ARG INSTALL_XDEBUG=true

RUN if [ ${INSTALL_XDEBUG} = true ]; then \
    pecl install xdebug-${XDEBUG_VERSION} \
    && docker-php-ext-enable xdebug \
;fi

COPY ./entrypoint.sh /entrypoint.sh

WORKDIR /application

ENTRYPOINT ["/entrypoint.sh"]

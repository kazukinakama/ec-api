FROM php:8.0-fpm

COPY ./docker/php/php.ini /usr/local/etc/php/php.ini

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

COPY --from=node:16.13 /usr/local/bin /usr/local/bin
COPY --from=node:16.13 /usr/local/lib /usr/local/lib

RUN apt-get update && \
    apt-get -y install \
    git \
    zip \
    unzip \
    vim \
    && docker-php-ext-install pdo_mysql bcmath

WORKDIR /var/www/html
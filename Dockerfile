FROM php:8.2-cli as php

RUN apt-get update

RUN apt-get install -y unzip libpq-dev libcurl4-gnutls-dev

RUN docker-php-ext-install pdo pdo_mysql bcmath


WORKDIR /var/www

COPY . .

COPY --from=composer:2.3.4 /usr/bin/composer /usr/bin/composer

ENV PORT=8000

ENTRYPOINT [ "docker/entrypoint.sh" ]

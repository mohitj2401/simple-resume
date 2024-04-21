#!/bin/bash

if [ ! -f "vendor/autoload.php" ];then
    composer install --no-progress --no-interaction
fi

if [ ! -f ".env" ];then
    cp .env.example .env
fi



php artisan key:generate
php artisan optimize:clear
php artisan migrate
php artisan db:seed

php artisan serve --port=$PORT --host=0.0.0.0 --env=.env

exec docker-php-entrypoint "$@"

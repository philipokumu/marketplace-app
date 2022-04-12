#! /bin/bash

cp .env.example .env

eval "docker compose -f docker-compose.yml up -d --build"

docker exec php_marketplace_app composer install
docker exec php_marketplace_app key:generate
docker exec php_marketplace_app php artisan config:cache
docker exec php_marketplace_app php artisan config:clear
docker exec php_marketplace_app php artisan migrate:fresh --seed --force
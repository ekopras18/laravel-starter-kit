#!/bin/bash

# Load .env file
if [ -f .env ]; then
  export $(grep -v '^#' .env | xargs)
fi

php artisan optimize:clear

if [ "$APP_ENV" = "local" ]; then
    docker compose -f docker/docker-compose-develop.yml up -d --build
elif [ "$APP_ENV" = "production" ]; then
    docker compose -f docker/docker-compose-production.yml up -d --build
else
    echo "APP_ENV is not set. Exiting..."
fi

#!/bin/bash

# Load .env file
if [ -f .env ]; then
  export $(grep -v '^#' .env | xargs)
fi

# Function to display usage instructions
usage() {
  echo "Usage: $0 [up|down] [develop|production]"
  echo "  up        - Start the Docker environment"
  echo "  down      - Stop the Docker environment"
  echo "  develop   - Use the development environment"
  echo "  production - Use the production environment"
  exit 1
}

# Check if the correct number of arguments is provided
if [ "$#" -ne 2 ]; then
  usage
fi

# Assign arguments to variables
action=$1 $OPTIONS
environment=$2
CONTAINER_NAME="$CONTAINER_NAME"
CONTAINER_PORT="$CONTAINER_PORT"

# Validate the action argument
if [[ "$action" != "up" && "$action" != "down" ]]; then
  echo "Error: Invalid action '$action'."
  usage
fi

# Validate the environment argument
if [[ "$environment" != "develop" && "$environment" != "production" ]]; then
  echo "Error: Invalid environment '$environment'."
  usage
fi

# Set the compose file based on the environment
if [ "$environment" == "develop" ]; then
    COMPOSE_FILE="docker/docker-compose-develop.yml"
elif [ "$environment" == "production" ]; then
    COMPOSE_FILE="docker/docker-compose-production.yml"
fi

# Assign arguments to variables
if [ "$action" = "up" ]; then
    OPTIONS="-d --build"
elif [ "$action" = "down" ]; then
    OPTIONS="-v"
else
    echo "Error: Invalid action '$action'."
    usage
    exit 1
fi

action="$action $OPTIONS"

# Run the Docker Compose command
echo " ✔ Running 'docker-compose -f $COMPOSE_FILE $action'..."
php artisan optimize:clear
run="docker compose -f "$COMPOSE_FILE" "$action""
$run


# Check the status of the command
if [ $? -eq 0 ]; then
  echo " ✔ Docker environment $action successfully for $environment."
else
  echo " x Failed to $action Docker environment for $environment."
  exit 1
fi

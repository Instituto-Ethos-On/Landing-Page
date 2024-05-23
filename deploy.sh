#!/usr/bin/env bash

git pull

BUILD_VERSION=$(git rev-parse HEAD)

echo "$(date --utc +'%F-%H%M%S'): Releasing new server version. $BUILD_VERSION"

echo "$(date --utc +'%F-%H%M%S'): Running build..."
docker compose rm -f
docker compose build app

OLD_CONTAINER=$(docker ps -aqf "name=ethoson-site")
echo "$(date --utc +'%F-%H%M%S'): Scaling server up..."
BUILD_VERSION=$BUILD_VERSION docker compose up -d --no-deps --scale app=2 --no-recreate app

sleep 30

echo "$(date --utc +'%F-%H%M%S'): Scaling old server down..."
docker container rm -f $OLD_CONTAINER
docker compose up -d --no-reps --scale app=1 --no-recreate app

echo "$(date --utc +'%F-%H%M%S'): Reloading Caddy..."
docker exec caddy-container caddy reload -c /etc/caddy/Caddyfile

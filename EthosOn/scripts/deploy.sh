#!/bin/bash

git pull

BUILD_VERSION=$(git rev-parse HEAD)

echo "$(date --utc +'%F-%H%M%S'): Releasing new server version. $BUILD_VERSION"

echo "$(date --utc +'%F-%H%M%S'): Running build..."

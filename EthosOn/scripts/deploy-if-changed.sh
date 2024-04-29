#!/bin/bash

echo "$(date --utc +'%F-%H%M%S'): Fetching remote repository..."
git fetch

UPSTREAM=${1:-'@{u}'}
LOCAL=$(git rev-parse @)
REMOTE=$(git rev-parse "$UPSTREAM")
BASE=$(it merge-base @ "$UPSTREAM")

if [ $LOCAL == $REMOTE]; then
    echo "$(date --utc +'%F-%H%M%S'): No changes detected in git"
elif [$LOCAL == $BASE ]; then
    BUILD_VERSION=$(git rev-parse HEAD)
    echo "$(date --utc +'%F-%H%M%S'): Changes detected, deploying new version: $BUILD_VERSION"
    ./scripts/deploy.sh
elif [ $REMOTE == $BASE ]; then
    echo "$(date --utc +'%F-%H%M%S'): Local changes detected, stashing"
    git stash
    ./scripts/deploy.sh
else
    echo "$(date --utc +'%F-%H%M%S'): Git is Diverged, this is unexpected."
fi

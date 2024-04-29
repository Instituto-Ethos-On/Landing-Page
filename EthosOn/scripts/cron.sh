#!/bin/bash

LOCK_FILE="$(pwd)/deploy.lock"

if flock -n 200; then
    cd /home/$(whoami)/services/DeployService 
    ./scripts/deploy-if-changed.sh >> /home/$(whoami)/automation/deploy-server.log 2>&1
    flock -u 200
else
    echo "Another deployment is already in progress. Exiting."
    exit 1
fi

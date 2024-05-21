#!/bin/bash

LOCK_FILE="deploy.lock"

# precisa ser o caminho absoluto para a pasta com o deploy-changed.sh
cd /home/$(whoami)/caminho/para/deploy-changed.sh
flock -n "$LOCK_FILE" ./deploy-changed.sh >> /home/$(whoami)/deploy-server.log 2>&1

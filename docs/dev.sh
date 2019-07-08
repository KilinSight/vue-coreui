#!/usr/bin/env bash

# Clear Symfony cache
bin/console cache:clear

# Directories & permissions
mkdir public/uploads
chmod -R a+w public/uploads
chmod -R a+w var/cache var/log

# Apply database migrations
bin/console doctrine:migrations:migrate -n

# Build Frontend & Watch
yarn install
yarn watch
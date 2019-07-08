#!/usr/bin/env bash

# Clear Symfony cache
bin/console cache:clear

# Directories & permissions
chmod -R a+w public/uploads
chmod -R a+w var/cache var/log

# Build Frontend & Watch
yarn install
yarn build
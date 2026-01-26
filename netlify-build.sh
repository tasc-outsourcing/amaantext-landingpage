#!/bin/bash
set -e

# Create minimal .env file
echo "APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:tempkeywillbereplaced
APP_URL=https://your-site.netlify.app" > .env

# Install Composer dependencies (skip scripts to avoid artisan commands)
composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

# Install npm dependencies
npm install

# Build assets
npm run build

echo "Build completed successfully!"


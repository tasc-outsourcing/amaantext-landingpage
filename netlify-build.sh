#!/bin/bash
set -e

# Create .env file if it doesn't exist
if [ ! -f .env ]; then
    cp .env.example .env 2>/dev/null || echo "APP_ENV=production
APP_DEBUG=false
APP_KEY=
APP_URL=https://your-site.netlify.app" > .env
fi

# Install Composer dependencies
composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

# Run package discovery manually if needed
php artisan package:discover --ansi || true

# Install npm dependencies
npm install

# Build assets
npm run build

echo "Build completed successfully!"


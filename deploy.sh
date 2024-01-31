
# Turn on maintenance mode
php artisan down || true

# Install/update composer dependecies
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# Run database migrations
php artisan migrate

# Clear expired password reset tokens
php artisan auth:clear-resets

# Clear and cache routes
php artisan route:cache

# Clear and cache config
php artisan config:cache

# Clear and cache views
php artisan view:cache

# Clear and cache events
php artisan event:cache

# Install node modules
# npm ci

# Build assets using Laravel Mix
# npm run production --silent

# Turn off maintenance mode
php artisan up
# Use the official PHP image
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    sqlite3 \
    libsqlite3-dev \
    git \
    npm \
    nodejs

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Create SQLite file if missing
RUN mkdir -p database && touch database/database.sqlite

# Install dependencies
RUN composer install --optimize-autoloader --no-dev

# Set correct permissions for Laravel
RUN chmod -R 775 storage bootstrap/cache

# Set environment variables (Render also injects from render.yaml)
ENV APP_ENV=production
ENV APP_DEBUG=false

# Expose port
EXPOSE 8000

# Run migrations and start server
CMD php artisan config:cache && php artisan route:cache && php artisan serve --host=0.0.0.0 --port=8000

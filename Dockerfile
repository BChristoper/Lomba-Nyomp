# Phase 1: Build Assets with Node
FROM node:20-alpine AS build-assets
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Phase 2: Production PHP Environment
FROM php:8.4-fpm-alpine AS prod

# Set working directory
WORKDIR /var/www/html

# Install system dependencies and PHP extensions
RUN apk add --no-cache \
    curl \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    oniguruma-dev \
    freetype-dev \
    libjpeg-turbo-dev

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application code
COPY . .

# Copy built assets from Stage 1
COPY --from=build-assets /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 9000
EXPOSE 9000

# Jalankan migrasi otomatis dan jalankan php-fpm
CMD ["sh", "-c", "touch database/database.sqlite && php artisan storage:link && php artisan migrate --force && php-fpm"]

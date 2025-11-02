# Dockerfile - PHP 8.1 + Apache with common extensions
FROM php:8.1-apache

# Install system deps for common PHP extensions and composer
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions you need (add or remove extensions as required)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install pdo pdo_mysql mysqli mbstring zip gd xml

# Enable Apache rewrite (if you use .htaccess / pretty URLs)
RUN a2enmod rewrite

# Copy site to Apache webroot
COPY . /var/www/html/

# If using composer, install it and run install
# (Only runs if composer.json exists)
RUN if [ -f /var/www/html/composer.json ]; then \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    cd /var/www/html && composer install --no-dev --optimize-autoloader; \
    fi

# Ensure proper permissions (www-data)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
# Apache will be started by the base image; no CMD needed

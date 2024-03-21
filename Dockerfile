# Use an official PHP runtime as a parent image
FROM php:8.3.2-apache

# Install Xdebug and Redis
RUN pecl install redis xdebug \
    && docker-php-ext-enable redis xdebug

# Add Xdebug configuration
RUN echo 'xdebug.mode=debug' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo 'xdebug.start_with_request=yes' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo 'xdebug.log=/tmp/xdebug.log' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Copy Composer from official Composer image (latest version)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory in the container to /app
WORKDIR /app

# Copy the current directory contents into the container at /app
ADD . /app

# Install git and unzip
RUN apt-get update && apt-get install -y git unzip

# Configure Apache to run your PHP file
RUN echo '<Directory "/app">\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n\
\n\
<VirtualHost *:80>\n\
    DocumentRoot /app\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Create a script that installs the PHP dependencies and starts Apache
RUN echo '#!/bin/bash\n\
composer install\n\
/usr/sbin/apache2ctl -D FOREGROUND' > /start.sh \
    && chmod +x /start.sh

# Start the script when the Docker container starts
CMD ["/start.sh"]
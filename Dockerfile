FROM php:8.1-apache

COPY . /var/www/html

# Install any additional PHP extensions you need
# Example:
# RUN apt-get update && apt-get install -y \
#     libzip-dev \
#     && docker-php-ext-configure zip --with-libzip \
#     && docker-php-ext-install zip

# Set file permissions (important!)
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

RUN a2enmod rewrite

# Expose port 80 (or your app's port)
EXPOSE 80
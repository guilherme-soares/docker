FROM php:8.0.1-fpm-alpine3.13

# Default directory
WORKDIR /var/www

# Exposing the port TCP socket will be listening
EXPOSE 9000

# FastCGI Process Manager command
CMD ["php-fpm"]
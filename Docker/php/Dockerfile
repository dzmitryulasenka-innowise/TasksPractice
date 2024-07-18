FROM php:8.1-fpm
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

## Установка Composer
#RUN sudo apt-get update && apt-get install -y curl && \
#    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#
#
#RUN sudo composer install
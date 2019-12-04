FROM php:7-apache

RUN pecl install redis-4.0.1 \
    && docker-php-ext-enable redis

RUN apt-get -y update
RUN apt-get -y install vim zip

RUN mkdir -p /var/www/html
ADD /src /var/www/html
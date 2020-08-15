FROM php:7.4-apache
RUN apt-get update \
    && apt-get upgrade -y \
    && docker-php-ext-install pdo \
    && docker-php-ext-install mysqli \
    && pecl install xdebug-2.8.1 \
    && docker-php-ext-enable xdebug

EXPOSE 80

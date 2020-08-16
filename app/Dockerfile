FROM php:7.4-apache

# upgrade system
RUN apt-get update && apt-get upgrade -y

# install php extensions
RUN docker-php-ext-install pdo && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-install mysqli && \
    docker-php-ext-install tokenizer && \
    docker-php-ext-install json && \
    docker-php-ext-install gettext && \
    docker-php-ext-install exif

# install & enable xdebug
RUN pecl install xdebug-2.8.1 && \
    docker-php-ext-enable xdebug

# enable apache modules
RUN a2enmod rewrite headers

EXPOSE 80

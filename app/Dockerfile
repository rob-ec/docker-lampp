FROM php:7.4-apache

RUN apt-get update && apt-get upgrade -y
RUN apt-get install zlib1g-dev libpng-dev -y

# PHP EXTENSIONS
RUN docker-php-ext-install pdo && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-install mysqli && \
    docker-php-ext-install tokenizer && \
    docker-php-ext-install json && \
    docker-php-ext-install gettext && \
    docker-php-ext-install exif && \
    docker-php-ext-install gd && \
    docker-php-ext-install opcache && \
    docker-php-ext-enable opcache

# XDEBUG
RUN pecl install xdebug-2.8.1 && \
    docker-php-ext-enable xdebug

# APACHE MODULES
RUN a2enmod rewrite headers
 
#
# uncoment the rows below to enable external ssl certificate
#
#----------------------------SSL CERTIFICATE-----------------------------
#RUN a2enmod ssl
#
#ADD my_ssl.crt /usr/share/ca-certificates/foo.crt
#
#COPY ./certificates/my_ssl.crt /etc/ssl/certs/ssl.crt
#COPY ./certificates/my_ssl.key /etc/ssl/private/ssl.key
#
#RUN sed -i '$ a <VirtualHost *:443>' /etc/apache2/sites-available/000-default.conf && \
#    sed -i '$ a 	SSLEngine on' /etc/apache2/sites-available/000-default.conf && \
#    sed -i '$ a 	SSLCertificateFile "/etc/ssl/certs/ssl.crt"' /etc/apache2/sites-available/000-default.conf && \
#    sed -i '$ a 	SSLCertificateKeyFile "/etc/ssl/private/ssl.key"' /etc/apache2/sites-available/000-default.conf && \
#    sed -i '$ a </VirtualHost>' /etc/apache2/sites-available/000-default.conf
#
#RUN update-ca-certificates
#------------------------------------------------------------------------

EXPOSE 80
EXPOSE 443

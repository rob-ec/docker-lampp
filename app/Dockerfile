FROM php:7.4-apache

ARG php_ini_model
ARG php_ini_lampp

RUN apt-get update && apt-get upgrade -y && \
    apt-get install zlib1g-dev libpng-dev -y && \
    docker-php-ext-install pdo && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-install mysqli && \
    docker-php-ext-install tokenizer && \
    docker-php-ext-install json && \
    docker-php-ext-install gettext && \
    docker-php-ext-install exif && \
    docker-php-ext-install gd && \
    docker-php-ext-install opcache && \
    docker-php-ext-enable opcache && \
    pecl install xdebug-2.8.1 && \
    docker-php-ext-enable xdebug && \
    a2enmod rewrite headers && \
    cp ${php_ini_model} ${php_ini_lampp} && \
    sed -i '/\[PHP\]/a y2k_compliance = On' ${php_ini_lampp} && \
    sed -i 's/serialize_precision = .*/serialize_precision = 100/g' ${php_ini_lampp} && \
    sed -i 's/;realpath_cache_size = .*/realpath_cache_size = 4096k/g' ${php_ini_lampp} && \
    sed -i 's/;realpath_cache_ttl = .*/realpath_cache_ttl = 120/g' ${php_ini_lampp} && \
    sed -i 's/max_execution_time = .*/max_execution_time = 5/g' ${php_ini_lampp} && \
    sed -i 's/max_input_time = .*/max_input_time = 60/g' ${php_ini_lampp} && \
    sed -i 's/;max_input_nesting_level = .*/max_input_nesting_level = 64/g' ${php_ini_lampp} && \
    sed -i 's/memory_limit = .*/memory_limit = 64M/g' ${php_ini_lampp} && \
    sed -i 's/;html_errors = On/html_errors = On/g' ${php_ini_lampp} && \
    sed -i 's/;docref_root = "\/phpmanual\/"/docref_root = "\/phpmanual\/"/g' ${php_ini_lampp} && \
    sed -i 's/post_max_size = .*/post_max_size = 25M/g' ${php_ini_lampp} && \
    sed -i 's/upload_max_filesize = .*/upload_max_filesize = 40M/g' ${php_ini_lampp} && \
    sed -i 's/max_file_uploads = .*/max_file_uploads = 3/g' ${php_ini_lampp} && \
    sed -i '/;date.timezone =/a date.timezone = America/Fortaleza' ${php_ini_lampp} && \
    sed -i '/\[Pdo_mysql\]/a pdo_mysql.cache_size = 2000' ${php_ini_lampp} && \
    sed -i 's/mail.add_x_header = .*/mail.add_x_header = On/g' ${php_ini_lampp}

#
# uncoment the section below to enable external ssl certificate
#
#----------------------------SSL CERTIFICATE-----------------------------
#RUN a2enmod ssl
#COPY ./certificates/my_ssl.crt /etc/ssl/certs/ssl.crt
#COPY ./certificates/my_ssl.key /etc/ssl/private/ssl.key
#ARG apache_conf_file
#RUN sed -i '$ a <VirtualHost *:443>' ${apache_conf_file} && \
#    sed -i '$ a 	SSLEngine on' ${apache_conf_file} && \
#    sed -i '$ a 	SSLCertificateFile "/etc/ssl/certs/ssl.crt"' ${apache_conf_file} && \
#    sed -i '$ a 	SSLCertificateKeyFile "/etc/ssl/private/ssl.key"' ${apache_conf_file} && \
#    sed -i '$ a </VirtualHost>' ${apache_conf_file} && \
#    update-ca-certificates
#------------------------------------------------------------------------

EXPOSE 80
EXPOSE 443
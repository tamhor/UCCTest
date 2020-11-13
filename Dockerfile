FROM php:7.1-apache

RUN apt-get -y clean && apt-get -y update
RUN apt-get -y install git curl zlib1g-dev libcurl4-gnutls-dev
RUN docker-php-ext-install -j$(nproc) bcmath zip pdo_mysql mysqli curl pcntl
ENV APACHE_DOCUMENT_ROOT=/var/www/html/
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite


EXPOSE 80

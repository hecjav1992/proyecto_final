FROM php:8.2-apache

# Habilita mysqli
RUN docker-php-ext-install mysqli

# Copia tu app al contenedor
COPY ./public /var/www/html/


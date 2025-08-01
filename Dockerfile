FROM php:8.2-apache

# Habilita la extensión mysqli
RUN docker-php-ext-install mysqli

# Copia todos los archivos del proyecto al servidor Apache
COPY . /var/www/html/

# (opcional) Dar permisos adecuados
RUN chown -R www-data:www-data /var/www/html/

# (opcional) Exponer el puerto
EXPOSE 80

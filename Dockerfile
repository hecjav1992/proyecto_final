FROM mysql:8.0

# Variables de entorno para MySQL
ENV MYSQL_ROOT_PASSWORD=tu_password_seguro
ENV MYSQL_DATABASE=proyecto_final

# Copia el SQL de inicialización
COPY init.sql /docker-entrypoint-initdb.d/

# Puerto expuesto (MySQL usa el 3306 por defecto)
EXPOSE 3306

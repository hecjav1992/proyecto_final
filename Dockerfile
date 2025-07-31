FROM mysql:8.0

# Variables de entorno para MySQL
ENV MYSQL_ROOT_PASSWORD=1234
ENV MYSQL_DATABASE=sistema_web

# Copia el SQL de inicialización
COPY init.sql /docker-entrypoint-initdb.d/

# Puerto expuesto (MySQL usa el 3306 por defecto)
EXPOSE 3306

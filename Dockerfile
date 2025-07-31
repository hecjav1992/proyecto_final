FROM mysql:8.0

# Variables de entorno para MySQL
ENV MYSQL_ROOT_PASSWORD=1234
ENV MYSQL_DATABASE=sistema_web
EXPOSE 3306
# Copia el SQL de inicialización
COPY init.sql /docker-entrypoint-initdb.d/


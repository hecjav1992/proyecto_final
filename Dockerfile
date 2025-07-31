FROM mysql:8.0

# Variables de entorno por defecto (puedes cambiarlas desde Render)
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=sistema_web
ENV MYSQL_USER=usuario
ENV MYSQL_PASSWORD=clave

# Opcional: subir un archivo .sql de inicialización
COPY ./init.sql /docker-entrypoint-initdb.d/

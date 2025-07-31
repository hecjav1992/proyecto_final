FROM mysql:8.0
ENV MYSQL_ROOT_PASSWORD=1234
ENV MYSQL_DATABASE=sistema_web
COPY ./init.sql /docker-entrypoint-initdb.d/  # Opcional: SQL inicial

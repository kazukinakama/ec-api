FROM mysql/mysql-server:8.0

COPY ./docker/local/mysql/my.cnf /etc/my.cnf
COPY ./docker/local/mysql/docker-entrypoint-initdb.d/* /docker-entrypoint-initdb.d/

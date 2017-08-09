FROM postgres
ENV POSTGRES_USER dev
ENV POSTGRES_PASSWORD test
ENV POSTGRES_DB db
ADD CreateTable.sql /docker-entrypoint-initdb.d/

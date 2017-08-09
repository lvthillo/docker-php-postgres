FROM php:7.0-apache
RUN apt-get update && \
    apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql
RUN echo "deb http://apt.postgresql.org/pub/repos/apt/ trusty-pgdg main 9.6" > /etc/apt/sources.list.d/pgdg.list
RUN gpg --keyserver keys.gnupg.net --recv-keys ACCC4CF8
RUN gpg --export --armor ACCC4CF8|apt-key add -
RUN apt-get update
RUN apt-get install -y postgresql-client-9.6
COPY ./wait-for-postgres.sh wait-for-postgres.sh
RUN chmod +x wait-for-postgres.sh 
COPY src/ /var/www/html

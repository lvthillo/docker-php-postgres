FROM php:7.3-apache
RUN apt-get update && \
    apt-get install -y wget gnupg2 libpq5=11.1-2 libpq-dev=11.1-2 && docker-php-ext-install pdo pdo_pgsql
RUN echo "deb http://apt.postgresql.org/pub/repos/apt/ trusty-pgdg main 9.6" > /etc/apt/sources.list.d/pgdg.list
RUN wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | \
   apt-key add -
RUN apt-get update
RUN apt-get install -y postgresql-client-9.6
COPY ./wait-for-postgres.sh wait-for-postgres.sh
RUN chmod +x wait-for-postgres.sh 
COPY src/ /var/www/html
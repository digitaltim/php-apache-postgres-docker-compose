FROM php:7.1-apache

RUN set -x && \
  apt-get -y update && \
  apt-get install -y libicu-dev postgresql-server-dev-all && \
  NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) && \
  docker-php-ext-install -j${NPROC} intl && \
  docker-php-ext-install -j${NPROC} pgsql && \
  docker-php-ext-install -j${NPROC} pdo_pgsql && \
  docker-php-ext-install -j${NPROC} pdo_mysql && \
  rm -rf /tmp/pear && \
  a2ensite default-ssl && \
  a2enmod ssl 
  
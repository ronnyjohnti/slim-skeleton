FROM php:8.3-cli
LABEL authors="ronny-john"

RUN apt-get update -y && apt-get install -y \
        libfreetype-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-configure pgsql --with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pgsql pdo_pgsql

COPY ./public /var/www/public
COPY ./src /var/www/src
COPY ./app /var/www/app
COPY ./vendor /var/www/vendor

EXPOSE 80

WORKDIR /var/www/public

CMD php -S 0.0.0.0:80

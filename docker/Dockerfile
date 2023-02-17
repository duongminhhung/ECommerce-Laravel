FROM php:8.1-fpm-alpine

RUN apk update \
    && apk upgrade \
    && apk add --no-cache \
        freetype \
        libpng \
        libjpeg-turbo \
        freetype-dev \
        libpng-dev \
        jpeg-dev \
        libjpeg \
        libzip-dev \
        libjpeg-turbo-dev \
        zlib \
        unzip \
        npm \
        git

RUN docker-php-ext-install mysqli pdo pdo_mysql gd bcmath zip

RUN deluser www-data &&\
    if getent group www-data ; then delgroup www-data; fi &&\
    addgroup -g 1000 www-data &&\
    adduser -u 1000 -G www-data www-data --disabled-password &&\
    install -d -m 0755 -o www-data -g www-data /home/www-data

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

COPY ./docker/php.ini /usr/local/etc/php/php.ini
COPY . /app

USER www-data

EXPOSE 9000

CMD ["php-fpm"]

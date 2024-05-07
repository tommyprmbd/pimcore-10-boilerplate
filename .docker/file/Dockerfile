FROM php:8.1-fpm-alpine

RUN apk upgrade --update && apk add --no-cache --virtual .build-deps  \
        alpine-sdk \
        autoconf \
        automake \
        cmake \
        g++ \
        libtool

RUN apk add --no-cache \
        libwebp-dev \
        libjpeg-turbo-dev \
        libjpeg-turbo-utils \
        freetype-dev \
        libpng-dev \
        libxpm-dev \
        icu-dev \
        bzip2-dev \
        libxml2-dev \
        libxslt-dev \
        libzip-dev \
        imagemagick \
        imagemagick-dev \
        graphviz

RUN apk add --no-cache \
        bash \
        shadow \
        curl \
        oniguruma-dev

RUN docker-php-ext-install intl mysqli bcmath gd bz2 soap xsl pdo_mysql exif zip opcache sockets shmop

RUN docker-php-ext-install dom simplexml fileinfo mbstring

RUN curl -O https://getcomposer.org/download/2.7.2/composer.phar \
    && chmod +x composer.phar \
    && mv composer.phar /usr/local/bin/composer

RUN mkdir /apps

RUN cd /apps && chown www-data:www-data -R .

RUN usermod -u 1000 www-data \
    && groupmod -g 1000 www-data
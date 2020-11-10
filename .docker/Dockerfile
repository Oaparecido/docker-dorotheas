FROM php:7.4.10-fpm-alpine3.12

RUN apk update \
  && docker-php-ext-install pdo pdo_mysql mysqli \
  && docker-php-ext-enable mysqli \
  && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/local/bin/ --filename=composer --no-ansi \
  && apk add npm
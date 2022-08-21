FROM php:8.1-cli

MAINTAINER Jesús Martínez <jamarcer@gmail.com>

# Dependenciaes and Composer
RUN apt-get update && \
    apt-get install bash make git unzip -y
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

RUN pecl install xdebug-3.1.5 && docker-php-ext-enable xdebug

## Copy php default configuration
COPY ./default.ini /usr/local/etc/php/conf.d/default.ini
COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Volume to have access to the source code
VOLUME ["/opt/project"]

WORKDIR /opt/project
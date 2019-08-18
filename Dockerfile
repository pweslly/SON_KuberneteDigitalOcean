FROM php:7.3-cli

RUN pecl install swoole \
    &&  docker-php-ext-enable swoole
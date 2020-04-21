FROM php:7.4-fpm-alpine
MAINTAINER Portia Nomsa Mnguni <nomsapn@gmail.com>
WORKDIR /var/www/html
RUN  composer require --dev symfony/phpunit-bridge
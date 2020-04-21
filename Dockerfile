FROM php:7.4-fpm-alpine
MAINTAINER Portia Nomsa Mnguni <nomsapn@gmail.com>
WORKDIR /var/www/html
RUN wget https://raw.githubusercontent.com/composer/getcomposer.org/76a7060ccb93902cd7576b67264ad91c8a2700e2/web/installer -O - -q | php -- --quiet
COPY composer.json /var/www/html
RUN mv composer.phar /usr/local/bin/composer
#RUN composer require --dev symfony/phpunit-bridge
#RUN composer require league/oauth2-server

FROM registry.hivelocity.co.jp:5000/cardinal/php:php7-1.4.0

LABEL maintainer "Hivelocity.inc."

RUN mkdir -p /var/www/wordpress/public

COPY ./wordpress/src /var/www/wordpress/public

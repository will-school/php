# we want the latest php and we want gnu core utils and a useable OS, not alpine
FROM php:8.4-apache-bookworm

RUN apt-get update && apt-get upgrade

# https://github.com/devcontainers/images/blob/main/src/php/.devcontainer/Dockerfile
RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.mode = debug" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.start_with_request = yes" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.client_port = 9000" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && rm -rf /tmp/pear
RUN curl -sSL https://getcomposer.org/installer | php \
    && chmod +x composer.phar \
    && mv composer.phar /usr/local/bin/composer

# install mysqli
RUN docker-php-ext-install mysqli

# install apache2ctl
# lynx is needed for status etc
RUN apt-get install -y apache2 lynx

# symlink /app/src to /var/www/html
# means README/editor config/etc are out of the html folder!
RUN mkdir /app || echo "/app exists!"
RUN mkdir /app/src || echo "/app/src exists!"

CMD apache2ctl start && sleep infinity;
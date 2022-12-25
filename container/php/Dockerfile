FROM php:fpm-buster
COPY ./container/php/php.ini /usr/local/etc/php/php.ini
RUN apt-get update \
    && apt-get -y install git zip unzip vim libpq-dev
RUN docker-php-ext-install pdo_pgsql

#nodejs16インストール
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash -
RUN apt install -y nodejs

# composerインストール
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

WORKDIR /var/www/html

FROM php:7.2-fpm

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin && \
        echo "alias composer='composer'" >> /root/.bashrc

# git and unzip are required by composer and symfony
RUN apt-get update \
  && apt-get install -y \
       git zlib1g-dev unzip \
  && docker-php-ext-install zip pdo pdo_mysql mysqli

WORKDIR /var/www/app
CMD ["php-fpm"]

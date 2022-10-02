FROM php:7.4-apache


RUN apt-get update -y && apt-get install -y sendmail libpng-dev

RUN apt-get update && apt-get install -y \
      build-essential \
      libpng-dev \
      libjpeg62-turbo-dev \
      libfreetype6-dev \
      locales \
      zip \
      jpegoptim optipng pngquant gifsicle \
      vim \
      unzip \
      git \
      curl \
      libzip-dev


RUN docker-php-ext-install zip

RUN docker-php-ext-install gd

RUN docker-php-ext-install opcache

RUN docker-php-ext-install mysqli

RUN a2enmod rewrite
# Install composer 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get clean
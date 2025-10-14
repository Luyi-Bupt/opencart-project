# opencart-docker/Dockerfile

FROM php:8.1-fpm

# 安装OpenCart依赖的PHP扩展
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli zip pdo pdo_mysql

# 设置工作目录
WORKDIR /var/www/html
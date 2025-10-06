FROM php:8.1-apache

# Installa le estensioni PHP necessarie per WordPress
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Abilita mod_rewrite per Apache (necessario per i permalink di WordPress)
RUN a2enmod rewrite

# Installa le dipendenze aggiuntive
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Imposta i permessi corretti per Apache
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Espone la porta 80
EXPOSE 80
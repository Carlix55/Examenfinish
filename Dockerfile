FROM php:8.3-fpm

# Instalar extensiones y dependencias
RUN apt-get update && apt-get install -y \
    git unzip curl libpq-dev libzip-dev zip \
    && docker-php-ext-install pdo pdo_pgsql zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear directorio de la app
WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN cp .env.example .env

# Puerto a exponer (Render espera 3000)
EXPOSE 3000

CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=3000

# Imagen base PHP + Apache
FROM php:8.2-apache

# Instala Node.js y npm para JavaScript
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get update && \
    apt-get install -y nodejs

# Habilita el módulo rewrite de Apache
RUN a2enmod rewrite

# Copia tu proyecto al contenedor
COPY . /var/www/html/

EXPOSE 80

# Arranca Apache (PHP) por defecto
CMD ["apache2-foreground"]

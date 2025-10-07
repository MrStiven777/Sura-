# Imagen base PHP + Apache
FROM php:8.2-apache

# Instala dependencias necesarias (sin software-properties-common)
RUN apt-get update && \
    apt-get install -y gnupg curl lsb-release && \
    curl -s https://dl.hhvm.com/conf/hhvm.gpg | apt-key add - && \
    echo "deb https://dl.hhvm.com/debian $(lsb_release -sc) main" > /etc/apt/sources.list.d/hhvm.list && \
    apt-get update && \
    apt-get install -y hhvm && \
    apt-get clean

# Instala Node.js y npm para JS
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# Habilita el módulo rewrite de Apache
RUN a2enmod rewrite

# Copia tu proyecto al contenedor
COPY . /var/www/html/

EXPOSE 80

# Arranca Apache (PHP) por defecto
CMD ["apache2-foreground"]

# Si tu proyecto usa HHVM como servidor principal, cambia CMD por:
# CMD ["hhvm", "-m", "server", "-p", "80", "-d", "hhvm.server.source_root=/var/www/html"]

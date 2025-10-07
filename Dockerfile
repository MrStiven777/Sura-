# Imagen base para proyectos Hack, JavaScript, CSS y PHP
FROM php:8.2-apache

# Instala HHVM para Hack y otras dependencias
RUN apt-get update && \
    apt-get install -y gnupg software-properties-common curl && \
    curl -s https://dl.hhvm.com/conf/hhvm.gpg | apt-key add - && \
    echo "deb https://dl.hhvm.com/debian $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/hhvm.list && \
    apt-get update && \
    apt-get install -y hhvm && \
    apt-get clean

# Instala Node.js y npm para JavaScript
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# Habilita el módulo rewrite de Apache y configura el DocumentRoot
RUN a2enmod rewrite

# Copia los archivos del proyecto al contenedor
COPY . /var/www/html/

# Permite que HHVM se ejecute como servicio si es necesario
EXPOSE 80

# Comando por defecto (usando Apache + PHP)
CMD ["apache2-foreground"]

# NOTA: Si el proyecto usa Hack con HHVM como servidor principal,
# puedes cambiar el CMD por:
# CMD ["hhvm", "-m", "server", "-p", "80", "-d", "hhvm.server.source_root=/var/www/html"]

# Requiere ajuste según la estructura y necesidades específicas del repo.

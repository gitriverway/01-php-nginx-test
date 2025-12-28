# Dockerfile
FROM richarvey/nginx-php-fpm:latest

# Configurar puertos expuestos
EXPOSE 80
EXPOSE 443

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Copiar contenido HTML/PHP a la imagen
# Nota: Esto copia el contenido estático en la imagen
# Si necesitas montar volúmenes dinámicos, deberás usar docker run con -v
COPY ./html /var/www/html

# Asegurar permisos correctos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Mantener la política de reinicio (esto es para docker run, no para build)
# Se ejecuta el comando por defecto del contenedor base

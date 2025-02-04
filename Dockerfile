# Utiliser une image officielle PHP avec Apache
FROM php:8.1-apache

# Activer les modules Apache nécessaires
RUN a2enmod rewrite

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copier les fichiers de ton projet dans le conteneur
COPY . /var/www/html/

# Définir les permissions pour Apache
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80 (pour Apache)
EXPOSE 80

# Démarrer Apache en mode foreground
CMD ["apache2-foreground"]
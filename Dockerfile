# Utiliser une image officielle de PHP avec Apache
FROM php:8.2-apache

# Copier les fichiers de votre projet dans le conteneur
COPY . /var/www/html/

# Exposer le port 80 pour accéder à l'application
EXPOSE 80

# Démarrer Apache en mode de fond
CMD ["apache2-foreground"]

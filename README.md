# ESGIS - TP LARAVEL - EXO 1

## Structure de la base de données

- Voitures
nom
photo
prix

- Locations
email
nom_prenom
addresse
voiture_id
date_retour

## Initialisation du projet

### Creation du projet

composer create-project "laravel/laravel:^10.0" td-laravel-exo1
cd td-laravel-exo1
composer install
touch database/database.sqlite

### Modification du .env

De 

```txt
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

A 

```txt
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

### Creation module Vehicule

php artisan make:model Vehicule --seed --factory --migration --controller

### Creation module Location

php artisan make:model Location --seed --factory --migration --controller

### Run & Migrer la DB

ATTENTION ! Ceci est une commande dangereuse.

php artisan migrate:refresh --seed

composer dump-autoload



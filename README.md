# Installation et test d'api.demo

## Installation de l'api

- Créez l'image docker en utilisant **docker-compose.yml** à la racine du projet.

- Installez **composer** grace à la commande `php composer.phar install`.

- Créez un hote virtuel dans le fichier **etc/hosts**.

## Modification de la base de données

- Accedez à la base de données MySQL via adminer a l'adresse [api.demo:8181](http://api.demo:8181).

- Connectez-vous en utilisant les informations suivantes:

`Système:MySQL`
`Serveur:db`
`Utilisateur:root`
`Mot de passe:root`
`Base de données:mydb`

Dans la table demandes: ajoutez, modifiez et/ou supprimer les données que vous souhaitez.

## Test de l'API

- Accedez à l'api via l'adresse [api.demo:8080](http://api.demo:8080).

- Verifiez l'existance des données en base de données
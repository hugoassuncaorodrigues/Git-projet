## Prérequis
Afin de pouvoir exécuter l'application sur votre poste, vous devez d'aborder installer les dépendances suivantes :
  * NodeJS
  * Angular cli
  * nginx
 
### Installation
#### Node
  1. Télécharger la version LTS de NodeJS [ici](https://nodejs.org/fr/download/)
  2. Suivre les étapes d'installation en laissant les options par défaut.
 
### Angular cli
  1. Après avoir installé NodeJS, ouvrir une invite de commande
  2. Taper `npm install -g @angular/cli`
 
### nginx
  1. Suivre [cette procédure](nginx-install.md).

## Exécution
Suivre [cette procédure](nginx-install.md) pour configurer une instance de nginx locale. Vérifier que nginx s'exécute avant de poursuivre.

1. Ouvrir une invite de commande à la racine du projet
2. S'assurer d'avoir les dépendance npm installées `npm install`

Si le backend est exécuté en local :
3. Exécuter `npm run start`

Si le backend de l'environnent de staging :
3. Exécuter `npm run start:staging`

Puis :
4. Ouvrir un navigateur à l'adresse [http://localhost/login](http://localhost/login)

## Tests
### Tests unitaires
1. S'assurer d'avoir toutes les dépendances avec `npm install`
2. Exécuter `npm run test:unit`
 
### Tests bout-en-bout
1. S'assurer d'avoir toutes les dépendances avec `npm install`
2. Exécuter `npm run test:e2e`

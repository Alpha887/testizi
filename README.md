# Nom du Projet

## Introduction

Ceci est un projet Laravel développé avec PHP 8.0.1, utilisant Docker pour la gestion des conteneurs. Le projet comprend une base de données MySQL et utilise phpMyAdmin pour la gestion de la base de données.

## Configuration Requise

Avant de déployer ce projet, assurez-vous d'avoir les éléments suivants installés sur votre système :
- Docker Desktop (ou Docker Engine pour Linux)
- Docker Compose

## Déploiement

1. **Cloner le Repository**

2. **Configuration de l'Environnement**
- Copiez le fichier `.env.example` et renommez-le en `.env`.
- Mettez à jour le fichier `.env` avec les informations de connexion à la base de données et d'autres configurations spécifiques à votre environnement.

3. **Démarrer les Conteneurs Docker**

4. **Accéder au Projet**
- L'application Laravel sera accessible à l'adresse : `http://localhost:8000`.
- phpMyAdmin sera accessible à l'adresse : `http://localhost:8080`. Utilisez les informations de connexion MySQL spécifiées dans le fichier `.env`.
- IL faudra executer la commande php artisan migrate pour obtenir les tables dans la base de donnee nommer "test". 

5. **Arrêter les Conteneurs Docker**

NB: Il est important de faire le "Composer update avant de debut du projet laravel"
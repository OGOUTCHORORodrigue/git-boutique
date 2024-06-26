# Test Boutique en Ligne HTML CSS JS PHP

Bienvenue dans le projet de Boutique en Ligne ! Ce projet vise à fournir une plateforme complète pour gérer une boutique en ligne, y compris la gestion des produits, des catégories, des commandes et des clients.

## Fonctionnalités

- **Admin :**
  - Gérer les produits : Ajouter, Modifier, Supprimer
  - Gérer les catégories : Modifier, Supprimer
  - Gérer les commandes : Valider, Supprimer
  - Gérer les clients : Modifier les informations

- **Client :**
  - S'inscrire
  - Se connecter
  - Rechercher les produits par catégorie
  - Passer commande

## Schéma Relationnel

Le projet est basé sur le schéma relationnel suivant :

- Client (numcli, nom, prenom, adresse, telephone)
- Categorie (code, libelle)
- Produit (ref, design, pu, imageprod, #code)
- Commande (numcmd, date, etat, qte, #numcli, #ref)
- Utilisateur (iduser, email, mdp, profil)

## Comment utiliser

### Prérequis

- Serveur local (Wamp, Xamp, Laragon, etc.)
- PHP installé localement
- Base de données MySQL configurée

### Installation

1. Clonez ce dépôt GitHub sur votre machine locale :
   
   ```
   git clone https://github.com/YAROU-Mhr/test-boutique-en-ligne-html-css-js-php.git
   ```
2. Configurez votre serveur web pour pointer vers le dossier du projet.


### Configuration de la Base de Données

1. Importez le schéma relationnel dans votre base de données MySQL `base_de_donnée.sql`.
2. Configurez les informations de connexion à la base de données dans le fichier `php/bdd.php`.

### Démarrage de l'Application

- Accédez à l'application via votre navigateur web
- Utilisateur pas défaut

### Utilisateur par défaut

 - Compte Administrateur <br>
    Mail:admin@gmail.com <br>
    Mot de passe: 12345678
 - Compte Utilisateur <br>
    Mail:user@gmail.com <br>
    Mot de passe: 12345678

## Auteur

Ce projet a été développé par [Yarou Mhr](https://github.com/YAROU-Mhr).
- Rejoignez moi sur mon site officiel [Yarou Mhr](https://yaroumhr.com) pour une panoplie de projet, des execices , des template gratuit et des articles de blog pertinant dans le dommaine de la programmation.
# Projet-boutique

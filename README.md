# MÉDIATHÈQUE IPNET

## 1. Description du projet

Le projet « Médiathèque IPNET » consiste à développer un site web dynamique permettant de consulter un catalogue de livres.

Ce mini-projet a été réalisé dans le cadre des travaux pratiques de l'UE IT 231 – Développement Web I, en Licence 2, Semestre 3, année académique 2026-2027.

Les données des livres sont stockées dans un tableau associatif PHP, sans utilisation d'une base de données.

## 2. Prérequis

Pour exécuter ce projet, il faut disposer de :

- Windows.
- XAMPP.
- PHP 8 ou une version supérieure.
- Visual Studio Code.
- Un navigateur web.

## 3. Installation et lancement

1. Installer XAMPP sur l'ordinateur.
2. Démarrer le serveur Apache depuis XAMPP Control Panel.
3. Copier le dossier `mediatheque-mp1` dans le répertoire `htdocs`.
4. Ouvrir le projet avec Visual Studio Code.
5. Ouvrir un navigateur web.
6. Accéder à l'adresse suivante :

   `http://localhost/mediatheque-mp1/`

## 4. Fonctionnalités réalisées

- Affichage d'une page d'accueil.
- Affichage du nombre total de livres.
- Comptage des livres disponibles.
- Affichage du catalogue des livres.
- Filtrage des livres par catégorie.
- Affichage des détails d'un livre.
- Vérification de l'identifiant d'un livre.
- Présentation de la médiathèque.
- Affichage automatique de la date du jour.
- Sécurisation des données avec `htmlspecialchars()`.

## 5. Organisation du projet

Le projet est organisé en plusieurs dossiers et fichiers :

- `index.php` : page d'accueil.
- `catalogue.php` : affichage et filtrage des livres.
- `detail.php` : détails d'un livre.
- `apropos.php` : présentation de la médiathèque.
- `data/livres.php` : tableau des livres.
- `includes/fonctions.php` : fonctions PHP.
- `includes/header.php` : en-tête du site.
- `includes/footer.php` : pied de page.
- `css/style.css` : mise en forme du site.

## 6. Technologies utilisées

- HTML5
- CSS3
- PHP 8+
- Visual Studio Code
- XAMPP

## 7. Conclusion

Ce projet nous a permis de mettre en pratique les notions fondamentales du langage PHP, notamment les variables, les tableaux associatifs, les conditions, les boucles, les fonctions et l'inclusion de fichiers.

Il nous a également permis de comprendre comment générer des pages web dynamiques et sécuriser les données affichées.

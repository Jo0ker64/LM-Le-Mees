# LM Le Mées

LM Le Mées est un site web informatif pour un snack boulangerie. Ce projet a été développé en utilisant le framework Symfony 7.0, avec une base de données MySQL.

## Table des matières

- [Prérequis](#prérequis)
- [Installation](#installation)
- [Configuration](#configuration)
- [Utilisation](#utilisation)
- [Fonctionnalités](#fonctionnalités)
- [Contribuer](#contribuer)
- [Licence](#licence)
- [Contact](#contact)

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants :

- PHP 8.1 ou supérieur
- Composer
- MySQL
- Node.js et npm (pour la gestion des assets)

## Installation

1. Clonez le dépôt GitHub :

    ```bash
    git clone https://github.com/Jo0ker64/LM-Le-Mees.git
    ```

2. Accédez au répertoire du projet :

    ```bash
    cd LM-Le-Mees
    ```

3. Installez les dépendances PHP via Composer :

    ```bash
    composer install
    ```

4. Installez les dépendances JavaScript et compilez les assets :

    ```bash
    npm install
    npm run build
    ```

5. Créez le fichier `.env.local` pour la configuration de l'environnement (voir la section [Configuration](#configuration)).

## Configuration

1. Configurez la base de données dans le fichier `.env.local` :

    ```env
    DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"
    ```

    Remplacez `db_user`, `db_password`, `db_name`, et `serverVersion` par vos informations MySQL.

2. Créez la base de données :

    ```bash
    php bin/console doctrine:database:create
    ```

3. Exécutez les migrations pour créer les tables :

    ```bash
    php bin/console doctrine:migrations:migrate
    ```

4. (Optionnel) Chargez les données initiales (fixtures) :

    ```bash
    php bin/console doctrine:fixtures:load
    ```

## Utilisation

1. Démarrez le serveur de développement Symfony :

    ```bash
    symfony serve
    ```

2. Accédez à l'application dans votre navigateur à l'adresse [http://localhost:8000](http://localhost:8000).

## Fonctionnalités

- Présentation des différentes offres de snacks et de boulangerie.
- Affichage des menus et des prix.
- Informations de contact et localisation.

## Contribuer

Les contributions sont les bienvenues ! Pour toute suggestion ou contribution, n'hésitez pas à ouvrir une [issue](https://github.com/Jo0ker64/LM-Le-Mees/issues) ou à soumettre une [pull request](https://github.com/Jo0ker64/LM-Le-Mees/pulls).

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus d'informations.

## Contact

Pour toute question ou remarque, vous pouvez me contacter via [mon profil GitHub](https://github.com/Jo0ker64).


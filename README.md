# Project mini-blog

## Installation
git clone [https://github.com/votre-utilisateur/votre-projet.git](https://github.com/ayshagassama1/mini-blog)https://github.com/ayshagassama1/mini-blog
cd mini-blog

## Configuration
### Install the dependences
    composer install

### Copy the `.env.example` file and change the name to `.env`
    cp .env.example .env

### Change the following lines in your .env file
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=mini-blog
    DB_USERNAME=votre_nom_utilisateur
    DB_PASSWORD=votre_mot_de_passe

### Generate the app key
    php artisan key:generate

### Execute the migration en seeders
    php artisan migrate --seed

### Launch the server
    php artisan serve

## Usage
### Connection      
    There are 2 users in the database
|Name|Email|Password|     
|----|-----|--------|
|Jonh Doe|johndoe@email.com|VerySecretPassword|
|Jane Doe|janedoe@email.com|VerySecretPassword|




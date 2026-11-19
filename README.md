# Laravel Blog CRUD

Application web de gestion d'articles développée avec Laravel.

## Fonctionnalités

- Créer, lire, modifier et supprimer des articles
- Validation des formulaires
- Protection CSRF
- Messages de confirmation

## Technologies

- PHP / Laravel
- MySQL
- Blade

## Installation

```bash
git clone https://github.com/Bitikala/laravel-blog-crud.git
cd laravel-blog-crud
composer install
cp .env.example .env
php artisan key:generate
```

Configurer la base de données dans `.env`, puis :

```bash
php artisan migrate
php artisan serve
```

![Liste des articles](screenshots/liste.png)

## Auteur

Chanel Bitika Kalengwe

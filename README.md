# device-management-backend

## Prerequisite
## php 8.1.
## mysql 5.7.22-standard.

## Install the composer in the project directory.

```
composer install

```

### Make the .env file by copying the .env.example file and create database connections.
```
cp .env.example .env

```

### Generate the unique application key in .env.
```
php artisan key:generate
```

### Migrate the tables.

```
php artisan migrate
```

### run application on the PHP development server
```
php artisan serve
```
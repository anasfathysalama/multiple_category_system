### Category Level System Using Laravel Framework 

---

#### Installation

requirements :
- PHP 8.1

after clone this repo, you should run this commands in your terminal inside project directory

```
composer install
```

then copy `` .env.example `` file and rename to `` .env `` and generate application key by run

```
php artisan key:generate 
```

after that you need to create your database on mysql and configure it with ``` .env ``` file.

then run migration ``` php artisan migrate ``` to setup your tables


run ``` php artisan serve ``` to start application server

visit http://127.0.0.1:8000/categories to see categories screen to create your categories and show it.


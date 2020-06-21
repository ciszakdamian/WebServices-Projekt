#run 01-REST-API

```
composer install
vim .env #edit db pass
php artisan migrate:fresh --seed
php artisan serve --port 8000
```

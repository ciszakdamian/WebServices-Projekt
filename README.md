# WebServices-Projekt
Modelowanie i projektowanie usług WebServices - Projekt

## Założenia projektu
 Aplikacja do zarządzania zbiorem danych oparta na WebService (muzyka, filmy, gry etc), która zawiera: 
 
- [x] 4 encje
- [x] minimum jeden serwis SOAP
- [x] minimum jeden serwis REST
- [x] informacje powinny być przechowywane w bazie danych
- [x] implementacja klienta pozwalającego wykonywać operacje CRUD
- [x] możliwość wyszukiwania elementów zbioru

## Authors:
- **Damian Ciszak** 
- **Sebastian Jankowiak**

### Requirements:
- PHP => 7.3 + php extensions (curl, soap)
- Composer
- Newer MariaDB or MySQL

## Documentation 

- ###### Project Diagram:
![project-diagram-image](https://raw.githubusercontent.com/ciszakdamian/WebServices-Projekt/master/project-webservices-diagram.png)

- ###### Movies DB:
![db-diagram-image](https://raw.githubusercontent.com/ciszakdamian/WebServices-Projekt/dev/db-diagram.png?token=AFPZD662Q7KABIDPT2BK4J266VPVU)

- ###### Dev deployment:
```
#clone repo
git clone git@github.com:ciszakdamian/WebServices-Projekt.git
cd WebServices-Projekt

#run 01-REST-API
cd 01-REST-API
composer install
vim .env #edit db pass
php artisan migrate:fresh --seed
php artisan serve --port 8000
cd ..

#run 01-SOAP-API
cd 01-SOAP-API
composer install
vim index #edit db pass 
php -S localhost:8080

#run Client
cd Client
composer install
vim conf.php #edit REST API token and base_uri (API REST url)
vim conf-soap.php #edit wsdl
php -S localhost:8181

```

After deployed open in browser http://localhost:8181/

![client-image](https://raw.githubusercontent.com/ciszakdamian/WebServices-Projekt/master/client.png)

- ###### REST API - list of all available calls
https://documenter.getpostman.com/view/5802701/Szzn6w8B or import "01-REST-API.postman_collection.json"

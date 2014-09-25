ResearchMonster
========

ResearchMonster

![alt text](https://travis-ci.org/g0ddish/ResearchMonster.svg?branch=master "Travis CI")

This is Laravel, LaravelDebugBar & Sentry

This project requires composer https://getcomposer.org/

```
composer self-update
composer install
composer update
```

This will install the project dependancies.

Create an SQL database and import this file
```
+-- ourdb.sql
```
Edit this file with the correct info
```
+-- app\config\database.php
```
As of PHP 5.4.0 you can use the built in web server for development.

```
php artisan serve
```

And then navigate to http://localhost:8000

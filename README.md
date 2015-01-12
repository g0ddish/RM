#ResearchMonster

![alt text](https://travis-ci.org/g0ddish/ResearchMonster.svg?branch=master "Travis CI")

This project, like most PHP projects, requires [Composer](https://getcomposer.org)
composer 

###Dependencies

  - Laravel
  - Sentry
  - Twitter Bootstrap
  - jQuery
  - CKEditor

After cloning the repository run.

```
composer install
```

###Database

Create an SQL database and import the file ourdb.sql.

After edit app\config\database.php with the correct info

As of PHP 5.4.0 you can use the built in web server for development.

```
php artisan serve
```

### Version
0.5.0


### Development

Want to contribute? Great!

Dillinger uses Gulp + Webpack for fast developing.
Make a change in your file and instantanously see your updates!

Open your favorite Terminal and run these commands.

First Tab:
```sh
$ node app
```

Second Tab:
```sh
$ gulp watch
```

(optional) Third:
```sh
$ karma start
```

### Todo's

 - Write Tests
 - Rethink Github Save
 - Add Code Comments
 - Add Night Mode

License
----

We retain all rights.


**Software Used**

[Twitter Bootstrap]:http://twitter.github.com/bootstrap/
[jQuery]:http://jquery.com



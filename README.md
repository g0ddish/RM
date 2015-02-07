#ResearchMonster

![alt text](https://magnum.travis-ci.com/g0ddish/RM.svg?token=71LB4aGjdWr4qqUq2zPS&branch=master "Travis CI")

This project, like most PHP projects, requires [Composer](https://getcomposer.org)
composer 
By Alex Hughes and Keegan Caradonna

###Dependencies

- PHP >= 5.4
- Mcrypt PHP Extension
- OpenSSL PHP Extension
- Mbstring PHP Extension
- Laravel
- Sentry
- Twitter Bootstrap
- jQuery
- CKEditor

After cloning the repository run

```
composer install
```

###Database

Create an SQL database and import the file ourdb.sql

After edit .env.example with the correct info and rename it to .env

As of PHP 5.4.0 you can use the built in web server for development

```
php artisan serve
```

### Version
0.9.0


### Development

Want to contribute? Send me an email


### Todo's

 - Add Code Comments
 - When user registers enter a completion message and redirect to home page
 - Fix SMTP connection because of DNS ---- hotmail autofiltering emails
 - Set subject line for email
 - Tag search feature
 - Home and Project are the same Manage has nothing
 - Allow users to only add 1 program to their profile.
 - Submit button on edit profile at the bottom
 - Project status updates on project --- ENUM … Closed/Open/Filled
 - First time login prompts you to change password
 - Javascript Calendar

License
----

We retain all rights


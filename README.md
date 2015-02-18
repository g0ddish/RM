#ResearchMonster

![alt text](https://travis-ci.org/g0ddish/RM.svg "Travis CI")

Research Monster, like most PHP projects, requires [Composer](https://getcomposer.org)
By Alex Hughes and Keegan Caradonna

 Projects supports several file types associated with projects such as 

- Popular image formats
    * JPEG
    * PNG
    * GIF
    * TGA
    * TIF
    * BMP
- Popular text formats.
    * Plain text
    * Rich text
    * XML
    * JSON
    * Code snippets
    * YAML

- Microsoft Office
    * Word
    * Access
    * Excel
    * Powerpoint
    * Project
    * Publisher 
    * Visio
- OpenOffice
    * Presentation
    * Spreadsheet
    * Text Document
- PDF
- APK
- RAR
- ZIP
- Tar


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

    php artisan serve


### Version

1.1.0

### Todo's

 - Add Code Comments
 - Tag search feature
 - First time login prompts you to change password
 - Javascript Calendar

### License

We retain all rights.


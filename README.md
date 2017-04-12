
# Edit your Laravel .env file

This package offers you the possibility to edit your .env dynamically through a controller or model. 

The current version  ships with a graphical user interface based on VueJS to offer you a very simple implementation of all features.

List of available functions:
- check, if a given key exists
- get the value of a key
- get the complete content of your .env
- get the content as JSON
- change existing values
- add new key-value-pairs
- delete existing key-value-pairs
- create/restore/delete backups
- list all backups
- get the content of a backup
- enable auto-backups
- check, if auto-backups are enabled or not
- get and set a backup-path



## Installation

### Via composer require

Install the package via the composer require command:

    composer require jeylabs/laravel-dotenv-editor

### Add the package manually

Add the following line to your composer.json require section:

    "require": {
        //other packages
        "jeylabs/laravel-dotenv-editor": "1.*"
    }

Then run the composer update command:

    composer update

### After Installation

Add the following line to your `config/app.php` providers:

    Jeylabs\DotenvEditor\DotenvEditorServiceProvider::class,

Add the following line to your `config/app.php` aliases:

    'DotenvEditor' => Jeylabs\DotenvEditor\DotenvEditorFacade::class,

Finally you have to publish the config file and view via:

    php artisan vendor:publish --provider="Jeylabs\DotenvEditor\DotenvEditorServiceProvider"

After an Update, maybe you have to force publish:

    php artisan vendor:publish --provider="Jeylabs\DotenvEditor\DotenvEditorServiceProvider" --force

Be careful, this will overwrite all your published files! It's always better to delete the ```config/dotenveditor.php```file manually and then run the ```php artisan vendor:publish``` command than to run the force version.

Now you can edit the config file and put in your values.

## Config

Open the config/dotenveditor.php and fill it up with your values.

**Note:** I had an issue where I had to switch the web-middleware between ```middleware``` and ```middleware_groups```. In Laravel 5.2, put the web-middleware in the ```middleware``` array. For Laravel 5.1 put it in the ```middleware_groups``` array.

The path to your .env should not be changed. 

## Deactivate GUI

If you don't want to use the graphical interface, you could deactivate it in the config. 

## Additional middleware

If you want to add more middlewares to the used routes, you could put them in the arrays.
# Grafika Laravel

<!-- [![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads] -->

Package is a simple service provider for [Grafika library](https://kosinix.github.io/grafika/). A beautiful library will images

## Install
Begin by installing this package through Composer. Edit your project's composer.json file to require lemesdaniel/grafika-laravel.

"require": {
    "lemesdaniel/grafika-laravel": "dev-master"
}
Next, update Composer from the Terminal:

composer update

OR in bash

``` bash
$ composer require lemesdaniel/grafika-laravel
```
### 2 - Provider

Next, add your new provider to the providers array of config/app.php:

    'providers' => [
        // Other service providers...
		Lemesdaniel\Grafika\Providers\GrafikaServiceProvider::class,
    ],


### Example



# grafika-laravel
# Laravel 5+ Vue Component Generator [![Latest Stable Version](https://poser.pugx.org/verzatiletom/vcomponent/v/stable)](https://packagist.org/packages/verzatiletom/vcomponent) [![License](https://poser.pugx.org/verzatiletom/vcomponent/license)](https://packagist.org/packages/verzatiletom/vcomponent)
A simple vue component generator using `make:v-component` artisan command in Laravel. 

## Installation
```
composer require verzatiletom/vcomponent
```

For Laravel 5.4  and below, paste this to your `config/app.php` inside your `providers` array.
```php
Verzatiletom\Vcomponent\VcomponentServiceProvider::class
```

## Usage
```
php artisan make:v-component {name} {--dir}
```

### Example
```
php artisan make:v-component DemoComponent
```
It will generate a `DemoComponent.vue`  file in the `resources/assets/js` directory by default.

### Specify the location
```
php artisan make:v-component DemoComponent --dir js/components
```
By specifying the `--dir` option, it will generate your `.vue` file on the your specified directory. In this example, it will generate your vue component in `assets/js/components` directory.

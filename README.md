# Laravel 5+ Vue Component Generator
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
php artisan make:v-component ExampleComponent
```
It will generate a `ExampleComponent.vue` in the `resources/assets/js` directory by default.

### Specify the location
```
php artisan make:v-component ExampleComponent --dir=assets/js/components
```
By specifying the `--dir` option, it will generate your `.vue` file on the your specified directory.

## Available Options
| Option | Default   | Description                                                        |
|--------|-----------|--------------------------------------------------------------------|
| dir    | assets/js | The resource directory where you want to the file to be generated. |

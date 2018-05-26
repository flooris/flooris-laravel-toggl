# LaravelToggl

## Getting started


### Composer

`composer require flooris/laravel-toggl`


### Laravel

Add the provider:
```php
'providers' => [
    Flooris\LaravelToggl\TogglServiceProvider::class,
]
```

Add the facade:
```php
'aliases' => [
    'Toggl' => Flooris\LaravelToggl\TogglFacade::class,
]
```

Generate the config file:
```php
php artisan vendor:publish
```

If using version control, add `TOGGL_KEY=your_key` to the .env or add your key directly to config/toggl.php
***


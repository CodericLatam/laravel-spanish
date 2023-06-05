# Paquete de español para Laravel
[![Latest Version on Packagist](https://img.shields.io/packagist/v/laravel-latam/spanish.svg?style=flat-square)](https://packagist.org/packages/laravel-latam/spanish)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel-latam/spanish.svg?style=flat-square)](https://packagist.org/packages/laravel-latam/spanish)
Paquete de idioma para Laravel 9 y 10

## Instalación
Puedes instalar el paquete vía composer:
```bash
composer require laravel-latam/spanish
```
Para habilitar el español config/app.php
```php
    'locale'          => 'es',
```
No basta con incluír el paquete, aunque con ello mucho
estará resuelto, pero es necesario también cargar
los diccionarios de español, para ello ejecuta en cónsola la siguiente línea:
```bash
php artisan vendor:publish --provider="LaravelLatam\Spanish\SpanishServiceProvider" --tag="spanish"
```
## Credits
- [Neftalí Yagua](https://github.com/NeftaliYagua)
- [All Contributors](../../contributors)
## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

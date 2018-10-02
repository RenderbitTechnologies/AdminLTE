# AdminLTE

[![Build Status](https://travis-ci.org/renderbit-technologies/adminlte.svg?branch=master)](https://travis-ci.org/renderbit-technologies/adminlte)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/renderbit-technologies/adminlte/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/renderbit-technologies/adminlte/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/renderbit-technologies/adminlte/badge.svg?branch=master)](https://coveralls.io/github/renderbit-technologies/adminlte?branch=master)

[![Packagist](https://img.shields.io/packagist/v/renderbit-technologies/adminlte.svg)](https://packagist.org/packages/renderbit-technologies/adminlte)
[![Packagist](https://poser.pugx.org/renderbit-technologies/adminlte/d/total.svg)](https://packagist.org/packages/renderbit-technologies/adminlte)
[![Packagist](https://img.shields.io/packagist/l/renderbit-technologies/adminlte.svg)](https://packagist.org/packages/renderbit-technologies/adminlte)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require renderbit-technologies/adminlte
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
RenderbitTechnologies\AdminLTE\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
RenderbitTechnologies\AdminLTE\Facades\AdminLTE::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="RenderbitTechnologies\AdminLTE\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email contact@renderbit.com
instead of using the issue tracker.

## Credits

- [Renderbit Technologies](https://github.com/renderbit-technologies/adminlte)
- [All contributors](https://github.com/renderbit-technologies/adminlte/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).

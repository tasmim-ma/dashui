# Tasmim's dashboard

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tasmim/dashui.svg?style=flat-square)](https://packagist.org/packages/tasmim/dashui)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/tasmim/dashui/run-tests?label=tests)](https://github.com/tasmim/dashui/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/tasmim/dashui/Check%20&%20fix%20styling?label=code%20style)](https://github.com/tasmim/dashui/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/tasmim/dashui.svg?style=flat-square)](https://packagist.org/packages/tasmim/dashui)

## Installation

You can install the package via composer:

```bash
composer require tasmim/dashui
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="dashui-config"
```

This is the contents of the published config file:

```php
return [
    'tailwind' => '/assets/css/tailwind.css',
    'alpine' => '/assets/js/alpine.js',
    'menu' => 'admin.partials.menu',
    'top-bar' => 'admin.partials.topbar'
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="dashui-views"
```

## Usage

```php

```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Tasmim](https://github.com/tasmim-ma)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

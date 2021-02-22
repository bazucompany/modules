# Bazucompany Modules
[![Source](https://img.shields.io/badge/source-Bazucompany/modules-blue.svg?style=flat-square)](https://github.com/Bazucompany/modules)
[![Latest Stable Version](https://poser.pugx.org/Bazucompany/modules/v/stable?format=flat-square)](https://packagist.org/packages/Bazucompany/modules)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)
[![Total Downloads](https://img.shields.io/packagist/dt/Bazucompany/modules.svg?style=flat-square)](https://packagist.org/packages/Bazucompany/modules)
[![Travis (.org)](https://img.shields.io/travis/Bazucompany/modules.svg?style=flat-square)](https://travis-ci.org/Bazucompany/modules)

Extract and modularize your code for maintainability. Essentially creates "mini-laravel" structures to organize your application. Originally developed for [FusionCMS](https://github.com/fusioncms/fusioncms), an open source content management system.

## Documentation
You will find user friendly and updated documentation on the [Bazucompany website](https://Bazucompanypackages.com/guide/packages/modules.html).

## Installation
Simply install the package through Composer. From here the package will automatically register its service provider and `Module` facade.

```
composer require Bazucompany/modules
```

### Config
To publish the config file, run the following:

```
php artisan vendor:publish --provider="Bazucompany\Modules\ModulesServiceProvider" --tag="config"
```

## Changelog
You will find a complete changelog history within the [CHANGELOG](CHANGELOG.md) file.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Testing
Run tests with PHPUnit:

```bash
vendor/bin/phpunit
```

## Security
If you discover any security related issues, please email shea.lewis89@gmail.com directly instead of using the issue tracker.

## Credits
- [Shea Lewis](https://github.com/kaidesu)
- [All Contributors](../../contributors)

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

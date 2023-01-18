# GameQuery - A small Laravel package to query game servers.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lewislarsen/gamequery.svg?style=flat-square)](https://packagist.org/packages/lewislarsen/gamequery)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/lewislarsen/gamequery/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/lewislarsen/gamequery/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/lewislarsen/gamequery/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/lewislarsen/gamequery/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lewislarsen/gamequery.svg?style=flat-square)](https://packagist.org/packages/lewislarsen/gamequery)

GameQuery is a small package for Laravel that allows you to query game servers for information. It currently supports
the following games:

- Minecraft (Java Edition)

In the future I plan to add support for Source games such as Counter-Strike: Global Offensive and Team Fortress 2.

This package will not work with games that do not have self-hosted servers such as Overwatch for example.

As this package is still in development, it is likely to change significantly in the future. Please excuse any bugs, they will be addressed.

## Installation

You can install the package via composer:

```bash
composer require lewislarsen/gamequery
```

## Usage

```php
use Lewislarsen\GameQuery\Facades\GameQuery;

$query = GameQuery::gameType('mc')
->ipAddress('localhost')
->port(25565)
->retrieve();

echo $query;
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lewis Larsen](https://github.com/lewislarsen)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

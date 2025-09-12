# A collection of WHMCS specific helpers.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aon4o/whmcs-helpers.svg?style=flat-square)](https://packagist.org/packages/aon4o/whmcs-helpers)
[![Tests](https://img.shields.io/github/actions/workflow/status/aon4o/whmcs-helpers/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/aon4o/whmcs-helpers/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/aon4o/whmcs-helpers.svg?style=flat-square)](https://packagist.org/packages/aon4o/whmcs-helpers)

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## API params fix

- [x] [Addons.php](src/LocalAPI/Addons.php)
- [x] [Affiliates.php](src/LocalAPI/Affiliates.php)
- [x] [Authentication.php](src/LocalAPI/Authentication.php)
- [x] [Billing.php](src/LocalAPI/Billing.php)
- [x] [Client.php](src/LocalAPI/Client.php)
- [x] [Domains.php](src/LocalAPI/Domains.php)
- [x] [Module.php](src/LocalAPI/Module.php)
- [x] [Orders.php](src/LocalAPI/Orders.php)
- [x] [Products.php](src/LocalAPI/Products.php)
- [x] [ProjectManagement.php](src/LocalAPI/ProjectManagement.php)
- [ ] [Servers.php](src/LocalAPI/Servers.php)
- [ ] [Service.php](src/LocalAPI/Service.php)
- [ ] [Support.php](src/LocalAPI/Support.php)
- [ ] [System.php](src/LocalAPI/System.php)
- [ ] [Tickets.php](src/LocalAPI/Tickets.php)
- [ ] [Users.php](src/LocalAPI/Users.php)

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/whmcs-helpers.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/whmcs-helpers)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can
support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.
You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards
on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require aon4o/whmcs-helpers
```

## Usage

```php
$skeleton = new Aon4o\WhmcsHelpers();
echo $skeleton->echoPhrase('Hello, Aon4o!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alex Naida](https://github.com/aon4o)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

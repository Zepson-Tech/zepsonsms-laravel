# Laravel ZepsonSMS

## Installation

You can install the package via composer:

```bash
composer require zepson/laravel-zepsonsms
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="NotificationChannels\ZepsonSms\ZepsonSmsServiceProvider" --tag="zepsonsms-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$zepsonsms = new NotificationChannels\ZepsonSms();
echo $zepsonsms->echoPhrase('Hello, NotificationChannels!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alpha Olomi](https://github.com/Zepson-Technologies)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

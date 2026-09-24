# fbpkg/laravel-support

Common support utilities for Laravel applications.

## Requirements

* PHP 8.2 or higher

## Installation

```bash
composer require fbpkg/laravel-support
```

## Digits

Normalize Persian and Arabic-Indic digits to ASCII digits.

```php
use Fbpkg\Support\Digits\Normalizer;

Normalizer::normalize('۱۲۳۴۵۶۷۸۹۰');
// 1234567890

Normalizer::normalize('١٢٣٤٥٦٧٨٩٠');
// 1234567890
```

## Phone

Normalize Iranian mobile phone numbers to the international `+98` format.

```php
use Fbpkg\Support\Phone\Number;

Number::normalize('09121234567');
// +989121234567

Number::normalize('۰۹۱۲۱۲۳۴۵۶۷');
// +989121234567

Number::normalize('+989121234567');
// +989121234567
```

Invalid Iranian mobile numbers throw an `InvalidArgumentException`.

## License

The MIT License (MIT). Please see the [LICENSE](LICENSE) file for more information.

# alfabank-laravel

[![Latest Stable Version](https://poser.pugx.org/davidnadejdin/tinkoff-laravel/v/stable?format=plastic)](https://packagist.org/packages/davidnadejdin/tinkoff-laravel)
[![Total Downloads](https://poser.pugx.org/davidnadejdin/tinkoff-laravel/downloads?format=plastic)](https://packagist.org/packages/davidnadejdin/tinkoff-laravel)
[![Latest Unstable Version](https://poser.pugx.org/davidnadejdin/tinkoff-laravel/v/unstable?format=plastic)](https://packagist.org/packages/davidnadejdin/tinkoff-laravel)
[![License](https://poser.pugx.org/davidnadejdin/tinkoff-laravel/license?format=plastic)](https://packagist.org/packages/davidnadejdin/tinkoff-laravel)

Laravel facade for Tinkoff api client

## Installation

Install package through Composer

``` bash
$ composer require davidnadejdin/tinkoff-laravel
```

Publish config

``` bash
$ php artisan vendor:publish --provider="Davidnadejdin\LaravelTinkoff\TinkoffServiceProvider" --tag=config
```

### Example

```php
<?php

use Davidnadejdin\LaravelTinkoff\Tinkoff;

Tinkoff::resend([
    'Token' => '123',
]);


```

## Credits

- [David Nadejdin][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](LICENSE) for more information.

## Related packages

- [davidnadejdin/tinkoff-php-client](https://github.com/Davidnadejdin/tinkoff-php-client) Api client for Alfabank.

[link-author]: https://github.com/davidnadejdin

[link-contributors]: ../../contributors

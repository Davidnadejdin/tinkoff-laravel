<?php

namespace Davidnadejdin\LaravelTinkoff;

use Illuminate\Support\Facades\Facade;

/**
 * @method static init(array $params)
 * @method static charge(array $params)
 * @method static finishAuthorize(array $params)
 * @method static confirm(array $params)
 * @method static cancel(array $params)
 * @method static getState(array $params)
 * @method static resend(array $params)
 * @method static submit3DSAuthorization(array $params)
 * @method static sendClosingReceipt(array $params)
 *
 * @see \Davidnadejdin\TinkoffClient\Client
 */
class Tinkoff extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'laraveltinkoff';
    }
}

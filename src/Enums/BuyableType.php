<?php declare(strict_types=1);

namespace Sincos\HermesSDK\Enums;

enum BuyableType:string
{
    case PHYSICAL = 'physical';
    case DIGITAL = 'digital';
    case GIFT_CERTIFICATE = 'gift_certificate';
}

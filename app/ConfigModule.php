<?php
/**
 * This file is part of the Potara Framework (https://potara.org)
 *
 * @see       https://github.com/potara/potara-php
 * @copyright Copyright (c) 2018-2020 Bruno Lima
 * @author    Bruno Lima <eu@brunolima.me>
 * @license   https://github.com/potara/potara-php/blob/master/LICENSE (MIT License)
 */

namespace App;

use Potara\Core\Crud\ConfigModuleInterface;

class ConfigModule implements ConfigModuleInterface
{
    public static function isEnable(): bool
    {
        return true;
    }

    public static function getConf(): array
    {
        return [
            'router' => [
//                'auth' => \Potara\Core\Provider\Jwt\JwtRouter::class
            ],
            'provider' => [
                \Potara\Core\Provider\ErrorHandlerProvider::class => [],
                \Potara\Core\Provider\EventProvider::class => [],
                \Potara\Core\Provider\TwigProvider::class => [],
//                \Potara\Core\Provider\Jwt\JwtProvider::class => []
            ],
            'middleware' => [
                \Potara\Core\Middleware\TrailingSlash::class => []
            ],
            'event' => [
                \Potara\Core\Provider\Swiftmailer\SwiftmailerListenerEvents::class => []
            ]
        ];
    }
}

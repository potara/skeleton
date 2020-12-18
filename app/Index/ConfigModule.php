<?php
/**
 * This file is part of the Potara Framework (https://potara.org)
 *
 * @see       https://github.com/potara/potara-php
 * @copyright Copyright (c) 2018-2020 Bruno Lima
 * @author    Bruno Lima <eu@brunolima.me>
 * @license   https://github.com/potara/potara-php/blob/master/LICENSE (MIT License)
 */

namespace App\Index;


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
            'router'   => [
                '' => \App\Index\Router\IndexRouter::class
            ],
            'provider' => [
                \App\Index\Provider\IndexProvider::class => []
            ],
            'event'    => [
//                \App\Index\Event\IndexEvent::class => []
            ]
        ];
    }
}

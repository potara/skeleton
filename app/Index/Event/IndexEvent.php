<?php
/**
 * This file is part of the Potara Framework (https://potara.org)
 *
 * @see       https://github.com/potara/potara-php
 * @copyright Copyright (c) 2018-2020 Bruno Lima
 * @author    Bruno Lima <eu@brunolima.me>
 * @license   https://github.com/potara/potara-php/blob/master/LICENSE (MIT License)
 */

namespace App\Index\Event;


use DI\Container;
use Potara\Core\ListenerEventInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Contracts\EventDispatcher\Event;

class IndexEvent implements ListenerEventInterface
{

    public function load(Container &$container, EventDispatcher &$eventDispatcher, $args = [])
    {
//                $eventDispatcher->addListener('event_test', function (Event $event) {
//                    echo 'event test';
//                });
    }
}

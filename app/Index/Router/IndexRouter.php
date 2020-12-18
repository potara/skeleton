<?php
/**
 * This file is part of the Potara Framework (https://potara.org)
 *
 * @see       https://github.com/potara/potara-php
 * @copyright Copyright (c) 2018-2020 Bruno Lima
 * @author    Bruno Lima <eu@brunolima.me>
 * @license   https://github.com/potara/potara-php/blob/master/LICENSE (MIT License)
 */

namespace App\Index\Router;

use App\Index\Controller\IndexController;
use Potara\Core\RouterInterface;
use Slim\Routing\RouteCollectorProxy;

class IndexRouter
{

    public function __invoke(RouteCollectorProxy $router)
    {
        $indexController = IndexController::class;
        $router->get('', [$indexController, 'index']);
    }
}

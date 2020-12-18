<?php
/**
 * This file is part of the Potara Framework (https://potara.org)
 *
 * @see       https://github.com/potara/potara-php
 * @copyright Copyright (c) 2018-2020 Bruno Lima
 * @author    Bruno Lima <eu@brunolima.me>
 * @license   https://github.com/potara/potara-php/blob/master/LICENSE (MIT License)
 */

namespace App\Index\Controller;

use DI\Container;
use Potara\Core\Crud\AbstractControler;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class IndexController extends AbstractControler
{

    public function index(Request $request, Response $response, Container $container)
    {
        return $container->get('view')
            ->render($response, 'Index/View/index.html.twig', [
                'local' => 'IndexController:index'
            ]);
    }
}

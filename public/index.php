<?php

require_once __DIR__ . '.' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Potara\Core\Kernel\Kernel;
use Potara\Core\Kernel\KernelConf;
use Potara\Core\Kernel\KernelEntity;

$confApp = new KernelEntity();
$confApp->setCacheModule(false);
$app = new Kernel($confApp);
$app->app->run();
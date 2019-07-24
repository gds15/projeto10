<?php

require '../chamarAutoLoad.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
//sempre por os use dos controllers aqui
use Html\Controllers\TesteController;




$app = new Html([

    'settings' => [
        'displayErrorDetails' => true,
        'debug'               => true,
        
    ]

]);

$app->get('/', TesteController::class . ':index');

$app->run();

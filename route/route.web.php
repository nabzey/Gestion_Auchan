<?php
use App\Controller\LoginSecurity;
use App\Controller\CommandeController;
use App\Service\SecurityController;
$routes = [
    '/' => [
        'controller' => LoginSecurity::class,
        'action' => 'index',
    ],
    '/login' => [
        'controller' => LoginSecurity::class,
        'action' =>'store' ,
    ],
    '/commandes/liste' => [ 
        'controller' => CommandeController::class,
        'action' => 'index',
    ],
    '/commandes/form' => [
        'controller' => CommandeController::class,
        'action' => 'create',
    ],
];
return $routes;
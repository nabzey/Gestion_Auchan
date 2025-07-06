<?php
use App\Controller\LoginSecurity;
use App\Controller\CommandeController;

$routes = [
    '/' => [
        'controller' => LoginSecurity::class,
        'action' => 'index',
    ],
    '/commandes/liste' => [
        'controller' => CommandeController::class,
        'action' => 'index',
    ],
    '/commandes/form' => [
        'controller' => CommandeController::class,
        'action' => 'create',
    ],
    '/commandes/store' => [
        'controller' => CommandeController::class,
        'action' => 'store',
    ],
];

return $routes;

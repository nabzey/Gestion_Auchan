<?php
namespace App\Core;
use App\Controller\CommandeController;

class Router {
    public static function resolve(array $routes): void {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
        if (substr($uri, 0, 1) !== '/') {
            $uri = '/' . $uri;
        }

        $uri = preg_replace('#/+#', '/', $uri);
        
       if (isset($routes[$uri])) {
          $route = $routes[$uri];

    if (isset($route['controller'], $route['action'])) {
        $controllerName = $route['controller'];
        $action = $route['action'];

        if (class_exists($controllerName)) {
            $controller = new $controllerName();

            if (method_exists($controller, $action)) {
                $controller->$action(); 
                return;
            }
        }
    }
}
    }
}

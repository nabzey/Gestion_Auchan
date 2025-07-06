<?php
namespace App\Core;

class Router {
    public static function resolve(array $routes): void {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
        $uri = str_replace(["'", '"', '/public'], '', $uri);
        $uri = '/' . ltrim(preg_replace('#/+#', '/', $uri), '/');

        $route = $routes[$uri] ?? null;

        if ($route) {
            $controllerName = $route["controller"];
            $action = $route["action"];
            $controller = new $controllerName();

            if (method_exists($controller, $action)) {
                $controller->{$action}();
                return;
            }
        }

        http_response_code(404);
        require __DIR__ . '/../../templates/commandes/404.html';
    }
}

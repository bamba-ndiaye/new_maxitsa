<?php

namespace App\Core;

use App\Core\Middlewares\Auth;
//use App\Core\Middlewares\Guest;

class Router
{
    public static function resolve($uris)
    {
    //    var_dump($_SERVER); die;
        $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
        $currentUri = rtrim($requestUri, '/') ?: '/';
        if (isset($uris[$currentUri])) {
            $route = $uris[$currentUri];
            $controllerClass = $route['controller'];
            $method = $route['method'];
            $middlewares = $route['middlewares'] ?? [];

            // Charger le contrôleur
            if (!class_exists($controllerClass)) {
                $classFile = str_replace(['Src\\Controller\\', '\\'], ['../src/controller/', '/'], $controllerClass) . '.php';
                if (file_exists($classFile)) {
                    require_once $classFile;
                }
            }

            $controller = new $controllerClass();
            $controller->$method();
        } else {
            http_response_code(404);
            echo "<h1>404 - Page Not Found</h1>";
        }
    }

}
<?php

use Tools\Exceptions\Router\InvalidRouteException;
use Tools\Logger\Logger;

class Router
{
    public string $controller = "main";
    public string $action = "index";
    public Logger $logger;

    public function __construct($logger)
    {
        $this->logger = $logger;
    }

    public function routing() {
        $routes = explode('/', $_SERVER["REQUEST_URI"]);
        $controllerName = ucfirst(!empty($routes[1]) ? $routes[1] : $this->controller) . "Controller";
        $controllerPath = '\\Controllers\\' . $controllerName;
        if (!empty($routes[2])) {
            if (strpos($routes[2], '?')) {
                $actionName = stristr($routes[2], '?', true);
            } else {
                $actionName = $routes[2];
            }
        } else {
            $actionName = $this->action;
        }
        if (class_exists($controllerPath)) {
            $controller = new $controllerPath();
            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            } else {
                throw new InvalidRouteException("Action does not exist!");
            }
        } else {
            throw new InvalidRouteException("Controller does not exist!");
        }
    }
}
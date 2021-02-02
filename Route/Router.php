<?php

namespace Route;

use Tools\Exceptions\Router\InvalidRouteException;
use Tools\Logger\Logger;

class Router
{
    /**
     * @var Logger
     */
    public Logger $logger;

    public function __construct($logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param $route
     * @param $controllerName
     * @param $actionName
     * @throws InvalidRouteException
     */
    public function route($route, $controllerName, $actionName)
    {
        $pathURL = parse_url($_SERVER["REQUEST_URI"])["path"];
        if ($pathURL == $route) {
            $controllerPath = '\\Controllers\\' . $controllerName;
            $action = strtolower($actionName);
            if (class_exists($controllerPath)) {
                $controller = new $controllerPath();
                if (method_exists($controller, $action)) {
                    $controller->$action();
                } else {
                    throw new InvalidRouteException("Action does not exist!");
                }
            } else {
                throw new InvalidRouteException("Controller does not exist!");
            }
        }
    }
}

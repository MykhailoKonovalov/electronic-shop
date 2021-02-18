<?php

namespace Framework\Route;

use Dialog\Logger;

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
     */
    public function route($route, $controllerName, $actionName)
    {
        $pathURL = parse_url($_SERVER["REQUEST_URI"])["path"];
        if ($pathURL == $route) {
            $controllerPath = 'App\\Controllers\\' . $controllerName;
            $action = strtolower($actionName);
            if (class_exists($controllerPath)) {
                $controller = new $controllerPath();
                if (method_exists($controller, $action)) {
                    $controller->$action();
                }
            }
        }
    }
}

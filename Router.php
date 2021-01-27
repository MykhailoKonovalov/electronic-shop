<?php

class Router
{
    public string $controller = "main";
    public string $action = "index";

    public function routing() {
        $routes = explode('/', $_SERVER["REQUEST_URI"]);
        $controllerName = ucfirst(!empty($routes[1]) ? $routes[1] : $this->controller) . "Controller";
        $controllerPath = '\\Controllers\\' . $controllerName;
        $actionName = !empty($routes[1]) ? $routes[2] : $this->action;
        if (class_exists($controllerPath)) {
            $controller = new $controllerPath();
            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            } else {
                echo "Action does not exist!";
            }
        } else {
            echo "Controller does not exist!";
        }
    }
}
<?php

use Tools\Exceptions\Renderer\InvalidLayoutException;
use Tools\Exceptions\Renderer\InvalidTemplateException;
use Tools\Exceptions\Router\InvalidRouteException;
use Tools\Logger\Logger;

include "../autoloader.php";

$routerLogger = new Logger("rout_log.txt");
$router = new Router($routerLogger);

try {
    $router->routing();
} catch (InvalidRouteException $routeException) {
    $router->logger->warning($routeException->getMessage(), ["uri" => $_SERVER["REQUEST_URI"]]);
} catch (Exception $exception) {
}
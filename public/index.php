<?php

use Route\Router;
use Tools\Exceptions\Router\InvalidRouteException;
use Tools\Logger\Logger;
use Sessions\Session;
include "../autoloader.php";
$session = new Session();
$session->start();
$routerLogger = new Logger("rout_log.txt");
$router = new Router($routerLogger);

try {
    include "../Route/routes.php";
} catch (InvalidRouteException $routeException) {
    $router->logger->warning($routeException->getMessage(), ["uri" => $_SERVER["REQUEST_URI"]]);
} catch (Exception $exception) {
}
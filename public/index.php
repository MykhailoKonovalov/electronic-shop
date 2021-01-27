<?php

//use Tools\TemplateRenderer;
//use Models\Storage;
//use Tools\Exceptions\Storage\InvalidIDExcemption;
//use Tools\Exceptions\Renderer\InvalidLayoutException;
//use Tools\Exceptions\Renderer\InvalidTemplateException;
//use Tools\Logger\Logger;
include "../autoloader.php";

$router = new Router();
$router->routing();
////
//$products = require "../Database/products.php";
//$storageLogger = new Logger();
//$storage = new Storage($products, $storageLogger);
//
//$id = $_GET["id"];
//$template = "catalog";
//$layout = "layout";
//
//try {
//    if (!$id) {
//        $data = $storage->all();
//    } else {
//        $data = $storage->getById($id);
//    }
//    $templateLogger = new Logger("temp_log.txt");
//    $renderer = new TemplateRenderer($templateLogger);
//    $renderer->render($template, $layout, $data);
//} catch (InvalidIDExcemption $IDExcemption) {
//    $storage->logger->warning($IDExcemption->getMessage(), ["id" => $id]);
//} catch (InvalidLayoutException $layoutException) {
//    $renderer->logger->warning($layoutException->getMessage(), ["layout" => $layout]);
//} catch (InvalidTemplateException $templateException) {
//    $renderer->logger->warning($templateException->getMessage(), ["template" => $template]);
//} catch (Exception $exception) {
//}

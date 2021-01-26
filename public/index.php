<?php

use Core;
use Exceptions\Storage\InvalidIDExcemption;
use Exceptions\Renderer\InvalidLayoutException;
use Exceptions\Renderer\InvalidTemplateException;
use Core\Logger\Logger;

include "../autoloader.php";

$products = require "../Database/products.php";
$storageLogger = new Logger();
$storage = new Core\Storage($products, $storageLogger);

$id = $_GET["id"];
$template = "catalog";
$layout = "layout";

try {
    if (!$id) {
        $data = $storage->all();
    } else {
        $data = $storage->getById($id);
    }
    $templateLogger = new Logger("temp_log.txt");
    $renderer = new Core\TemplateRenderer($templateLogger);
    $renderer->render($template, $layout, $data);
} catch (InvalidIDExcemption $IDExcemption) {
    $storage->logger->warning($IDExcemption->getMessage(), ["id" => $id]);
} catch (InvalidLayoutException $layoutException) {
    $renderer->logger->warning($layoutException->getMessage(), ["layout" => $layout]);
} catch (InvalidTemplateException $templateException) {
    $renderer->logger->warning($templateException->getMessage(), ["template" => $template]);
} catch (Exception $exception) {
}
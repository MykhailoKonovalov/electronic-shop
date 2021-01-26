<?php

use Core;
use Exceptions\Storage\MissingParameterException;
use Exceptions\Storage\InvalidIDExcemption;

try {
    include "../autoloader.php";
    $products = require "../Database/products.php";
    $storage = new Core\Storage($products);
    if (!$_GET["id"]) {
        $data = $storage->all();
    } else {
        $data = $storage->getById($_GET['id']);
    }
    $renderer = new Core\TemplateRenderer();
    $renderer->render("catalog", 'layout', $data);
} catch (InvalidIDExcemption $IDExcemption) {
    echo $IDExcemption->getMessage();
}


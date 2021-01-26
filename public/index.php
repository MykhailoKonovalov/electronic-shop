<?php

use Core;
include "../autoloader.php";
$products = require "../Database/products.php";
$storage = new Core\Storage($products);
$data = $storage->all();
$renderer = new Core\TemplateRenderer();
$renderer->render("catalog", 'layout', $data);

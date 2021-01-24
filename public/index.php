<?php

ini_set("display_errors", 1);

include "../autoloader.php";

$data = require "../Database/products.php";

$renderer = new \Core\TemplateRenderer;
$renderer->render('catalog', 'layout', $data);
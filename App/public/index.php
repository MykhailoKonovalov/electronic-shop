<?php

use Framework\Sessions\Session;
use Symfony\Component\Dotenv\Dotenv;

include "../../vendor/autoload.php";

$session = new Session();
$session->start();

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . "/../../.env");

include "../../Framework/Route/routes.php";

<?php

use Sessions\Session;
use Symfony\Component\Dotenv\Dotenv;

include "../vendor/autoload.php";

$session = new Session();
$session->start();

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . "/../.env");

include "../Route/routes.php";

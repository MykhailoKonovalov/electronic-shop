<?php

use Sessions\Session;

include "../vendor/autoload.php";

$session = new Session();
$session->start();

include "../Route/routes.php";

<?php

use Route\Router;

Router::route("/", "MainController", "index");
Router::route("/basket", "BasketController", "index");
Router::route("/catalog", "CatalogController", "index");
Router::route("/catalog/show", "CatalogController", "show");
Router::route("/signin", "UserController", "signin");
Router::route("/signup", "UserController", "signup");

<?php

require_once '../vendor/autoload.php';
require_once '../route/route.web.php';
require_once '../app/config/bootstrap.php';


use App\Core\Router;

Router::resolve($route);


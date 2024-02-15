<?php

use app\classes\Uri;
use app\classes\Routes;

require "../bootstrap.php";

$routes = [
    '/' => 'controllers/index.php',
    '/creat_user' => 'controllers/create_user.php',
];

$uri = Uri::load();

require Routes::load($routes, $uri);






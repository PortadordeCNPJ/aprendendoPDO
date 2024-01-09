<?php

use app\classes\Uri;
use app\classes\Routes;

require "../bootstrap.php";

phpinfo();

$routes = [
    '/' => 'controllers/index.php',
];

$uri = Uri::load();

require Routes::load($routes, $uri);






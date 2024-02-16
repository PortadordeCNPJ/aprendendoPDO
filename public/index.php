<?php
require "../bootstrap.php";

use app\classes\Uri;
use app\classes\Layout;
use app\classes\Routes;

$routes = [
    '/' => 'controllers/index',
    '/user_create' => 'controllers/user_create',
    '/user_store' => 'controllers/user_store',
];

$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);
require $layout->master('layout');

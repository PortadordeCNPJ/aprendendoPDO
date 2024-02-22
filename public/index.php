<?php
require "../bootstrap.php";

error_reporting(E_ALL);
ini_set("display_errors", 1);

use app\classes\Routes;
use app\classes\Layout;
use app\classes\Uri;


$routes = [
    '/' => 'controllers/index',
    '/user_create' => 'controllers/user_create',
    '/user_store' => 'controllers/user_store',
];

$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);
require $layout->master('layout');

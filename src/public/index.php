<?php
declare(strict_types=1);

session_start();

require 'vendor/autoload.php';

$router = new Router();

$router->root();
<?php
declare(strict_types=1);

session_start();

require 'vendor/autoload.php';
// require 'core/Routeur.php';
// require 'core/Database.php';
// require 'controllers/Icontrollers.php';
// require 'controllers/Home.php';
// require 'controllers/Authentication.php';

// require 'models/Users.php';
// require 'models/Hikes.php';

use Core;
use Controllers;
use Models;

$router = new \Core\Router();

$router->root();
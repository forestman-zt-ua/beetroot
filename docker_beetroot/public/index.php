<?php


// FRONT CONTROLLER

// Settings
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Files
const ROOT = __DIR__;
require_once(ROOT . '/components/Router.php');


// Call Router
$router = new Router();
$router->run();

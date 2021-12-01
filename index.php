<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
define('DS', DIRECTORY_SEPARATOR);
define('BASEDIR', __DIR__);
define('BASEURL', '/assignments_tracker');

//Autoloader
require_once 'vendor/autoload.php';
//Load config
$config = require_once 'app/config/config.php';

//Include Database
$db = new Database($config['database']);
//$dbh = $db->connect();


//Rendering html
$view = new View();

//Rendering main page
//$view->render();


//Routing
$router = new Router($config);
$router->run(($_SERVER['REQUEST_URI']), $db);

//Pass it to Router->run()
//Include Router




<?php

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

$router = new Core\Router;

require_once __DIR__ . '/../config/routes.php';

$method = $_POST["method"] ?? $_SERVER["REQUEST_METHOD"];
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$router->route($uri,$method);


?>
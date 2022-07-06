<?php

// С помощью файла .htaccess перенаправлям ВСЕ запросы на index
// С помощью функции $router->route делаем require нужный php файл

// returns first element of array $_Get, that is url
$url = key($_GET);

// Including routers
require_once 'src/routers/router.php';
$router = new Router();

$router->addRoute("/config/migration", "../configuration/migration.php");
$router->addRoute("/", "main.php");
$router->addRoute("/auth/register", "register.php");
$router->addRoute("/auth/login", "login.php");
$router->addRoute("/auth/logout", "../services/logout.php");

$router->route("/".$url);

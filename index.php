<?php

// С помощью файла .htaccess перенаправлям ВСЕ запросы на index
// С помощью функции $router->route делаем require нужный php файл

// returns first element of array $_Get, that is url
$url = key($_GET);

// Including routers
require 'src/routers/router.php';
$router = new Router();

$router->addRoute("/", "index.php");
$router->addRoute("/auth/register", "register.php");
$router->addRoute("/auth/login", "login.php");

$router->route("/".$url);

// Setting connection to database
//require_once 'src/configuration/connection.php';

<?php
use core\Router;
use src\controllers\HomeController;

$router = new Router();

$router->get('/','HomeController@index');
$router->get('/fotos/{id}', 'HomeController@fotos');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
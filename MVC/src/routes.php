<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');
$router->get('/usuarios/{id}', 'UsuariosController@edit');
$router->get('/usuario/{id}/excluir', 'UsuariosController@del');
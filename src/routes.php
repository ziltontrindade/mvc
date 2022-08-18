<?php
use core\Router;

$router = new Router();

//parametros classeDoController, metodo de acesso
$router->get('/','HomeController@index');
$router->get('/novo','UsuariosController@add');
$router->post('/novo','UsuariosController@addAction');

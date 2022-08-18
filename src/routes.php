<?php
use core\Router;

$router = new Router();

//parametros classeDoController, metodo de acesso
$router->get('/','HomeController@index');
$router->get('/teste','HomeController@teste');
$router->get('/fotos','HomeController@fotos');
$router->get('/foto/{nome}','HomeController@foto');

$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
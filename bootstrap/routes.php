<?php
$router = new \Bramus\Router\Router();
$router->setNamespace('App\Controllers');
$router->get('/', 'PageController@home');
$router->get('/add', 'PageController@getAdd');
$router->post('/add', 'PageController@postAdd');
$router->get('/edit/(\d+)', 'PageController@getEdit');
$router->post('/edit/(\d+)', 'PageController@postEdit');
$router->all('/delete/(\d+)', 'PageController@delete');
$router->run();


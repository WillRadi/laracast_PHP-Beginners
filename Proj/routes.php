<?php

$router->get('',        'PageController@home');
$router->get('contact', 'PageController@contact');
$router->get('culture', 'PageController@culture');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
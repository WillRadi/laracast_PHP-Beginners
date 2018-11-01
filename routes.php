<?php

/**
 * Em vez de trabalhar com arrays, é interessante que o Route seja uma classe.
 */

/**
 * Mudança de um array p várias chamadas de método:
 */
$router->get('',        'PageController@home');
$router->get('contact', 'PageController@contact');
$router->get('culture', 'PageController@culture');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
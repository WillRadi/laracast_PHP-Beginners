<?php

/**
 * Em vez de trabalhar com arrays, é interessante que o Route seja uma classe.
 */

/**
 * Mudança de um array p várias chamadas de método:
 */
$router->get('', 'controllers/indexController.php');
$router->get('contact', 'controllers/contactController.php');
$router->get('culture', 'controllers/cultureController.php');
$router->post('name', 'controllers/add-name.php');
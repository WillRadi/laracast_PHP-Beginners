<?php

/**
 * Em vez de trabalhar com arrays, é interessante que o Route seja uma classe.
 */


/**
 * Mètodo que DEFINE pra qual controller a rota acessada encaminhará o usuário.
 */
$router->define([
    ''          => 'controllers/indexController.php',
    'contact'   => 'controllers/contactController.php',
    'culture'   => 'controllers/cultureController.php'
]);
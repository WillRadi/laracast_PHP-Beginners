<?php

// app chrome p mostrar o dump bonito: var_masterpiece

require "core/bootstrap.php";

/**
 * Router, faça o carregamento das rotas e já me direcione para a rota digitada
 * 
 * Nota: Router e request já vêm do bootstrap.php, possibilitando acesso aos métodos estáticos load e uri
 * 
 */
require Router::load('routes.php')
    ->direct(Request::uri());
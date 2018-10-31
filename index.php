<?php

// app chrome p mostrar o dump bonito: var_masterpiece

/**
 * Autoload carrega todas as classes declaradas
 * Criar composer.json, executar composer install
 * Fazer o require do autoload
 */
require "vendor/autoload.php";

require "core/bootstrap.php";

/**
 * Router, faça o carregamento das rotas e já me direcione para a rota digitada
 * 
 * Nota: Router e request já vêm do bootstrap.php, possibilitando acesso aos métodos estáticos load e uri
 * 
 */
Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
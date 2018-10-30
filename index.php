<?php

// app chrome p mostrar o dump bonito: var_masterpiece

$query = require "core/bootstrap.php";

/**
 *  Além da conexão com o banco, ourta necessidade básica é o router.
 *  Assim, o site pode direcionar do ponto inicial (index.php) p qqr outra página
 */

 /**
  * Instanciar a nova classe do Router (q vem do CORE/BOOTSTRAP)
  */
  $router = new Router;

  /**
   * Depois de instanciado o obj de rotas,
   * faz a requisição do arquivo que define as rotas
   */
  require "routes.php";

  $uri = trim($_SERVER['REQUEST_URI'], '/');

  /**
   * Agora faz a requisição do arquivo que retorna do método DIRECT
   * (que, efetivamente, DIRECIONA o usuário para outra página)
   */
  require $router->direct($uri);
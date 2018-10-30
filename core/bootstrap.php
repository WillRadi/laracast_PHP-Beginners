<?php

/**
 * boostrap.php já não faz mais sentido em ser uma instância do QB
 * Então, são feitas as alterações $app[]
 */

$app = [];

require "core/database/QueryBuilder.php";

require "core/database/Connection.php";

require "core/Router.php";

require "core/Request.php";

$app['config'] = require "config.php";

/**
 * make() faz a requisição do arquivo config.php
 * Antes era uma variável que fazia a requisiçãço de um array, agora é uma chave do array $app,
 * que retorna a requisição de um array
 */

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
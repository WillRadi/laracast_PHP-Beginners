<?php

/**
 * $tasks = $query->fetchAll('todos');
 * $query não existe mais.
 * A instância do banco/QueryBuilder é $app[database]
 */

$tasks = $app['database']->fetchAll('todos');
$names = $app['database']->fetchAll('users');

require "views/index.view.php";
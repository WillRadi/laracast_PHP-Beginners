<?php

/**
 * $tasks = $query->fetchAll('todos');
 * $query não existe mais.
 * A instância do banco/QueryBuilder é $app[database]
 */

$tasks = $app['database']->fetchAll('todos');

require "views/index.view.php";
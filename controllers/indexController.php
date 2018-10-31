<?php

/**
 * $tasks = $query->fetchAll('todos');
 * $query não existe mais.
 * A instância do banco/QueryBuilder é $app[database]
 */

$tasks = App::get('database')->fetchAll('todos');
$names = App::get('database')->fetchAll('users');

require "views/index.view.php";
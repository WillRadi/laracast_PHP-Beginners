<?php

use Proj\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));

function view($name, $data = [])
{
    extract($data);
    
    return require "Proj/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}
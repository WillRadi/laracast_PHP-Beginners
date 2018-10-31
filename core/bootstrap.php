<?php

/**
 * Container:
 * pegue coisas, jogue dentro de uma caixa e dê a ela um label.
 * Neste exemplo:
 * coisas = require 'config.php'
 * label da caixa = config
 */

/**
 * "pegue o conteúdo do arquivo config.php e armazene ele em um container e armazene ele na chave 'config'"
 */
App::bind('config', require 'config.php');

/**
 * o array [database] não tem nada a ver com o label do container
 * App::get('config') - pega o conteúdo de dentro da caixa
 */
App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));
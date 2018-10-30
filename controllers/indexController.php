<?php

$tasks = $query->fetchAll('todos');

require "views/index.view.php";
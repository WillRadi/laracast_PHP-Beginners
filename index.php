<?php

$query = require "bootstrap.php";

$tasks = $query->fetchAll('todos');

require "index.view.php";
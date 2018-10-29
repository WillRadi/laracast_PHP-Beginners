<?php

require "functions.php";
require "database/Connection.php";
require "Task.php";

$greeting = 'Hi, ' . htmlspecialchars($_GET['name']);

$animals = ['Pugs', 'Beagles', 'Cats'];

$task = [
    'title'         => 'Make coffee',
    'due'           => 'In the morning',
    'assigned_to'   => 'Me',
    'completed'     => true
];

$age = $_GET['age'];

$canPass = canPass($age);

// =========================

$pdo = Connection::make();
$tasks = fetchAllTasks($pdo);

require "index.view.php";
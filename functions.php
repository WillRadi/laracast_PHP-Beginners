<?php

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function canPass($age) {
    return $age >= 21 ? true : false;
}

function fetchAllTasks($pdo) {
    $statemant = $pdo->prepare('select * from todos');
    
    $statemant->execute();
    
    return $statemant->fetchAll(PDO::FETCH_CLASS, 'Task');
}
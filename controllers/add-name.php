<?php

$app['database']->insert('users', [
    'name' => $_POST['name']
]);

/**
 * Após executar o post, volte à URL /
 */
header('Location: /');
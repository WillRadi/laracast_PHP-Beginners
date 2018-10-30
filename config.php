<?php

return $config = [
    'database' => [
        'host'      => 'pgsql:host=127.0.0.1',
        'db'        => 'my_todo',
        'user'      => 'will',
        'pass'      => '123',
        'options'   => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
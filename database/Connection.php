<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO("pgsql:host=127.0.0.1;dbname=my_todo;", "will", '123');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
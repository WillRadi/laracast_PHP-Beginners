<?php

class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                $config['host'].';dbname='.$config['db'].';',
                $config['user'],
                $config['pass'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
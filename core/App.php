<?php

/**
 * Lembrar do composer dump-autoload
 */
class App
{
    /**
     * Todas as coisas adicionadas por meio do bind(), serão estocadas aqui
     * tem q ser estático, pq não há uma instância do App, os meodos são todos estáticos
     */
    protected static $registry = [];

    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {
            throw new Exception("Error!");
        }

        return static::$registry[$key];
    }
}
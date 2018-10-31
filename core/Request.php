<?php

/**
 * Classe responsável em encontrar as informções da requisição
 */
class Request
{
    /**
     * Método responsável apenas em verificar qual URL foi acessada e coloca no modelo do routes
     */
    public static function uri()
    {
        /**
         * Funciona apenas quando não há parâmetros na URL
         */
        // return trim($_SERVER['REQUEST_URI'], '/');

        /**
         * utiliza da funçao parse_url para converter a url no padrão estabelecido no routes
         */
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
<?php

/**
 * Classe responsável em encontrar as informções da requisição
 */
class Request
{
    /**
     * Método responsável apenas em verificar qual URL foi acessada
     */
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}
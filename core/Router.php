<?php

class Router
{
    protected $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * Método vai tertornar o caminho de um arquivo
     * assim, o index.php está fazendo a requição do que retorna desse método
     * (o valor da chave que corresponde a URL acessada no navegador)
     */
    public function direct($uri)
    {
        /**
         * Verifica se a URL digitada existe
         */
        if(array_key_exists($uri, $this->routes)){
            return $this->routes[$uri];
        }
    }
}
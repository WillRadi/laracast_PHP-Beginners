<?php

class Router
{
    protected $routes = [];

    public static function load($file)
    {
        /**
         * Assim como era no index, será feito o require do arquivo que usa uma variável $router
         * Então, esta é instanciada antes da requisição do arquivo
         */
        $router = new self;


        /**
         * Espera uma variável $router, que é uma instância da classe Router
         */
        require $file;

        return $router;
    }

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
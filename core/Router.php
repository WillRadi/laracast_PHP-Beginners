<?php

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

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

    /**
     * método que CRIA uma nova rota get
     */
    public function get($uri, $controller)
    {
        /**
         * Na chave que uri, adicione o valor controller
         */
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * Método vai tertornar o caminho de um arquivo
     * assim, o index.php está fazendo a requição do que retorna desse método
     * (o valor da chave que corresponde a URL acessada no navegador)
     */
    public function direct($uri, $method)
    {
        // modelo que está retornando: PageController@contact
        if(array_key_exists($uri, $this->routes[$method])){

            /**
             * Como o callAction n sespera um array, usa-se o ... no return.
             * Ele converte em string se houver uma no array
             */
            return $this->callAction(
                ...explode('@', $this->routes[$method][$uri])
            );
        }
    }

    protected function callAction($controller, $action)
    {
        /**
         * Lembrando q o que está vindo na $controller é uma string que corresponde ao nome da classe do PageCotroller
         */
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception("{$controller} não tem a o método");
        }

        return $controller->$action();
    }
}
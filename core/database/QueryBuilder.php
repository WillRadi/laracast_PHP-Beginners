<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll($table) {
        $statemant = $this->pdo->prepare("select * from {$table}");
        
        $statemant->execute();

        return $statemant->fetchAll(PDO::FETCH_CLASS);
    }
    
    public function insert($table, $parameters)
    {
        /**
         * sprintf = substituir os %s (strings) pelos valores sequenciais após a query
         * implode para pegar as chaves que vêm pelo $parameters (array) e transformar em string separada por vírgula
         * O último parâmetro não é diretamente o valor inserido. São apenas placeholders
         * a sintaxe deve ser = :parametro
         * por isso o segundo implode
         */
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        /**
         * A linha $statemant->execute($parameters) faz o bind
         * Mas erros podem acontecer nela, portanto, colocar dentro do Try
         */
        try {
            $statemant = $this->pdo->prepare($sql);
        
            $statemant->execute($parameters);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }
}
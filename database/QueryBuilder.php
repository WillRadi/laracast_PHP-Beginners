<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function fetchAll($table) {
        $statemant = $this->pdo->prepare("select * from {$table}");
        
        $statemant->execute();

        return $statemant->fetchAll(PDO::FETCH_CLASS);
    }   
}
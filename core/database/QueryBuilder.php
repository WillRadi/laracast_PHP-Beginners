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
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        
        try {
            $statemant = $this->pdo->prepare($sql);
        
            $statemant->execute($parameters);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }
}
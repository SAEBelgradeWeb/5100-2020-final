<?php

class QueryBuilder
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($table)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table}");

        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($table, $data)
    {
//        $data  = [
//            'subject' => 'posruka',
//            'message' => 'kako ste?'
//        ];

        //INSERT INTO 'messages'
    }
}


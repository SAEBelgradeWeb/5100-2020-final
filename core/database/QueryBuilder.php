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

        $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(", " , array_keys($data)),
            ":" . implode(", :" , array_keys($data)));

        $query = $this->pdo->prepare($sql);

        $query->execute($data);

    }
}


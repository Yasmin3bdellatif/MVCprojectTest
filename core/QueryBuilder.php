<?php

namespace core\database;

class QueryBuilder {

    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo=$pdo;

    }

    public function insert($table, $params) {
        $sql=sprintf(
           " INSERT INTO %s (%s) VALUES (%s)",
           $table,
           implode(',', array_keys($params)),
           ':' .implode(',:', array_keys($params))
        );
        try {
            $statement=$this->pdo->prepare($sql);
            $statement->execute($params);
        } 
        catch (PDOExeption $e) {
            die($e->getMessage());
        }
    }
    
}
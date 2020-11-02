<?php

namespace Core\models;
use Core\models\Connection;

abstract class AbstractModel {
    protected $connection;

    public function __construct()
    {
        $this->connection = Connection::connect();
    }
    
    public function index()
    {
        var_dump($this->connection);
        $sql = "select * from {$this->table}";
        $list = $this->connection->prepare($sql);
        $list->execute();
        return $list->fetchAll();
    }

    public function show( $field, $value)
    {
        $sql = "select * from {$this->table} where {$field} = ?";
        $list = $this->connection->prepare($sql);
        $list->bindValue(1, $value);
        $list->execute();
        return $list->fetch();
    }

    public function destroy( $field, $value)
    {
        $sql = "delete from {$this->table} where {$field} = ?";
        $delete = $this->connection->prepare($sql);
        $delete->bindValue(1, $value);
        $delete->execute();
        return $delete->rowCount();
    }
}
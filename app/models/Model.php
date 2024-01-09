<?php

namespace app\Models;


abstract class Model{

    //Essa função protege a conecção com o banco, permitindo que apenas quem está dentro de Model possar usar a conecção.
    protected $connection;

    public function __construct() {
        //$this chamando a conecção com o banco e chamando junto a classe com o método do banco
        $this->connection = Connection::connect();
    }

    public function all()
    {
        $sql = "select * from {$this->table}";
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }

    public function find($field, $value)
    {
        $sql = "select * from {$this->table} where {$field} = ?" ;
        $list = $this->connection->prepare($sql);
        $list->bindValue(1, $value);
        $list->execute();

        return $list->fetch();
    }

    public function delete()
    {
        $sql = "delete from {$this->table} whwre $field = ?"; 
        $delete = $this->connection->prepare($sql);
        $delete->bindValue(1, $value);
        $delete->execute();

        return $delete->rowCount();
    }
}
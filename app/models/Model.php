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
        //o prepare() é usado para poder substituir o valor que está vindo do sql
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }

    public function find($field, $parameters)
    {
        $sql = "select * from {$this->table} where {$field} = :id" ;
        //o bindValue é oque vai fazer a substituição dos doque esta no select, pela ? que está sendo chamada
        $list = $this->connection->prepare($sql);

        //O bindParam não vai funcionar se você tentar passar um valor direto para ele, pois ele espera os paramentos da função para funcionar
        // $list->bindParam('id', 3);
        $list->execute($parameters);

        return $list->fetch();
    }

    public function delete()
    {
        $sql = "delete from {$this->table} where $field = ?"; 
        $delete = $this->connection->prepare($sql);
        $delete->bindValue(1, $value);
        $delete->execute();

        return $delete->rowCount();
    }
}
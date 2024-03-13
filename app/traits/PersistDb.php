<?php

namespace app\traits;

use app\models\querybuilder\Insert;
use app\models\querybuilder\Update;

trait PersistDb
{

    //função que vai dar um INSERT geral, poderá ser usada em todo o código
    public function insert($attributes)
    {
       $sql = Insert::sql($this->table, $attributes);

       $insert = $this->connection->prepare($sql);

       return $insert->execute($attributes);
    }

    public function update($attributes, $where)
    {
        $sql = (new Update)->where($where)->sql($this->table, $attributes);

        $update = $this->connection->prepare($sql);

        $update->execute($attributes);

        return $update->rowCount();
    }
}

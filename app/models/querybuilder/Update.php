<?php

namespace app\models\querybuilder;

class Update 
{

    public function where($where) 
    {
        $this->where = $where;
    }

    public function sql($table, $attributes)
    {
        $sql = "update {$table} set ";

        foreach ($attributes as $key =>$value)
        {
            $sql.= "{$key} = :{$key}";
        }

        dd($sql);
    }
}
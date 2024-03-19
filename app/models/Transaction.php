<?php

namespace app\models;

use Closure;

class Transaction extends Model
{
    //Usando o callback para poder pegar os valores de outra função para poder usar na função desejada
    public function transactions(Closure $callback)
    {
        $callback();
    }
    public function __get($name)
    {
        if (!property_exists($this, $name)) {
            $model = __NAMESPACE__ . '\\' . ucfirst($name);
            return new $model();
        }
    }
}

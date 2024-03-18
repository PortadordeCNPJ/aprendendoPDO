<?php

use app\models\User;
use app\classes\Validation;

$validation = new Validation;
$validate = $validation->validate($_POST);

$user = new User;

//Array que recebe os dados tratados para inserilos dentro da função de insert
$cadastrado = $user->insert($validate);

if($cadastrado){
    header('location:/');
}
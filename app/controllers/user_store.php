<?php

use app\models\User;

//Filtragem de dados que serão feitas antes de dar um insert dentro do banco
$name = htmlspecialchars($_POST['name']);

$email = htmlspecialchars($_POST['email']);

$password = htmlspecialchars($_POST['password']);

$user = new User;

//Array que recebe os dados tratados para inserilos dentro da função de insert
$cadastrado = $user->insert([
    'name' => $name,
    'email' => $email,
    'password' => $password,
]);

if($cadastrado){
    header('location:/');
}
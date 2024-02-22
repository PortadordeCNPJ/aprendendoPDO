<?php

use app\models\User;


$name = htmlspecialchars($_POST['name']);

$email = htmlspecialchars($_POST['email']);

$password = htmlspecialchars($_POST['password']);

$user = new User;

$cadastrado = $user->insert([
    'name' => $name,
    'email' => $email,
    'password' => $password,
]);

if($cadastrado){
    header('location:/');
}
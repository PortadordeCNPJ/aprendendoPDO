<?php

use app\models\User;

$user = new User;
// $users = $user->all();

$userEncontrado = $user->find('id',['id' => 3]);

$layout->add('home');


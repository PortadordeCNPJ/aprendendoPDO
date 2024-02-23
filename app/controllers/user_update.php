<?php

use app\models\User;

$user = new User;

//Carrega dentro da variavel $user que recebe da tabela de users, para dar um Update utilizando a função update
$updated = $user->update($_POST);

dd($updated);
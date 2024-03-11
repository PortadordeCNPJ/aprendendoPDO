<?php

use app\models\User;

$user = new User;

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

//Carrega dentro da variavel $user que recebe da tabela de users, para dar um Update utilizando a função update
$updated = $user->update($_POST,['id' =>$id]);

dd($updated);
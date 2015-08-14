<?php

include 'ValidarClass.php';
$usuario = filter_input(INPUT_POST, 'User');
$password = filter_input(INPUT_POST, 'Password');

$cuenta = new Validar\Usuario1\ValidarClass();
$cuenta->User = $usuario;
$cuenta->Password = $password;

$cuenta->Validar();

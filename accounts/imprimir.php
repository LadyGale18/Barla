<?php
include 'alidarClass.php';

$cuenta = new \Validar\Usuario1\ValidarClass();
$cuenta->cuenta= "correcto";
        
echo 'cuenta:' . $cuenta->cuenta;
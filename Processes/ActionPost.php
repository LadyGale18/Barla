<?php

include 'Recolector.php';

use Recolector\quantity;

$quantityTonico = filter_input(INPUT_POST, 'InputCTonico');
$quantityJabon = filter_input(INPUT_POST, 'InputCJabon');
$quantityTratamiento = filter_input(INPUT_POST, 'InputCTratamiento');
$quantityPack = filter_input(INPUT_POST, 'InputCPack');
$quantityAceite = filter_input(INPUT_POST, 'InputCAceite');


$tonico = new quantity\Recolector();
$tonico->setQuantity($quantityTonico);

$jabon = new quantity\Recolector();
$jabon->setQuantity($quantityJabon);

$aceite = new quantity\Recolector();
$aceite->setQuantity($quantityAceite );

$Tratamiento = new quantity\Recolector();
$Tratamiento ->setQuantity($quantityTratamiento);

$Pack = new quantity\Recolector();
$Pack ->setQuantity($quantityPack);

echo 'esto:' . get_class($tonico);






























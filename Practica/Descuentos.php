<?php

$productos=[];
$r="Y";
while ($r != "N") {
    $producto=readline("Ingrese el nombre del producto que desea comprar ");
    array_push($productos,$producto);
    $r=readline("Desea ingresar otro producto? Y/N ");
}


for ($i=0; $i < count($productos); $i++) { 
    $valor=readline("Ingrese el precio del producto $productos[$i] a comprar: ");
    $mult=$valor*0.35;
    $resultado=$valor-$mult;
    echo "El valor sin descuento es: $valor, con descuento es: $resultado \n";
}

<?php
$r="Y";
$productos=[];
$precios=[];
$Productos_or=[];

while ($r != "N") {
    $producto=readline("Ingrese el nombre del producto que desea ordenar ");
    array_push($productos,$producto);
    $r=readline("Desea ingresar otro producto? Y/N ");
}

for ($i=0; $i < count($productos); $i++) { 
    $ancho=readline("Ingrese el ancho del producto ");
    $alto=readline("Ingrese el alto del producto ");
    $resultado=$ancho*$alto;
    array_push($precios,$resultado);
}

$Productos_or=array_combine($productos,$precios);

arsort($Productos_or);

var_dump($Productos_or);
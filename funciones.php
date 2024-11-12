<?php

$nombre="Camila";
$apellido="Rojas";

// Concatenar

echo $nombre.' '.$apellido."\n";

function concatenar($nombre,$apellido){
    echo $nombre.' '.$apellido."\n";
}

concatenar($nombre,$apellido);

function suma($numeros){
    $suma=0;
    for($i=0; $i < count($numeros); $i++) { 
        $suma+=$numeros[$i];
    }
    return "La suma de los valores es: $suma";
}

$numeros=[1,3,6,7,9,1,2,3];
echo suma($numeros);
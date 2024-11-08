<?php

$valorA = true;
$valorB = true;
$valorC= false;

// Ambos son verdaderos
$resultado1= $valorA && $valorB;

var_dump(value: $resultado1); //TRUE

// Uno es verdadero y otro es falso
$resultado1= $valorA && $valorC;

var_dump(value: $resultado1); // FALSE

// Uno de los dos se cumple o ambos se cumplen
$resultado1= $valorA || $valorC;

var_dump(value: $resultado1); // True

// SI ambos se cumple el restultado sera falso

$resultado1= ($valorA xor $valorB); 

var_dump(value: $resultado1); //FALSE

// Negar algo

$resultado1= !$valorA;

var_dump(value: $resultado1); //FALSE












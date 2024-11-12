<?php

$cantidad= readline("Ingrese la altura del arbol deseada: ");

for ($i=1; $i <= $cantidad ; $i++) { 
    $ast=str_repeat("*",$i);
    echo $ast."\n";
}
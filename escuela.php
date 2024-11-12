<?php

$edades=[10,4,6,2,12,5];

for ($i=0; $i < count($edades) ; $i++) { 
    if ($edades[$i] < 5) {
        echo "El estudiante con $edades[$i] años tendra sus juguetes en la parte inferior de la bodega \n";
    }elseif ($edades[$i]>=5 && $edades[$i]<=7) {
        echo "El estudiante con $edades[$i] años tendra sus juguetes en la parte media de la bodega \n";
    }elseif($edades[$i]>7){
        echo "El estudiante con $edades[$i] años tendra sus juguetes en la parte alta de la bodega \n";
    }else{
    echo "$edades[$i] Tendras tus juguetes en la bodega de al lado \n";
    }
}
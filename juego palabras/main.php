<?php

$palabras=["Gato","Cat","Dog","Perro","Sancho","Quijote","Sapo"];

$form="<form action='analisis.php' method='POST'>";

for ($i=0; $i < count($palabras); $i++) { 
   $form.="La palabra es:".str_shuffle($palabras[$i])."<br>". 
   " <input type='text' placeholder='Ingresa la palabra ordenada' name='palabra$i'>
     <br>";
}

$button="<button type='submit'>Enviar</button>";
$formCierre="</form>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego palabras</title>
</head>
<body>
    <?php
    echo $form.$button.$formCierre;
    ?>
</body>
</html>
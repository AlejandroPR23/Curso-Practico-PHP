<?php

$palabras=["Gato","Cat","Dog","Perro","Sancho","Quijote","Sapo"];
$palabrasdesordenadas=[];

for ($i=0; $i < count($palabras); $i++) { 
    $palabrasdesordenadas[$i]=str_shuffle($palabras[$i]);
}

print_r($palabrasdesordenadas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego palabras</title>
</head>
<body>
    <form action="analisis.php" method="POST">
        <?php
        for ($i=0; $i < count($palabras) ; $i++) { 
           echo " <label for='palabra$i'>Palabra ".$i+1 ."</label>
                  <input type='text' name='palabra$i'>
                  <br>";
        }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
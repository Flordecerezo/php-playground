<?php

include("ejercicio21.php");

$temperaturas = inicializador_array(10, -10, 40);
$media = calcular_media($temperaturas);
echo "<h2>Media: $media</h2>";
//print_r($temperaturas);
$max = calcular_max($temperaturas);
echo "<h2>Max: $max</h2>";

$min = calcular_min($temperaturas);
echo "<h2>Min: $min</h2>";


?>
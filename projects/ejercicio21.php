<?php

$listaA = inicializador_array(10, 1, 20);
echo "<pre>";
print_r($listaA);
echo "</pre>";

$listaB = inicializador_array(20, -10, -20);
echo "<pre>";
print_r($listaB);
echo "</pre>";

function inicializador_array($numero_elementos, $min, $max) {
    $lista = array();
    for ($i = 0; $i < $numero_elementos; $i++) {
        $lista[$i] = rand($min, $max);
    }
    return $lista;
}

function calcular_media($lista) {
    $suma = 0;
    $numero_elementos = count($lista);
    for ($i = 0; $i < $numero_elementos; $i++) {
        $suma = $suma + $lista[$i];
    }
    $media = $suma / $numero_elementos;
    //echo "<h1>+++$media</h1>";
    return $media;
}

function calcular_max($lista) {
    $max = $lista[0];
    for ($i = 0; $i < $numero_elementos; $i++) {
        if ($temperaturas[$i] > $max) {
            $max = $temperaturas[$i];
        }
    }
    return $max;
}

function calcular_min($lista) {
    $min = $lista[0];
    for ($i = 0; $i < $numero_elementos; $i++) {
        if ($temperaturas[$i] > $min) {
            $min = $temperaturas[$i];
        }
    }
    return $min;
}
?>
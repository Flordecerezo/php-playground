<?php

//Uso de la funcion
imprimir_tabla_multiplicar(9);

//Definicion de la funcion
function imprimir_tabla_multiplicar ($numero) {
    //echo "<h1>$numero</h1>";
    echo "<table border=\"1\">";
    for($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td> x </td>";
        echo "<td>$i</td>";
        echo "<td> = </td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>
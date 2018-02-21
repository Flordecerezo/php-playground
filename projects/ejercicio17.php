<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 17</title>
</head>
<body>

<?php

$alumnos = array("Antonio"=>"27", "María"=>"29", "Juan"=>"28", "Pepe"=>"31");

echo "<h1>Ordena ascendente por valor</h1>";
asort($alumnos);

foreach ($alumnos as $clave => $valor) {
    echo "<h2>$clave = $valor</h2>";
}

echo "<h1>Ordena por descendente por valor</h1>";
arsort($alumnos);

foreach ($alumnos as $clave => $valor) {
    echo "<h2>$clave = $valor</h2>";
}

echo "<h1>Ordena por ascendente por clave</h1>";
ksort($alumnos);

foreach ($alumnos as $clave => $valor) {
    echo "<h2>$clave = $valor</h2>";
}

echo "<h1>Ordena por descendente por clave</h1>";
krsort($alumnos);

foreach ($alumnos as $clave => $valor) {
    echo "<h2>$clave = $valor</h2>";
}


?>

</body>
</html>
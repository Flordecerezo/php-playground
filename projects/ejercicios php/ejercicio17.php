<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 16</title>
</head>
<body>

<?php

$frutas = array("limón", "naranja", "banana", "albaricoque");

echo "<h1>Ordenada</h1>";
sort($frutas);

for ($i =0; $i < count($frutas); $i++) {
    echo "<h2>$frutas[$i]</h2>";
}

echo "<h1>Inversa</h1>";
rsort($frutas);

for ($i =0; $i < count($frutas); $i++) {
    echo "<h2>$frutas[$i]</h2>";
}

?>

</body>
</html>
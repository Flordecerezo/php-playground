<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 15.6</title>
</head>
<body>

<form method="GET">
    <div>
    <label for="numero_elementos">Introduce un número</label>
    <input type="text" name="numero_elementos">
    </div>

    <button type="submit">Enviar</button>
</form>

<?php

$numero_elementos = $_GET["numero_elementos"];

if (!isset($numero_elementos) || empty($numero_elementos)) die;

$temperaturas = array();

for ($i = 0; $i < $numero_elementos; $i++) {
    $temperaturas[$i] = rand(1, 30);
}

//MEDIA
$suma = 0;
$i = 0;
while ($i < $numero_elementos) {
    $suma = $suma + $temperaturas[$i];
    $i++;
}
$media = $suma / $numero_elementos;

echo "<h4>Media: $media</h4>";
//MAXIMO
$maximo = $temperaturas[0];
$i = 0;
while ($i < $numero_elementos) {
    if ($temperaturas[$i] > $maximo) {
        $maximo = $temperaturas[$i];
    }
    $i++;
}
echo "<h4>Maximo: $maximo</h4>";
//MINIMO
$minimo = $temperaturas[0];
$i = 0;
while ($i < $numero_elementos) {
    if ($temperaturas[$i] < $minimo) {
        $minimo = $temperaturas[$i];
    }
    $i++;
}
echo "<h4>Minimo: $minimo</h4>";

echo "<pre>";
print_r($temperaturas);
echo "</pre>";

?>

</body>
</html>
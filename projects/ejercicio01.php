<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

//Esto es un comentario

/*

Esto es un comentario
de varias líneas

*/

/*
$texto = "Hola";
$numero = 20;
$precio = 100.75;
$estaAprobado = true;

echo $texto;
echo "<br>";
echo $numero;
echo "<br>"
echo $precio;
echo "<br>";
echo $estaAprobado;
echo "<br>";

*/
/*for($numero = 0; $numero <=10; $numero++;) {
    echo "Número: $NUMERO";
    echo "<br>"; 

}*/

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Page title</title>
</head>
<body>
<h1><?php echo $title; ?></h1>
<?php
echo "<table border=\"1\">";
$numero = 8;
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
?>
</body>
</html>
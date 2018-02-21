<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Ejercicio 9</title>
</head>
<body>
    <form method="POST">
    <div>
    <label for="number">Introduce un número</label>
    <input type="text" name="numero">
    </div>

    <button type="submit">Enviar</button>
    </form>
<?php
echo "<table border=\"1\">";
$numero = int()
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
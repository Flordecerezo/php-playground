<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 14</title>
</head>
<body>

<form method="get">
    <div>
    <label for="nota">Introduce una nota:</label>
    <input type="number" name="nota" min="1" max="10">
    <input type="text" value="Introduce algo...">
    </div>
    <input type="submit" value="Enviar">
</form>

<?php

$nota = $_GET("nota");

if (isset($nota)) {
echo "<h1>Nota: $nota;</h1>";

if ($nota >= 0 && $nota <5) {
    echo "Insuficiente";
} else {
    if ($nota >=5 && $nota <6) {
        echo "Suficiente";
    } else {
        if ($nota >=6 && $nota <7) {
            echo "Bien";
        } else {
            if ($nota >=7 && $nota <9) {
                echo "Notable";
            } else {
                if ($nota >= 9 && $nota <10) {
                    echo "Sobresaliente";
                }
            }
        }
    }
}
}


?>

</body>
</html>
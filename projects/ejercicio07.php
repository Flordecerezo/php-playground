<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Ejercicio 7</title>
</head>
<body>

<form method="get">
    <div>
        <label for="name">Nombre:</label>
        <input type="text" name="nombre">
        <label for="name">Apellidos:</label>
        <input type="text" name="apellidos">
    </div>

    <button type="submit">Enviar</button>
</from>

<?php

if (!empty($_GET["nombre"])) {
    echo "<br/>";
    echo "Nombre:  ".$_GET["nombre"];
    echo "<br/>";
    echo "Apellido: ".$_GET["apellidos"];
}

?>
</body>
</html>
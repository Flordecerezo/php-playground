<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Ejercicio 8</title>
</head>
<body>
<form method="post">
    <div>
        <label for="name">Dato:</label>
        <input type="text" name="dato">
    </div>

    <button type="submit">Enviar</button>
</from>

<?php

if (!empty($_POST["dato"])) {
    echo "<br/>";
    echo "Dato:  ".$_POST["dato"];
}

?>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 11</title>
</head>
<body>
<form method="get">
    <div>
    <label for="numero_moneda">Número de monedas:</label>
    <input type="number" name="numero_moneda" min="1" max="5">
    </div>
    <div>
    <label for="tipo_moneda">Tipo de moneda:</label>
        <select name="tipo_moneda">
            <option value="dolar" selected>Dólar</option>
            <option value="euro">Euro</option>
            <option value="yen">Yen</option>
            <option value="libra">Libra Esterlina</option>
            <option value="franco">Franco Suizo</option>
        </select>
    </div>
        <input type="submit" value="Lanzar">
</form>
    <?php
        $numero_moneda = $_GET["numero_moneda"];
        $tipo_moneda = $_GET["tipo_moneda"];

        echo $numero_moneda;
        echo "<br/>";
        echo $tipo_moneda;

        $monedas = array();

        for($i = 0; $i < $numero_moneda; $i++) {
            $monedas[$i] = rand(0, 1);
        }

        $imagenes = array();
        $imagenes["dolar"]["cara"] = 'imagenes/dolar_cara.jpg';
        $imagenes["dolar"]["cruz"] = 'imagenes/dolar_cruz.jpg';
        $imagenes["euro"]["cara"] = 'imagenes/cara.gif';
        $imagenes["euro"]["cruz"] = 'imagenes/cruz.jpg';
        $imagenes["libra"]["cara"] = 'imagenes/libra_cara.gif';
        $imagenes["libra"]["cruz"] = 'imagenes/libra_cruz.jpg';
        $imagenes["yen"]["cara"] = 'imagenes/yen_cara.jpg';
        $imagenes["yen"]["cruz"] = 'imagenes/yen_cruz.png';
        $imagenes["franco"]["cara"] = 'imagenes/franco_cara.jpg';
        $imagenes["franco"]["cruz"] = 'imagenes/franco_cruz.jpg';

        for($i = 0; $i < $numero_moneda; $i++) {
            if ($monedas[$i] == 0) {
                echo "<img src=\"".$imagenes[$tipo_moneda] ["cara"]."\">";
            } else {
                echo "<img src=\"".$imagenes[$tipo_moneda] ["cruz"]."\">";

            }
        }
    ?>
</body>
</html>
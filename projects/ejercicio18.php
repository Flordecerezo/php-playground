<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 18</title>
</head>
<body>

<?php

$paises = array("Italia"=>"Roma", 
                "Luxemburgo"=>"Luxemburgo", 
                "Belgica"=> "Bruselas", 
                "Dinamarca"=>"Copenhagen", 
                "Finlandia"=>"Helsinki", 
                "Francia" => "Paris", 
                "Eslovaquia"=>"Bratislava", 
                "Eslovenia"=>"Liubliana", 
                "Alemania" => "Berlin", 
                "Grecia" => "Atenas", 
                "Irlanda"=>"Dublin", 
                "Holanda"=>"Amsterdam", 
                "Portugal"=>"Lisboa", 
                "España"=>"Madrid", 
                "Suecia"=>"Estocolmo", 
                "Reino Unido"=>"Londres", 
                "Chipre"=>"Nicosia", 
                "Lituania"=>"Vilnius", 
                "Republica Checa"=>"Praga", 
                "Estonia"=>"Tallin", 
                "Hungria"=>"Budapest", 
                "Letonia"=>"Riga", 
                "Malta"=>"La Valeta", 
                "Austria" => "Viena", 
                "Polonia"=>"Varsovia");

echo "<h1>Paises Europeos y Capitales</h1>";
ksort($paises);

foreach ($paises as $clave => $valor) {
    echo "La capital de $clave es $valor";
    echo "</br>";
}

?>

</body>
</html>
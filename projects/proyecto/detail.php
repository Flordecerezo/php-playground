<?php
include_once("config.php");

$codigo = $_GET['codigo'];
//echo "<h1>$codigo</h1>";
//exit;

$query = "SELECT * FROM producto where codigo=$codigo";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tienda</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
</head>
<a href="index.php"> Volver </a>
<body>

	<table width='80%' height='20%' border=5 bordercolor='green' style="text-align:center;">

	<tr bgcolor='red'>
		<td><font color='white'>Imagen</font></td>
		<td><font color='yellow'>Codigo</font></td>
		<td><font color='blue'>Nombre</font></td>
		<td><font color='grey'>Precio</font></td>
		<td><font color='pink'>Fabricante</font></td>
		<td><font color='brown'>Descripción</font></td>
        <!--<td>Enlace</td>-->
	</tr>

	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td><img src=\"".$res['imagen']."\" width=\"200\" height=\"100\"></td>";
		echo "<td>".$res['codigo']."</td>";
		echo "<td>".$res['nombre']."</td>";
		echo "<td>".$res['precio']."</td>";
		echo "<td>".$res['codigo_fabricante']."</td>";
		echo "<td>".$res['descripcion']."</td>";
		//echo "<td><a href=\"detail.php?codigo=".$res['codigo']."\"> ver</a> </td>";
		echo "</tr>";
		
	}
	mysqli_close($mysqli);
	?>
	</table>
</body>
</html>
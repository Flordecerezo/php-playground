<?php
// including the database connection file
include_once("config.php");
// fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM producto");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tienda</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
	<style>
    a { color: orange; } /* CSS link color */
  </style>
</head>

<body>
<h1><ul><a href="admin/login.php">Entrar como Administrador</a></ul></h1>

	<table width='80%' height='20%' border=5 bordercolor='green' style="text-align:center;">
	<tr bgcolor='red'>
		<td><font color='white'>Imagen</font></td>
		<td><font color='yellow'>Codigo</font></td>
		<td><font color='blue'>Nombre</font></td>
		<td><font color='grey'>Precio</font></td>
		<td><font color='pink'>Fabricante</font></td>
		<td><font color='brown'>Descripción</font></td>
		<td><font color='green'>Enlace</font></td>
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
		echo "<td><a href=\"detail.php?codigo=".$res['codigo']."\"> ver</a> </td>";
		echo "</tr>";
		
	}
	mysqli_close($mysqli);
	?>
	</table>

	<div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contactos</h4>
              <ul class="list-unstyled">
                <li><a href="https://twitter.com/intent/tweet" class="text-white">Siguenos en Twitter</a></li>
                <li><a href="http://www.facebook.com" class="text-white">Gusta en Facebook</a></li>
                <li><a href="https://es.mail.yahoo.com/" class="text-white">Me correo de Email</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
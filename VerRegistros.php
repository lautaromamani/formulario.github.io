<html>
<head>
	<title>VerRegistros</title>
</head>
<body>
	<?php
		$server="sql212.infinityfree.com";
		$usuario="if0_37500115";
		$contrase�a="uy7vCEzQmbsEx ";
		$bd="if0_37500115_dbase";

		$conexion = mysqli_connect($server, $usuario, $contrase�a, $bd)
			or die ("Error en la conexion...");

		$consulta = mysqli_query($conexion, "SELECT * from datoss" )
			or die ("Error al traer los datos...");

		echo "<table border = '1'>";
		echo "<tr>";
		echo "<th id= 'orden'>Orden</th> ";
		echo "<th id= 'clave'>Clave</th> ";
		echo "<th id= 'nombre'>Nombre</th> ";
		echo "<th id= 'sexo'>Sexo</th> ";
		echo "</tr>";

		while ($extraido = mysqli_fetch_array($consulta))
		{
			echo "<tr>";
			echo "<td>".$extraido["Orden"]."</td>";
			echo "<td>".$extraido["Clave"]."</td>";
			echo "<td>".$extraido["Nombre"]."</td>";
			echo "<td>".$extraido["Sexo"]."</td>";
			echo "</tr>";
		}

		mysqli_close($conexion);
			echo "</table>";
	?>
</body>
</html>
<html>
<head>
	<title>Eliminar Datos</title>
</head>
<body>
	<?php 
		$server="sql212.infinityfree.com";
		$usuario="if0_37500115";
		$contrase�a="uy7vCEzQmbsEx ";
		$bd="if0_37500115_dbase";

		$conexion = mysqli_connect($server, $usuario, $contrase�a, $bd)
			or die ("Error en la conexion...");

		$clave = $_POST["txtClave"];

		mysqli_query($conexion, "DELETE from datoss where clave= '$clave'")
			or die ("Error al eliminar los datos...");

		mysqli_close($conexion);
			echo "Datos eliminados correctamente....";
	?>

</body>
</html>
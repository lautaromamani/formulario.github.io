<html>
<head>
	<title>Actualizar datos</title>
</head>
<body>
	<?php
		$server="sql212.infinityfree.com";
		$usuario="if0_37500115";
		$contrase�a="uy7vCEzQmbsEx ";
		$bd="if0_37500115_dbase";

		$conexion = mysqli_connect($server, $usuario, $contrase�a, $bd)
			or die ("Error en la conexion....");

		$clave = $_POST['txtClave'];
		$nombre = $_POST['txtNombre'];
		$sexo = $_POST['cmbSexo'];

		mysqli_query($conexion, "UPDATE datoss set nombre='$nombre', sexo= '$sexo' where clave='$clave'")
			or die ("Error al actualizar datos...");

		mysqli_close($conexion);
		echo "Datos actualizados correctamente...";
	?>
</body>
</html>
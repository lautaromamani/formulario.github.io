<html>
<head>
	<title>Registrar</title>
</head>
<body>
	<?php 
		$server="sql212.infinityfree.com";
		$usuario="if0_37500115";
		$contrase�a="uy7vCEzQmbsEx ";
		$bd="if0_37500115_dbase";

		$conexion= mysqli_connect($server, $usuario, $contrase�a, $bd)
			or die ("Error en la conexi�n....");

		//$orden = $_POST['txtOrden'];//
		$clave = $_POST['txtClave'];
		$nombre = $_POST['txtNombre'];
		$sexo = $_POST['cmbSexo'];

		$insertar = "INSERT into datoss values (NULL, '$clave', '$nombre', '$sexo')";

		$resultado = mysqli_query($conexion, $insertar)
			or die ("Error al insertar los registros...");

		mysqli_close($conexion);
		echo "Datos insertados correctamente...";
	?>

</body>
</html>
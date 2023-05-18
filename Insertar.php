<html>
	<head>
		<title>Mostrar datos de tabla con MySQL</title>
		<link rel="stylesheet" href="plugins\sweetalert\dist/sweetalert2.min.css"
	</head>
	<body >
		<h1>Insertando registros en la Base de Datos</h1>
		<?php

			include('include/config.inc');
			$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
			mysqli_set_charset($conexion,"utf8");
	
			$id	 = $_POST["txtid"];
	$nombre = $_POST["txtNombre"];
    	$apellido = $_POST["txtapellido"];
	$sexo = $_POST["cmbsexo"];
	$edad = $_POST["txtedad"];
	$direccion = $_POST["txtdireccion"];
	$monto = $_POST["txtmonto"];
	$ayuda = $_POST["cmbAyuda"];
	$cuarentena = $_POST["cmbCuarentena"];
	$sale = $_POST["cmbSale"];
	
			//creando la consulta para insertar el registro
			$consulta = "call InsertDatos('$id','$nombre','$apellido', '$sexo', '$edad','$direccion',
			'$monto','$ayuda','$cuarentena', '$sale');";
			echo ($consulta);
			$resultado=mysqli_query( $conexion, $consulta ) or die ( "No se pudo insertar el registro");		

			if ($resultado)
			{
				echo ("El registro fue insertado de forma satisfactoria");
				header("Location:mostrar.php");
			}
			else
			{
				echo ("Surgio problema para insertar el registro.<br>");
				echo ("El problema es: .<br>");
				echo ("Codigo de error: .<b>".mysql_errno ()."</b><br>");
				echo ("Descripcion de error: <b>".mysql_error ()."</b><br>");
			}			

			//liberando recursos y cerrando la BD;
			mysqli_close($conexion);
		?>
		
		<br><br>
		<a href="Mostrar.php">Mostrar Registros</a>

	</body>
</html>|


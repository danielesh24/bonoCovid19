<html>
  <head>
     <title>Mostrar datos de la tabla de datos con MySQL</title>
<link rel="stylesheet" href="plugins\sweetalert\dist/sweetalert2.min.css"
  </head>
 <body bgcolor="#FF9933">
<link rel="stylesheet" type="text/css" href= "examen.css" />	
	<h1>Datos registrados en la pagina</h1>
<?php
	include('include/config.inc');
	$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	mysqli_set_charset($conexion,"utf8");		

	$IdPersona=$_REQUEST['IdPersona'];
		
	$consulta="call DeletePersona ('$IdPersona');";
	echo($consulta);
	
	$resultado=mysqli_query( $conexion, $consulta ) or die ( "No se puede eliminar el registro");
	if($resultado)
	{
	  echo ("El registo fue eliminado de forma satisfactoria.<br>");
	  header("Location:mostrar.php");
	}
	else
	{
	  echo ("Surgio un problema al momento de eliminar el registro.<br>");
	  echo ("El problema es:.<br>");
	  echo ("Codigo del error.<br>".mysql_errno()."</br><br>");
	  echo ("Descripcion del error.<br>".mysql_error()."</br><br>");	
	}
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
	
?>
<script src="plugins\sweetalert\dist/sweetalert2.min.js"></script>
	
</body>
</html>

<html>
<head>
	
	<link rel="stylesheet" href="plugins\sweetalert\sweetalert2.min.css"
</head>
<body bgcolor="#444" align="center">
<h1>DPWEB </H1>
<h1>LISTA DESPLEGABLE DE CAMBO NOMBRE DE LA BASE DE DATOS</H1>

	<select name = "cmbnom" height="20%">
			<?php
			include('include/config.inc');
			$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
			mysqli_set_charset($conexion,"utf8");
			
			$query="select * from tblDatos;";
			$resultado=mysqli_query( $conexion, $query ) or die ( "No se pueden mostrar los registros");
			?>
			<?php foreach ($resultado as $opciones):?>
					 
			 <option value="<?php echo $opciones['nombre']?>"><?php echo $opciones['nombre']?></option>
			 
			<?php endforeach?>
			
				</select>
				
		<p style="color:white;">#QuedaTeEnCasa</p>
	<p style="color:white;">INTEGRANTES EQUIPO 8</p>
	<p style="color:white;">Jaime Enrique Amaya Garcia 17-48-24-2014</p>
	<p style="color:white;">Daniel Ulices Flores Escobar 25-2534-2016</p>
			
	<script src="plugins\sweetalert\sweetalert2.all.min.js"></script>
	<script src="prueba.js"></script>

</body>
</html>
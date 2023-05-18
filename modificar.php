<html>
  <head>
     <title>Mostrar datos de la tabla de datos con MySQL</title>
  </head>
 <body  bgcolor="#444" align="center" >
	<h1>Datos registrados en la pagina</h1>
<?php
	//capturar el codigo a modificar
	$IdPersona = $_REQUEST['IdPersona'];

//cargar la conexion y octener la conexion activa $misql
	include('include/config.inc');
	$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	mysqli_set_charset($conexion,"utf8");
	
	$query="call SelectPersonaID('$IdPersona');";
	$consulta=$conexion->query($query);
	$row=$consulta->fetch_assoc(); 
	
	mysqli_close($conexion);	
?>
	
	<h2>Informacion del registro seleccionada</h2>
	<form method = "post" name="frmvalor" action="almacenarModificar.php">
		dui: <br> <select name = "cmbdui">
			<?php
			include('include/config.inc');
			$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
			mysqli_set_charset($conexion,"utf8");
			
			$query="select * from tblDatos;";
			$resultado=mysqli_query( $conexion, $query ) or die ( "No se pueden mostrar los registros");
			?>
			<?php foreach ($resultado as $opciones):?>
					 
			 <option value="<?php echo $opciones['IdPersona']?>"><?php echo $opciones['IdPersona']?></option>
			 
			<?php endforeach?>
			
				</select>
         Nombre:<br> <input type="text" name="txtnombre" size="30"><br>
     Apellido:<br><input type="text" name="txtapellido" size="30"><br>
         Sexo:<br> <select name = "cmbsexo">
				<option value = "Masculino"> Masculino
				<option value = "Femenino"> Femenino<br><br>
				</select><br><br>
		 Edad:<br><input type="text" name="txtedad" size="10"><br><br>
		  Direccion:<br> <input type="text" name="txtdireccion" size="50"><br><br>
		   Monto de ayuda recibida por el gobierno:<Br>	 <input type="text" name="txtmonto" size="10"><br><br>
		  Recibio Ayuda de canasta básica:<Br>
		  <select name = "cmbAyuda">
				<option value = "si"> Si
				<option value = "no"> No<br><br>
				</select><br><br>
		 Esta de acuerdo con la cuarentena:<Br>	
		 <select name = "cmbCuarentena">
				<option value = "si"> Si
				<option value = "no"> No<br><br>
				</select><br><br>
		  Sale a la calle por necesidad (SI/NO):<Br>	 
		  			<select name = "cmbSale">
				<option value = "si"> Si
				<option value = "no"> No
				
			</select><br><br>
			<br>
<input type="submit" name="btnModificar" value="Modificar">
<br>
<hr>
	<p style="color:white;">#QuedaTeEnCasa</p>
	<p style="color:white;">INTEGRANTES EQUIPO 8</p>
	<p style="color:white;">Jaime Enrique Amaya Garcia 17-48-24-2014</p>
	<p style="color:white;">Daniel Ulices Flores Escobar 25-2534-2016</p>
	
</body>

</head>
</html>
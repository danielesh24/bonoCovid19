<html>
<head>
 <title>Insertar registro</title>
 <link rel="stylesheet" href="plugins\sweetalert\dist/sweetalert2.min.css"
</head>
<body bgcolor="#444" align="center">
	<h1><p style="color:white;">Emergencia Covid 19</p></h1>
	<hr>
	<h2><p style="color:white;">Ingresar Datos</p><H2>
     <form name="FrmInsertar" action="Insertar.php" method="post">
		dui: <br> <input type="text" name="txtid" size="30"><br>
	 Nombre:<br> <input type="text" name="txtNombre" size="30"> <br>
				Apellido:<br><input type="text" name="txtapellido" size="30"><br>
         Sexo:<br> <select name = "cmbsexo">
				<option value = "Masculino"> Masculino
				<option value = "Femenino"> Femenino<br><br>
				</select><br><br>
		 Edad:<br><input type="text" name="txtedad" size="10"><br><br>
		  Direccion:<br> <input type="text" name="txtdireccion" size="50"><br><br>
		   Monto de ayuda recibida por el gobierno:<Br>	 <input type="text" name="txtmonto" size="10"><br><br>
		  Recibio Ayuda de canasta basica:<Br>
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
          <input type = "submit" value= "Insertar">
     </form>
     <br><br><br>
	  <hr>
     <a href="Mostrar.php"><p style="color:white;">Mostrar Registros</p></a>
	 <hr>
	<p style="color:white;">#QuedaTeEnCasa</p>
	<p style="color:white;">INTEGRANTES EQUIPO 8</p>
	<p style="color:white;">Jaime Enrique Amaya Garcia 17-48-24-2014</p>
	<p style="color:white;">Daniel Ulices Flores Escobar 25-2534-2016</p>
	
	
	
</body>

</html>
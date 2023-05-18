<html>
<head>
	<title>Datos de personas</title>
	<link rel="stylesheet" href="plugins\sweetalert\sweetalert2.min.css"
	</head>	
		<body bgcolor="#444" align="center" font color="white" >
		<h1>
		Datos de personas
		</h1>
		<?php
			include('include/config.inc');
			$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
			mysqli_set_charset($conexion,"utf8");
			

			$query="call SelectPersona();";

			$resultado=mysqli_query( $conexion, $query ) or die ( "No se pueden mostrar los registros");
					
			echo"<table width='100%' border='1' align='center'>";
			echo "<tr>";
			echo "<th>IdPersona</th> <th>nombre</th> <th>Apellido</th> <th>sexo</th><th>edad</th><th>direccion</th><th>monto</th><th>ayuda</th><th>De Acuerdo</th><th>sale por emergencia</th> <th></th><th></th>";
			echo "</tr>";

			while ($row=mysqli_fetch_array($resultado))
				{
				echo "<tr>";				
				echo "<td>",$row['IdPersona'],"</td>";
				echo "<td>",$row['nombre'],"</td>";
				echo "<td>",$row['Apellido'],"</td>";
				echo "<td>",$row['sexo'],"</td>";
				echo "<td>",$row['edad'],"</td>";
				echo "<td>",$row['direccion'],"</td>";
				echo "<td>",$row['monto'],"</td>";
				echo "<td>",$row['ayuda'],"</td>";
				echo "<td>",$row['cuarentena'],"</td>";
				echo "<td>",$row['sale'],"</td>";		
				
				echo "<td>"."<input type='submit' value='modificar' onclick='modi()'>"."</td>";				
				echo "<td>"."<a href='eliminar.php?IdPersona=".$row['IdPersona']."'><input type='submit' value='eliminar' onclick='elimi()'></a>"."</td>";
				echo "</tr>";
				}
				 
				
				
			echo "</table>";
			
			// cerrar conexión de base de datos
			mysqli_close( $conexion );
			
			?>
		<br><br><br>
		<a href="Index.html"><p style="color:white;">Retornar al Menu pricipal</p></a>
		<hr>
	<p style="color:white;">#QuedaTeEnCasa</p>
	<p style="color:white;">INTEGRANTES EQUIPO 8</p>
	<p style="color:white;">Jaime Enrique Amaya Garcia 17-48-24-2014</p>
	<p style="color:white;">Daniel Ulices Flores Escobar 25-2534-2016</p>
	
	
	<script src="plugins\sweetalert\sweetalert2.all.min.js"></script>
	<script src="prueba.js"></script>
	<script>
function elimi(){
	Swal.fire({
  title: 'ELIMINACION',
  text: "ESTA APUNTO DE ELIMINAR ESTA PERSONA",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'ELIMINAR'
}).then((result) => {
  if (result.value) {
    eliminar()
  }
})
}

function eliminar(){
	Swal.fire(
      'ELIMINADO',
      '',
      'success'
	
    )
	near(); 
}
	</script>
		</body>
</html>
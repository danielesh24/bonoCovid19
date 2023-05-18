<?php
	include('include/config.inc');
	
	$misql = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	mysqli_set_charset($misql,"utf8");
	
	$id	 = $_POST["cmbdui"];
	$nombre = $_POST["txtnombre"];
    	$apellido = $_POST["txtapellido"];
	$sexo = $_POST["cmbsexo"];
	$edad = $_POST["txtedad"];
	$direccion = $_POST["txtdireccion"];
	$monto = $_POST["txtmonto"];
	$ayuda = $_POST["cmbAyuda"];
	$cuarentena = $_POST["cmbCuarentena"];
	$sale = $_POST["cmbSale"];
	
	$query = "call UdatePersona ('$id','$nombre','$apellido', '$sexo', '$edad','$direccion',
			'$monto','$ayuda','$cuarentena', '$sale');";

	echo $query;
	$consulta=$misql->query($query);

	if($consulta){
		echo "registro actualizado";
		header("Location:mostrar.php");
	}
	else{
		echo "ERROR: nose puede editar por alguna razon.";
	}
  ?>
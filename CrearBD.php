<html>
  <head>
    <title>Crear BD</title>
  </head>
  <body bgcolor="#444" align="center">
    <h2>Formulario para la Creacion de la Base de Datos</h2><br>
<?php
    // Ejemplo de conexión a base de datos MySQL con PHP.
    // Datos de la base de datos
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "test";
   
    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, $password) or die ("No se ha podido conectar al servidor de Base de datos");
   
   //Realizando la consulta para crear una BD si es que no existe
	$consulta="CREATE DATABASE  bd_Parcial;";
	$EjecutarConsulta = mysqli_query( $conexion, $consulta ) or die ( "No se pudo crear la base de datos o Ya existe"); 
	
	

    // Selección de la base de datos a utilizar
	$basededatos = "bd_Parcial";
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	
 //Realizando la consulta para crear la Tabla Alumno si es que no existe
	$consulta="CREATE TABLE tblDatos(
	IdPersona INT PRIMARY KEY,
	nombre varchar(20),
	Apellido varchar(20),
	sexo varchar(20), 
	edad int,
	direccion varchar(50),
	monto INT,
	ayuda varchar(20),
	cuarentena varchar(20),
	sale  varchar(20))";
	$EjecutarConsulta = mysqli_query( $conexion, $consulta ) or die ( "No se pudo crear la tabla tblDatos"); 

  //Verificando si la Tabla Alumno se creo.
  if ($EjecutarConsulta)
    echo ("La tabla tblDatos fue creada de Forma satisfactoria.<br>");
  else
  {
    echo ("Surgio problema para crear la tabla tblDatos.<br>");
    echo ("El problema es: <br>");
    echo ("Codigo de error: <b>". mysql_errno ()."</b><br>");
    echo ("Descripcion de error: <b>". mysql_error ()."</b><br>");
  }
 
 
 //////////////////////////////////////  
   ///Procedimientos Almacenados
  $consulta="CREATE PROCEDURE IF NOT EXISTS UdatePersona
( 
    IN `par_IdPersona` INT,
	IN `par_nombre` varchar(20),
	IN `par_Apellido` varchar(20),
	IN `par_sexo` varchar(20), 
	IN `par_edad` int,
	IN `par_direccion` varchar(50),
	IN `par_monto` INT,
	IN `par_ayuda` varchar(20),
	IN `par_cuarentena` varchar(20),
	IN `par_sale` varchar(20)
)

 
update tblDatos set nombre= par_nombre, apellido= par_apellido, sexo= par_sexo, edad=par_edad,
direccion=par_direccion, monto=par_monto, ayuda=par_ayuda, cuarentena=par_cuarentena, sale=par_sale  where idpersona = par_idpersona;
";

  $EjecutarConsulta = mysqli_query( $conexion, $consulta ) or die ( "No se pudo crear el procedimiento almacenado UdatePersona");

  //Verificando si El procedimiento se creo.
  if ($EjecutarConsulta)
    echo ("El SP UdatePersona fue creado de Forma satisfactoria.<br>");
  else
  {
    echo ("Surgio problema para crear el SP UdatePersona.<br>");
    echo ("El problema es: <br>");
    echo ("Codigo de error: <b>". mysql_errno ()."</b><br>");
    echo ("Descripcion de error: <b>". mysql_error ()."</b><br>");
  }
  
  
  
  
    ///Procedimientos Almacenados
  $consulta="CREATE PROCEDURE IF NOT EXISTS InsertDatos
( 
    IN `par_IdPersona` INT,
	IN `par_nombre` varchar(20),
	IN `par_Apellido` varchar(20),
	IN `par_sexo` varchar(20), 
	IN `par_edad` int,
	IN `par_direccion` varchar(50),
	IN `par_monto` INT,
	IN `par_ayuda` varchar(20),
	IN `par_cuarentena` varchar(20),
	IN `par_sale` varchar(20)
)
 
insert into tblDatos (Idpersona, nombre, Apellido,
	sexo, edad, direccion, monto, ayuda, cuarentena, sale)	
values (par_idPersona, par_nombre, par_Apellido, par_sexo, par_edad, par_direccion, par_monto, par_ayuda, par_cuarentena,
par_sale);";

  $EjecutarConsulta = mysqli_query( $conexion, $consulta ) or die ( "No se pudo crear el procedimiento almacenado InsertDatos");

  //Verificando si El procedimiento se creo.
  if ($EjecutarConsulta)
    echo ("El SP InsertDatos fue creado de Forma satisfactoria.<br>");
  else
  {
    echo ("Surgio problema para crear el SP InsertDatos.<br>");
    echo ("El problema es:". mysql_error (). "<br>");
    echo ("Codigo de error: <b>". mysql_error ()."</b><br>");
    echo ("Descripcion de error: <b>". mysql_error ()."</b><br>");
  }
  
  ////////////////
   ///Procedimientos Almacenados
  $consulta="CREATE PROCEDURE IF NOT EXISTS DeletePersona
( 
   IN `par_IdPersona` INT
)
 
delete from  tblDatos where Idpersona  = par_Idpersona;
";

  $EjecutarConsulta = mysqli_query( $conexion, $consulta ) or die ( "No se pudo crear el procedimiento almacenado DeletePersona");

  //Verificando si El procedimiento se creo.
  if ($EjecutarConsulta)
    echo ("El SP DeletePersona fue creado de Forma satisfactoria.<br>");
  else
  {
    echo ("Surgio problema para crear el SP DeletePersona.<br>");
    echo ("El problema es: <br>");
    echo ("Codigo de error: <b>". mysql_errno ()."</b><br>");
    echo ("Descripcion de error: <b>". mysql_error ()."</b><br>");
  }  
 
   ////////////////
   ///Procedimientos Almacenados
  $consulta="CREATE PROCEDURE IF NOT EXISTS SelectPersona
( 
   
)
 
SELECT * FROM tblDatos;
";

  $EjecutarConsulta = mysqli_query( $conexion, $consulta ) or die ( "No se pudo crear el procedimiento almacenado SelectPersona");

  //Verificando si El procedimiento se creo.
  if ($EjecutarConsulta)
    echo ("El SP SelectPersona fue creado de Forma satisfactoria.<br>");
  else
  {
    echo ("Surgio problema para crear el SP SelectPersona.<br>");
    echo ("El problema es: <br>");
    echo ("Codigo de error: <b>". mysql_errno ()."</b><br>");
    echo ("Descripcion de error: <b>". mysql_error ()."</b><br>");
  }  
  ////////////////
   ///Procedimientos Almacenados
  $consulta="CREATE PROCEDURE IF NOT EXISTS SelectPersonaID
( 
  IN par_idPersona INT
  )
  SELECT * FROM tblDatos
  where Idpersona = par_IdPersona;
";

  $EjecutarConsulta = mysqli_query( $conexion, $consulta ) or die ( "No se pudo crear el procedimiento almacenado SelectPersonaID");

  //Verificando si El procedimiento se creo.
  if ($EjecutarConsulta)
    echo ("El SP SelectPersonaID fue creado de Forma satisfactoria.<br>");
  else
  {
    echo ("Surgio problema para crear el SP SelectPersonaID.<br>");
    echo ("El problema es: <br>");
    echo ("Codigo de error: <b>". mysql_errno ()."</b><br>");
    echo ("Descripcion de error: <b>". mysql_error ()."</b><br>");
  } 

  ?>
  <a href="Index.html"><p style="color:white;">Retornar al Menu pricipal</p></a>
  </body>
  </html>
  
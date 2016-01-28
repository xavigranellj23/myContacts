<?php
	//iniciamos sesion - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();

	//incluimos el fichero conexion.proc.php que realiza la conexión a MySQL
	include("conexion.proc.php");


	//sentencia sql para insertar diferentes campos
			
	$sql = "INSERT INTO `tbl_usuario`(`nombre_usu`, `apellido_usu`, `email_usu`, `passwd_usu`, `id_tipo_usuario`) VALUES ('$_REQUEST[nombre]', '$_REQUEST[ape]', '$_REQUEST[mail]', md5($_REQUEST[pass], $_REQUEST[tip] = 2)";


	//lanzamos la sentencia sql
	$datos = mysqli_query($con, $sql);

	header("location: principal.php")

?>
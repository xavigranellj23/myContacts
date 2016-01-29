<?php
			//realizamos la conexión con mysql
			  session_start();

  			include("conexion.proc.php");

			//sentencia sql para insertar diferentes campos
			
			$sql = "INSERT INTO `tbl_contactos`(`nombre_cont`, `apellido_cont`, `mail_cont`, `tel_cont`, `mobil_cont`, `dir_cont`, `latitud`, `longitud` , `id_usuario`) VALUES ('$_REQUEST[nomCont]', '$_REQUEST[apeCont]', '$_REQUEST[emailCont]', '$_REQUEST[telCon]', '$_REQUEST[movCon]', '$_REQUEST[direccion]', '$_REQUEST[lat]', '$_REQUEST[lng]', '$_SESSION[id]')";


			//lanzamos la sentencia sql
			$datos = mysqli_query($con, $sql);

			header("location: principal.php")
		?>
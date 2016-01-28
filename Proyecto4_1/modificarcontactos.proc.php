<?php

    include("conexion.proc.php");

      //sentencia de actualizacion de los campos de la tabla tbl_usuarios

      $sql = "UPDATE tbl_contactos SET nombre_cont='$_REQUEST[nom]', apellido_cont='$_REQUEST[ape]', mail_cont='$_REQUEST[mail]', tel_cont='$_REQUEST[tel]', mobil_cont='$_REQUEST[movil]', id_tipo_usuario=$_REQUEST[tip]";

      //lanzamos la sentencia sql
      $datos = mysqli_query($con, $sql);

    header("location: usuarios.php")

    ?>
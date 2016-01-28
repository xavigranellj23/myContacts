<?php

    include("conexion.proc.php");

      //sentencia de actualizacion de los campos de la tabla tbl_usuarios

      $sql = "UPDATE tbl_usuario SET nombre_usu='$_REQUEST[nom]', apellido_usu='$_REQUEST[ape]', email_usu='$_REQUEST[mail]', passwd_usu='$_REQUEST[pass]' WHERE id_usuario=$_REQUEST[id]";

      //lanzamos la sentencia sql
      $datos = mysqli_query($con, $sql);

    header("location: principal.php")

    ?>
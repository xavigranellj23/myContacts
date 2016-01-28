<?php
  //iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
  session_start();

  include("conexion.proc.php");

//sentencia SQL que devuelve, todo junto, las actividades ordenadas por fecha, con el tipo de actividad y el número de reservas
$sql_perfil = "SELECT * FROM tbl_contactos WHERE $_SESSION[id] = id_contacto";


?>
<!--INICIO WEB -->
<!DOCTYPE html>
<html>
  <head>
      <title>Oxford Intranet</title>
      <meta lang="es">
      <meta charset="utf-8">
      <meta name="author">
      <link rel="icon" type="image/png" href="img/icon.png">
      <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <script type="text/javascript" src="js/funcion.js"></script>
  </head>
    <body>

<a name="top">
        <!--BARRA NEGRA SUPERIOR -->
      <div id="barraNegra">
        <div id="barraLogin">
          <ul id="listaLogin">
            <li id="identificate">Hola <?php echo $_SESSION['nombre']?> </li>
            <li><a href="salir.php"><img src="img/exit.png" alt="Salir" title="Salir" /></a></li>
          </ul>
        </div>
      </div>

        <!--BARRA DE MENÚ -->
      <header>
        <section id="cabecera">
          <figure>
            <a href="principal.php"><img src="img/logoMyContacts.png"/></a>
          </figure>

          <nav>
            <ul>

              <a href='principal.php'><li>Volver sin Guardar</li></a>
 
            </ul>
          </nav>
        </section>
      </header>

      

      <main><br/>
<?php
//sentencia SQL que devuelve, todo junto, las actividades ordenadas por fecha, con el tipo de actividad y el número de reservas


       //consulta de datos según el filtrado
              $datos = mysqli_query($con,$sql_perfil);
              //si se devuelve un valor diferente a 0 (hay datos)
              if(mysqli_num_rows($datos)!=0){
                while ($mostrar = mysqli_fetch_array($datos)) {
            ?>

<section id="centro">
            <div id="divMaterialReserva">
            <table>
                  <tr>
                    <td><b>Nombre:</b></td>
                    <td><b>Apellido:</b></td>
                    <td><b>Mail:</b></td>
                    <td><b>Teléfono:</b></td>
                    <td><b>Móbil:</b></td>
                    <td></td>

                  </tr>
                  <tr>
                    <td style="width:300px"> <br/><?php echo $mostrar['nombre_cont']; ?><br/></td>
                    <td style="width:300px"><br/><?php echo $mostrar['apellido_cont']; ?><br/></td>
                    <td style="width:300px"><br/><?php echo $mostrar['mail_cont']; ?><br/></td>
                    <td style="width:300px"><br/><?php echo $mostrar['tel_cont']; ?><br/></td>
                    <td style="width:300px"><br/><?php echo $mostrar['mobil_cont']; ?><br/></td>
                    <td style="width:300px"><br/><?php echo "<a href='modificarperfil.proc.php?id=$mostrar[id_usuario]'><i class='fa fa-pencil fa-2x fa-pull-left fa-border' title='Modificar'></i></a>"; ?></td>
                  </tr>

                </table>
                </div>
                
                <?php
                }
              }else{
                echo "No hay datos";
              }
            ?>
          </section>
        </main>
    </body>
</html>
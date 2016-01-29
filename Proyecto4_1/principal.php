<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();

  include("conexion.proc.php");

//sentencia SQL que devuelve, todo junto, las actividades ordenadas por fecha, con el tipo de actividad y el número de reservas
$sql_contactos = "SELECT * FROM tbl_contactos WHERE $_SESSION[id] = id_usuario";

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

              <a href='crearcontacto.php'><li>Crear Contacto</li></a>
              <a href='modificarperfil.php'><li>Editar Perfil</li></a>
 
            </ul>
          </nav>
        </section>
      </header>

      <main>
          <section id="centro">
            <?php
       //consulta de datos según el filtrado
              $datos = mysqli_query($con,$sql_contactos);
              //si se devuelve un valor diferente a 0 (hay datos)
              if(mysqli_num_rows($datos)!=0){
                while ($mostrar = mysqli_fetch_array($datos)) {
            ?>
             <div id="divMaterial"><br/>
                <form id="formMaterial" action="php/reservar.php" method="get">
                  <div id="formQuery">
                    <div id="formQueryFoto">
                      <p><img class ="fotoMini" src="img/contactos/avatar.png" alt="" title"" /></p>
                    </div>
                    <div id="formQueryTexto">
                      <p id="formTituloMaterial"><?php echo utf8_encode($mostrar['nombre_cont']);?> <?php echo utf8_encode($mostrar['apellido_cont']); ?><p>
                      <p><?php echo utf8_encode($mostrar['mail_cont']); ?><p>
                      <p><?php echo utf8_encode($mostrar['mobil_cont']); ?><p>
                      <p><a href='contacto.php' <?php $_SESSION['id_contacto']='id_contacto'?>>Ver Contacto</a><p>
                    </div>
                  </div><br/>
                </form>
              </div><br/>
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
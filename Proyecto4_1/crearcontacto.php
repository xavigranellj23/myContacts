<?php
  //iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
  session_start();

  include("conexion.proc.php");

?>

<!DOCTYPE html>
<html>
    <head>
      
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/google-map.js"></script>
<script type="text/javascript">
	add_action('template_redirect','carga_archivos');
 
function carga_archivos(){
     
    if( is_single(9999)) // tu número de post o slug
    {
        wp_enqueue_script( 'google-api','http://maps.googleapis.com/maps/api/js?key=TU CLAVEAPI&sensor=true', array( 'jquery' ) );
        wp_enqueue_script( 'google-maps',get_bloginfo('stylesheet_directory') . '/js/google-map.js', array( 'google-api' ) );
    }
}
</script>

    <title>Registro</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
    
<div class="container" style="margin-top:150px;">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Añadir Contacto</h3>
        </div>
          <div class="panel-body">
            <form accept-charset="UTF-8" role="form" method="POST" action="crearcontacto.proc.php">
                    <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="Nombre" name="nomCont" type="text" required>
              </div> 
              <div class="form-group">
                  <input class="form-control" placeholder="Apellido" name="apeCont" type="text" required>
              </div>    

                <div class="form-group">
                  <input class="form-control" placeholder="email@email.com" name="emailCont" type="text" required>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Telefono" name="telCon" type="text" >
              </div>

              <div class="form-group">
                <input class="form-control" placeholder="Movil" name="movCon" type="text" >
              </div>

              
              	<div class="right">
               <form id="google" name="google" action="#">
 
				<input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion"/> <br>
				<button class="btn btn-lg btn-success btn-block" id="pasar">Buscar</button>
				 
				<!-- div donde se dibuja el mapa-->
				<br><br>
				<div id="map_canvas" style="width:320px;height:250px;"></div><br><br>

				 
				<!--campos ocultos donde guardamos los datos-->
				 <input type="hidden" name="lat" id="lat"/><br><br>
				<input type="hidden" name="lng" id="long"/>
        </div>
				


              <input class="btn btn-lg btn-success btn-block" type="submit" value="Añadir Contacto">
            </fieldset>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </table>

    </body>
</html>
<!DOCTYPE html>
<html>
<head>
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


</head>
    
<body>
<form id="google" name="google" action="#">
 
<label>Direcci&oacute;n</label>
<input type="text" id="direccion" name="direccion" placeholder="Calle,Ciudad,Pais"/> 
<button id="pasar">Buscar</button>
 
<!-- div donde se dibuja el mapa-->
<div id="map_canvas" style="width:450px;height:300px;"></div>
 
<!--campos ocultos donde guardamos los datos-->
latitud: <input type="text" name="lat" id="lat"/>
longitud: <input type="text" name="lng" id="long"/>
</form>
</body>
</html>
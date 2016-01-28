<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();
	//si existe la variable de sesión error, la guardamos en la variable error ya que al destruir la sesión, esta desaparecería
	if(isset($_SESSION ['error'])){
		$error=$_SESSION['error'];
	}
	//destruimos la sesión para no poder llegar de manera indirecta a ninguna página posterior a la de login
	session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>MyContact</title>
		<link rel="stylesheet" href="css/full_estils_principal.css">
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acceso</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
    </style>

	</head>
	<body>
	<div class="container" style="margin-top:150px;">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Acceso</h3>
        </div>
          <div class="panel-body">
          <?php
if (isset($_GET['error'])) {
    echo '
              <div class="alert alert-danger-alt alert-dismissable">
                <span class="glyphicon glyphicon-certificate"></span>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button><strong>Acceso Denegado</strong> Revise que sus datos de acceso al sistema sean correctos y vuelva a intentarlo.</div>   

    ';
} else {
    echo '';
}
?>
            <form accept-charset="UTF-8" role="form" method="POST" action="login.proc.php">
                    <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="tuemail@email.com" name="mail" id="mail" type="text" required>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Contraseña" name="pass" id="pass" type="password" value="" required>
              </div>
              <input class="btn btn-lg btn-success btn-block"  type="submit" name="acce" value="Iniciar sesión">
            </fieldset>
              </form>
              <p></p>
               <a class="btn btn-lg btn-info btn-block" href="registro.php">Registrarme</a>
          </div>
      </div>
    </div>
  </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
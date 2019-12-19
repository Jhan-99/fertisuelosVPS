   
<?php  
 include("../../db/dbconnect.php");
 
    $mensaje = '';

 if(isset($_POST["reset-password"]))  
 {  
     $longitud_pass = strlen($_POST["password_reset"]);
      if(empty($_POST["password_reset"]) || empty ($_POST["password_reset_confirm"]) )  
      {  
           $mensaje = '<p style="font-size:12px;" class="center red-text">Debes introducir una contraseña.</p>';  
      }
     elseif($_POST["password_reset"] !== $_POST["password_reset_confirm"])
      {
        $mensaje = '<p style="font-size:12px;" class="center red-text">Las contraseñas no coinciden</p>';  
      }elseif($longitud_pass < 6){
      $mensaje = '<p style="font-size:12px;" class="center red-text">La contraseña es muy corta. Debe tener mínimo 6 caracteres de longitud.</p>';  
     } 
      else  
      {
        $user_id = mysqli_real_escape_string($conexion, $_GET["request"]);  
        $user_password = mysqli_real_escape_string($conexion, $_POST["password_reset"]);  
        $user_password = password_hash($user_password, PASSWORD_DEFAULT);  
        
    $sql = "UPDATE user_details SET user_password ='".$user_password."' WHERE CustomerID='".$user_id."'";  
	if(mysqli_query($conexion, $sql))  
	{  
		$mensaje = '<p style="font-size:12px;" class="center blue-text">Tu contraseña se ha cambiado correctamente.</p>';  
	} else{
        $mensaje = '<p style="font-size:12px;" class="center red-text">No se ha podido cambiar tu contraseña, intenta más tarde.</p>';  
    }
          
          
      }  
 }  
 ?>  
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Bienvenid@s !... Fertisuelos">
    <meta name="keywords" content="Recuperar contraseña">
    <title>Restablecer contraseña | Fertisuelos</title>
    <!-- Favicons-->
    <link rel="icon" href="../../images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="../../images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.html">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="../../css/themes/fixed-menu/materialize.css" type="text/css" rel="stylesheet">
    <link href="../../css/themes/fixed-menu/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="../../css/custom/custom.css" type="text/css" rel="stylesheet">
    <link href="../../css/layouts/page-center.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../../vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
  </head>
  <body class="Z">
    <!-- Start Page Loading -->
      <div id="loader"></div>
      <div class="main animate-bottom" style="display:none;">
    <!-- End Page Loading -->
    <div id="login-page" class="row">
      <div class="col s12 z-depth-4 card-panel">
        <form class="login-form" method="post">
          <div class="row">
            <div class="input-field col s12 center">
              <img src="../../images/logo/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
              <p class="center login-form-text green-text darken-4">Fertisuelos</p>
                <p class="center login-form-text">Restablecer contraseña</p>
                <?php echo $mensaje; ?>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">lock_outline</i>
              <input id="password_reset" name="password_reset" type="password" class="">
              <label for="password_reset" class="center-align">Nueva contraseña</label>
            </div>
          </div>     
        <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">lock_outline</i>
              <input id="password_reset_confirm" name="password_reset_confirm" type="password" class="">
              <label for="password_reset_confirm" class="center-align">Confirmar contraseña</label>
            </div>
          </div>
 
          <div class="row">
            <div class="input-field col s12" align="center">
                <input type="submit" name="reset-password" value="Enviar" class="btn green darken-4 waves-effect waves-light" />  
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <p class="margin medium-small"><a href="login.php">Registrarme ya!</a></p>
            </div>
            <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="login?action=login">Iniciar sesión</a></p>
            </div>
          </div>
        </form>
 
          
      </div>
    </div>
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="../../vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../../vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../js/plugins.js"></script>
          <!-- FORMCACHE-->
    <script type="text/javascript" src="../../js/formcache.js"></script>     
                    <script type="text/javascript">
        $(document).ready(function(){
            $('#register_form').formcache(); 
        });
            </script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../js/custom-script.js"></script>
    </div>
  </body>

</html>
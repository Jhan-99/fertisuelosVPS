<?php  
//Permite realizar el inicio de sesión a la plataforma
 include("../../db/dbconnect.php"); //->inlcuir la conexión a la base de datos
 session_start();  //-> iniciar la sesión
//:inicio: esta parte indica que si la sesión se inicia pero la sesión no es invitado entonces redireccionar al index
 if(isset($_SESSION["user_name"])) 
 {
     if($_SESSION["user_name"] != 'Invitado'){
      header("location:../../");     
     }
      
 }
//:fin:

   //:inicio: este segmento de código permite registrar el usuario en la base de datos, con las validaciones desde servidor
    $mensaje = '';
 if(isset($_POST["register"]))  
 {  
        $longitud_pass = strlen($_POST["user_password"]);
        $longitud_user = strlen($_POST["user_name"]);
        $longitud_user_fullname = strlen($_POST["full_name"]);
     
      if(empty($_POST["user_name"]) ||empty ($_POST["full_name"]) || empty($_POST["user_password"])
            || empty($_POST["user_password_confirm"]) || empty($_POST["user_email"]))  
      {  
           $mensaje = '<p style="font-size:12px;" class="center red-text">Todos los campos son obligatorios.</p>';
      }
     elseif($longitud_user_fullname < 8){
        $mensaje = '<p style="font-size:12px;" class="center red-text">Su nombre completo debe ser mínimo de 8 caracteres de longitud.</p>';  
     }
     elseif($longitud_user < 5){
               $mensaje = '<p style="font-size:12px;" class="center red-text">El nombre de usuario debe tener mínimo 5 caracteres de longitud.</p>';  
      }
       elseif($_POST["user_password"] !== $_POST["user_password_confirm"])
      {
               $mensaje = '<p style="font-size:12px;" class="center red-text">Las contraseñas no coinciden.</p>';  
      }
     elseif($longitud_pass < 6)
     {
        $mensaje = '<p style="font-size:12px;" class="center red-text">La contraseña es muy corta. Debe tener mínimo 6 caracteres de longitud. Debe incluir números y letras en mayuscúlas.</p>';  
     } 
      else  
        {   $correodb = "";
            $sql1 = "SELECT * FROM user_details  WHERE user_name = '".$_POST["user_name"]."' AND user_email = '".$_POST["user_email"]."'";
            $resultado= $conexion->query($sql1);
            $fila = mysqli_num_rows($resultado);
            if($fila>0){
                $mensaje = '<p style="font-size:12px;" class="center red-text">El nombre de usuario o correo introducido ya existen</p>'; 
                
            }else{
        
           $full_name = mysqli_real_escape_string($conexion, $_POST["full_name"]);  
           $user_name = mysqli_real_escape_string($conexion, $_POST["user_name"]);  
           $user_email = mysqli_real_escape_string($conexion, $_POST["user_email"]);  
           $user_password = mysqli_real_escape_string($conexion, $_POST["user_password"]);  
           $user_password = password_hash($user_password, PASSWORD_DEFAULT);  
           $query = "INSERT INTO user_details(user_email, user_name, user_password,CustomerName) VALUES('$user_email','$user_name', '$user_password','$full_name')";  
            $valor_registro = "";
           if(mysqli_query($conexion, $query))  
           {  
                echo '<script>alert("Se ha registrado en Magic Extensions")</script>';  
                    $valor_registro = 1;
                   header("location: login.php?action=login");
           } else{
               echo '<script>alert("No se ha podido completar el registro")</script>';  
               header("location: login");
           } 
      }  
      }
 } 
//:fin:

//:inicio: este segmento de código permite al usuario ya registrado iniciar sesión cuando intenta ingresar a través de :> app/login/login.php?action=login
 if(isset($_POST["login"]))  
 {  
     
      if(empty($_POST["user_name"]) || empty($_POST["user_password"]))  
      {  
           $mensaje = '<p style="font-size:12px;" class="center red-text">Ambos campos son obligatorios</p>';  
      }  
      else  
      {  
           $user_name = mysqli_real_escape_string($conexion, $_POST["user_name"]);  
           $user_password = mysqli_real_escape_string($conexion, $_POST["user_password"]);  

           $query = "SELECT * FROM user_details WHERE user_name = '$user_name'";  
           $result = mysqli_query($conexion, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($user_password, $row["user_password"]))  
                     {  
                          //return true;  
                          $_SESSION["user_name"] = $user_name;  
            
                
                            echo '<script>window.history.back();</script>';  
                     }  
                     else  
                     {  
                          //return false;  
                          $mensaje = '<p style="font-size:12px;" class="center red-text">Detalles de usuario incorrectos</p>';  
                     }  
                }  
           }  
           else  
           {  
            $mensaje = '<p style="font-size:12px;" class="center red-text">Detalles de usuario incorrectos</p>';  
           }  
      }  
 }  

//:fin:
 ?>  
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Bienvenid@s !... Fertisuelos es un software ">
    <meta name="keywords" content="fertisuelos, fertilizacion , sennnova, pf">
    <title>Iniciar | Inicio de sesión en Fertisuelos</title>
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
    	<style>
		body{
			background-image: url(../../images/gallary/wallbody3.jpg);
			  background-repeat:space;
		      background-position: center;

		}
	</style>
  <body class="Z">
    <!-- Start Page Loading -->
      <div id="loader"></div>
      <div class="main animate-bottom" style="display:none;">
    <!-- End Page Loading -->
    <div id="login-page" class="row">
      <div class="col s12 z-depth-4 card-panel">
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?> 
        <form class="login-form" method="post">
          <div class="row">
            <div class="input-field col s12 center">
              <img src="../../images/logo/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
              <p class="center login-form-text green-text darken-4">Fertisuelos</p>
                <p class="center login-form-text">Inicio de sesión</p>
                <?php  echo $mensaje;?>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">person_outline</i>
              <input id="user_name" name="user_name" type="text" class="" required>
              <label for="user_name" class="center-align">Nombre de usuario</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">lock_outline</i>
              <input id="user_password" name="user_password" type="password" required>
              <label for="user_password">Contraseña</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m12 l12 ml-2 mt-3">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Recuerdame</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12" align="center">
                <input type="submit" name="login" value="Login" class="btn green darken-4 waves-effect waves-light" />  
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <p class="margin medium-small"><a href="login.php">Registrarme ya!</a></p>
            </div>
            <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="forgot-password.php">Olvidé la clave?</a></p>
            </div>
          </div>
        </form>
            <?php       
                }  
                else  
                {  
                ?> 
          <input type="hidden" id="r_value" value="<?php echo $valor_registro; ?>">
        <form class="login-form" method="post" data-toggle="formcache" id="register_form">
          <div class="row">
            <div class="input-field col s12 center">
              <h4>Registro</h4>
              <p class="center">Unete a Fertisuelos!</p>
                <?php echo $mensaje; ?>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">person</i>
              <input id="full_name" name="full_name" type="text" value="" required>
              <label for="full_name" class="center-align">Nombre completo</label>
            </div>
          </div>        
        <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">person_outline</i>
              <input id="user_name" name="user_name" type="text" required>
              <label for="user_name" class="center-align">Nombre de usuario</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">email</i>
              <input id="user_email" name="user_email" type="email" required>
              <label for="user_email" class="center-align">Correo</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">lock_outline</i>
              <input id="user_password" name="user_password" type="password" required>
              <label for="user_password">Contraseña</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">lock_outline</i>
              <input id="user_password_confirm" name="user_password_confirm" type="password" required>
              <label for="user_password_confirm">Confirma contraseña</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12" align="center">
              <input type="submit" name="register" value="Registrarme ya!" class="btn green darken-4 waves-effect waves-light" />  

            </div>
            <div class="input-field col s12">
              <p class="margin center medium-small sign-up">Ya tienes una cuenta? <a href="login.php">¡Inicia!</a></p>
            </div>
          </div>
        </form>
            <?php  
                }  
                ?> 
          
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

                function r_value (){
                var r_value = $("#r_value").val();
                var r_value2 = $("#r_value2").val();
                if (r_value == 1 || r_value2 == 1){
                    $('#register_form')[0].reset(); 
                    $("#r_value").val("0");
                }
            }setInterval(r_value, 200);
            

            
        });
            
          </script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../js/custom-script.js"></script>
    </div>
  </body>

</html>
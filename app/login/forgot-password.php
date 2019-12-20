   
<?php  
 include("../../db/dbconnect.php");
 
    $mensaje = '';
    
 
 if(isset($_POST["reset"]))  
 {  
      if(empty($_POST["email_reset"]))  
      {  
           $mensaje = '<p style="font-size:12px;" class="center red-text">Es obligatorio introducir un correo</p>';  
      }  
      else  
      {
            $query ='SELECT * FROM user_details WHERE user_email = "'.$_POST["email_reset"].'" ';
            $statement = $connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            $total_row = $statement->rowCount();
            $output = '';
            $msg_password_reset = '';
            if($total_row > 0)
            {
                foreach($result as $row);
                 $email_user = str_replace(' ', '-', $row["user_email"]);
                 $fullname_user = str_replace(' ', '-', $row["CustomerName"]);
                 $msg_password_reset = '<h1 style="color:#880e4f;">Hola '.$row["user_name"].'</h1></br> 
                 <h3>¡Gracias por utilizar nuestro sitio web!</h3></br>
                <h3 style="color:#880e4f;">Fertisuelos</h3> <h3>te informa que puedes acceder al siguiente enlace para recuperar tu contraseña,</h3><br><br>
                 <a href="http://magicextensionsmedellin.com/app/log/password-reset?username='.$row["user_name"].'&user_id='.sha1($email_user).'&request='.$row["CustomerID"].'&value='.sha1($fullname_user).'">Recuperar mi contraseña.</a>
                 
                 ';
        require '../../phpmailer/class/class.phpmailer.php';
		$mail = new PHPMailer;
        $mail->CharSet = 'UTF-8';
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.hostinger.co';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '587';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'administrador@magicextensionsmedellin.com';					//Sets SMTP username
		$mail->Password = 'GZhze3SWHEASa7w';					//Sets SMTP password
		$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = 'administrador@magicextensionsmedellin.com';				//Sets the From email address for the message
		$mail->FromName = 'Magic Extensions MEDELLIN (Administrador)';	//Sets the From name of the message
		$mail->AddAddress($_POST["email_reset"], $row["CustomerName"]);		//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML				
		$mail->Subject = 'Solicitud para recuperar contraseña';					//Sets the Subject of the message
		$mail->Body = $msg_password_reset;				//An HTML or plain text message body
		if($mail->Send())								//Send an Email. Return true on success or false on error
		{
            $mensaje = '<p style="font-size:12px;" class="center blue-text">Revisa la bandeja de entrada de tu correo para restablecer tu contraseña</p>';  
            $mensaje;
        
		}
		else
		{
           $mensaje = '<p style="font-size:12px;" class="center red-text">No se ha podido realizar la operación, por favor intenta más tarde</p>';  
            $mensaje;
		}
          
            }else{
                $mensaje = '<p style="font-size:12px;" class="center red-text">No hay coincidencias con este correo</p>';  
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
    <meta name="description" content="Bienvenid@s !... Fertisuelos.">
    <meta name="keywords" content="Recuperar contraseña, fertisuelos, contraseña, password, olvide la clave">
    <title>Recuperar contraseña | Fertisuelos</title>
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
                <p class="center login-form-text">Recuperar contraseña</p>
                <?php echo $mensaje; ?>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">email</i>
              <input id="email_reset" name="email_reset" type="email" class="">
              <label for="email_reset" class="center-align">Correo</label>
            </div>
          </div>
 
          <div class="row">
            <div class="input-field col s12" align="center">
                <input type="submit" name="reset" value="Enviar" class="btn green darken-4 waves-effect waves-light" />  
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
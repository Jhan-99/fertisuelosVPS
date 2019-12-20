
<?php
session_start(); 
include("db/dbconnect.php"); 
            $_SESSION["times"] = 1;
             if(!isset($_SESSION["user_name"]))  
             {   
              $_SESSION["user_name"] = 'Invitado';
              $query_user = "SELECT * FROM user_details WHERE user_name = '".$_SESSION["user_name"]."'";  
              $result_user = mysqli_query($conexion, $query_user);
             }else{
                  $query_user = "SELECT * FROM user_details WHERE user_name = '".$_SESSION["user_name"]."'";  
                  $result_user = mysqli_query($conexion, $query_user);  
             }
            $estado = "";

               if($_SESSION["user_name"] == 'Invitado') {
                   $estado = "Iniciar Sesión";    
               }else{
                    $estado = "Cerrar Sesión";    
               }

$querypersonas = "SELECT * FROM personas";
$resultpersonas = mysqli_query($conexion, $querypersonas);

$query = "SELECT * FROM siembras"; $result = mysqli_query($conexion, $query); $query2 = "SELECT * FROM cultivos"; 
$result2 = mysqli_query($conexion, $query2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Fertisuelos</title>
    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.html">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="css/themes/fixed-menu/materialize.css" type="text/css" rel="stylesheet">
    <link href="css/themes/fixed-menu/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="vendors/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet">
    <link href="vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  </head>
 
    
  <body class="">
      <div class="slider fullscreen">
  <ul class="slides">
    <li>
      <img src="images/gallary/wallbody.jpg"> <!-- random image -->
      <div class="caption left-align">
        <h3>Bienvenidos a fertisuelos</h3>
        <h5 class="light grey-text text-lighten-3">Puedes gestionar tus analisis de suelos y planes de fertilización.</h5><br>
          <a  href="app/login/login.php" class="waves-effect waves-light btn red"><i class="material-icons right">person_add</i>Registrarme</a>
          <a href="app/login/login.php?action=login" class="waves-effect waves-light btn white black-text"><i class="material-icons right">send</i>Iniciar sesión</a><br><br><br>
          <a href=index.php class="waves-effect waves-light white-text">Solo quiero ver por el momento...</a><br>
          
      </div>
    </li>
      <li>
      <img src="images/gallary/wallbody2.jpg"> <!-- random image -->
      <div class="caption left-align">
        <h3>Bienvenidos a fertisuelos</h3>
        <h5 class="light grey-text text-lighten-3">Puedes gestionar tus analisis de suelos y planes de fertilización.</h5><br>
          <a href="app/login/login.php" class="waves-effect waves-light btn red"><i class="material-icons right">person_add</i>Registrarme</a>
          <a href="app/login/login.php?action=login" class="waves-effect waves-light btn white black-text"><i class="material-icons right">send</i>Iniciar sesión</a><br><br><br>
          <a href=index.php class="waves-effect waves-light white-text">Solo quiero ver por el momento...</a><br>
          
      </div>
    </li>
  </ul>
</div>
    <!-- Start Page Loading -->
      <div id="loader"></div>
      <div class="main animate-bottom" style="display:none;">
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
       
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--card-advanced.js - Page specific JS-->
    
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
      </div>
  </body>
    
</html>
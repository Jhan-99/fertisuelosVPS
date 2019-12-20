<?php include('fetch-head.php'); 
session_start();
include("../../db/dbconnect.php"); 
            
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
                   $estado = "Iniciar";    
               }else{
                    $estado = "Salir";    
               }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Fertil | Gestión de análisis de suelos</title>
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
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../../vendors/prism/prism.css" type="text/css" rel="stylesheet">
    <link href="../../vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="../../vendors/data-tables/css/jquery.dataTables.min.css">
    <link href="../../vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  </head>
    <body style="overflow-x: hidden;">
    <!-- Start Page Loading -->
      <div id="loader"></div>
      <div class="main animate-bottom" style="display:none;">
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <?php include("../top-bar-sub.php");?>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
          <?php include("../left-sidebar.php")?>
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title">Gestión de análisis de suelos</h5>
                  <ol class="breadcrumbs">
                    <li><a href="../../index.php">Dashboard</a></li>
                    <li><a href="#">Estudio de campo</a></li>
                    <li class="active">Análisis de suelos</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!--breadcrumbs end-->
          <!--start container-->
          <div class="container">
            <div class="section">
              <div class="divider"></div>
              <!--DataTables example-->
              <div id="table-datatables">
                <div class="row">
                  <div class="col s12">
                    <p>Aquí puedes ver y gestionar tus análisis de suelos.</p>
                  </div>
                <div align="right">
                    <div class="row">
                        <div class="col s12 l12 m12">
                        <a href="#ayuda" class="modal-trigger"><i class="material-icons">help</i><span class="new badge blue" data-badge-caption="Ayuda "></span></a>
                        </div>
                    </div>
				    </div>    
                  <div class="col s12">
                    <table id="datos_anasuelos" class="responsive-table display highlight bordered striped" cellspacing="0">
                     <thead>
                      <tr>
                       <th>Nombre del análisis</th>
                       <th>Propietario</th>
                       <th>Asistente ténico</th>
                       <th>Fecha muestreo</th>
                       <th>Fecha recepcion</th>
                       <th>Editar</th>
                       <th>Resultados</th>
                       <th>Eliminar</th>
                      </tr> 
                     </thead>
                    </table>
                  </div>
                </div>
              </div>
              <br>
              <div class="divider"></div>
              
            </div>
            <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
              <a class="btn-floating btn-large">
                <i class="material-icons">add</i>
              </a>
              <ul>
                <li>
                  <a href="css-helpers.html" class="btn-floating blue">
                    <i class="material-icons">help_outline</i>
                  </a>
                </li>
 
              </ul>
            </div>
            <!-- Floating Action Button -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--INICIO MODAL PARA MOSTRAR LAS VARIBLES DEL ANÁLISIS DE SUELO-->
                 <div id="variables_suelo" class="modal">
                  <br>
                   <a href="#!" class="right red-text modal-action modal-close btn-flat">X</a>
                    <div id="carga_datos_var_suelo" class="modal-content">
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div> 
                <!--FIN MODAL PARA MOSTRAR LAS VARIBLES DEL ANÁLISIS DE SUELO-->
                <!--INICIO MODAL PARA LA GESTIÓN DE ANÁLISIS DE SUELOS-->
<div id="elementos_modal" class="modal">
    <form method="post" id="form_elementos" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#!" class="modal-action modal-close red-text right btn-flat">Cerrar</a>
                <h5 class="modal-title">Agregar elemento</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class=" col s12 m12 l12">
						<label class="active" for="">Nombre del analisis</label>
                        <input id="Nombre_programa" name="Nombre_programa" type="text" data-length="20" maxlength="30">
                    </div>
                    <div class="col s12 m12 l6">
						<label class="active" for="">Propietario</label>
                        <input type="text" name="Propietario" id="Propietario" class="validate" />
                    </div>
                    <div class=" col s12 m12 l6">
						<label class="active" for="">Asistente técnico</label>
                        <input name="Asistente_tecnico" id="Asistente_tecnico" type="text" class="validate">
                    </div>
                </div>
                <div class="row">
                    <div class=" col s12 m12 l6">
						<label for="Fecha_muestreo">Fecha muestreo</label>
                        <input type="text" id="Fecha_muestreo" name="Fecha_muestreo" class="datepicker">
                    </div>
                    <div class=" col s12 m12 l6">
						<label for="Fecha_recepcion">Fecha Recepción</label>
                        <input type="text" id="Fecha_recepcion" name="Fecha_recepcion" class="datepicker">
                    </div>
                </div>
                <!--Request para cargar cultivos -->
                <div class="row">
                    <div class="col s12 m12 l4">
                        <label style="font-size:14px"><b></b>Selecciona una siembra</label>
                        <select class="browser-default" name="Siembra_id" id="Siembra_id">
                        <?php echo obtener_siembras($conexion); ?>
                        </select>
                    </div>
                    <div class="" id="mostrar_detsiembra">
                        <?php echo obtener_carac_siembras($conexion);?>
                    </div>
                </div>
                <div class="row">
                    <div class="browser-default col s12 m12 l4">
                <label>Departamento</label>
                <select name="Departamento" id="Departamento" class="selec_control browser-default">
                    <option value="" disabled selected>Elige un departamento</option>
                       <?php echo $Departamento; ?>
                  </select>
                    </div>
                    <div class="browser-default col s12 m12 l4">
                        <label>Municipio</label>
                        <select name="Municipio" id="Municipio" class="selec_control">
						<option selected></option>

                      </select>
                    </div>
                    <div class="browser-default col s12 m12 l4">
                        <label>Finca</label>
                        <select name="Finca" id="Finca" class="validate">
							<option selected></option>
                        </select><br>
                        <a class="waves-effect waves-light green-text">
                    	<i class="material-icons right">room</i>¿No se encuentra tu finca?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" name="id_cabecera" id="id_cabecera" />
            <input type="hidden" name="operacion" id="operacion" />
            <input type="submit" name="accion" id="accion" class="center blue-text btn-flat" value="Add" />
        </div>
    </form>
</div>
    <!--FIN MODAL PARA LA GESTIÓN DE ANÁLISIS DE SUELOS-->
            
<!-- INICIO MODAL PARA ASIGNARLE MULTIPLES ARCHIVOS A ESTE ANÁLISIS DE SUELOS-->
  <div id="ana_suelo_archivos" class="modal">
    <div class="modal-content">
          <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="id_cabecera_suelos" name="id_cabecera_suelos" type="hidden" class="validate">
           <div id="lista_datos"></div>  
        </div>
      </div>
    </form>
    <!-- -->
       <p class="center">En este espacio podrás subir archivos para tu análisis de suelo, también podrás gestionarlos en el servidor</p>
       <h5 align="center">Puedes Subir multiples archivos a este análisis</h5>
   <br />
   <div align="right">
    <input type="file" name="multiple_files" id="multiple_files" multiple />
    <span class="text-muted">Solo archivos .PDF, DOCX, .XLSX &amp; ZIP | MAX 5MB</span>
    <span id="error_multiple_files"></span>
   </div>
   <br />
   <h5 class="center blue-text">Archivos en el servidor</h5>
   <div class="table-responsive" id="tabla_archivos">
    
   </div>
   
  </div>

    </div>       
    <div class="modal-footer">
      <a href="#!" class="red-text modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>
    <!-- FIN MODAL PARA ASIGNARLE MULTIPLES ARCHIVOS A ESTE ANÁLISIS DE SUELOS-->
    <!-- INICIO MODAL PARA EDITAR LOS MULTIPLES ARCHIVOS A ESTE ANÁLISIS DE SUELOS-->
        <div id="modal_archivos" class="modal">
    <div class="modal-content">
   <form method="POST" id="form_edita_archivo">
    <div class="modal-header">
     <a href="#!" class="red-text right modal-action modal-close waves-effect waves-green btn-flat">X</a>
     <h4 class="modal-title">Editar detalles del archivo</h4>
    </div>
    <div class="modal-body">
     <div class="form-group">
      <label>Nombre del archivo</label>
      <input type="text" name="nombre_archivo" id="nombre_archivo" class="form-control" />
     </div>
     <div class="form-group">
      <label>Descripción del archivo</label>
      <input type="text" name="descripcion_archivo" id="descripcion_archivo" class="form-control" />
     </div>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="id_archivo" id="id_archivo" value="" />
     <input type="submit" name="submit" class="btn-flat btn-info blue-text" value="Editar" />
     <a href="#!" class="red-text modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
   </form>
  </div>
 
</div>
    <!-- FIN MODAL PARA EDITAR LOS MULTIPLES ARCHIVOS A ESTE ANÁLISIS DE SUELOS-->
             
          
        <!-- MODAL AYUDA-->  
        <div id="ayuda" class="modal">
    <div class="modal-content">
      <h5>Ayuda en la gestión de los análisis de suelos</h5>
      <hr><br>
        <div class="row">
        <div class="col l12 m12 s12">
            <table>
                <thead>
                    <tr>
                    <th>Botón</th>
                    <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td><a href="#"><i class="material-icons black-text center">mode_edit</i></a></td>
                    <td><h6 class="title">Permite editar un análisis de suelo   </h6></td>
                    </tr>
                    <tr>
                    <td><a href="#"><i class="material-icons green-text center">remove_red_eye</i></a></td>
                    <td><h6 class="title">Permite visualizar los resultados de  un análisis de suelo</h6></td>
                    </tr>
                    <tr>
                    <td><a href="#"><i class="material-icons blue-text center">backup</i></a></td>
                    <td><h6 class="title">Permite subir archivos a un análisis de suelo</h6></td>
                    </tr>
                    <tr>
                    <td><a href="#"><i class="material-icons red-text center">delete</i></a></td>
                    <td><h6 class="title">Permite eliminar un análisis de suelo</h6></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Gracias</a>
    </div>
  </div>    
          
        <!-- START RIGHT SIDEBAR NAV-->
        <!-- END RIGHT SIDEBAR NAV-->
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
    <footer class="page-footer light-green darken-4">
      <div class="footer-copyright">
        <div class="container">
          <span>Derechos ©
            <script type="text/javascript">
              document.write(new Date().getFullYear());
            </script> <a class="grey-text text-lighten-2" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">SENNOVA</a> C.G.A.O  SENA - Vélez Santander</span>
         <span class="right hide-on-small-only">Diseño <a class="grey-text text-lighten-2" href="#">SENNOVA</a></span>
        </div>
      </div>
    </footer>
    <!-- END FOOTER -->
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="../../vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="../../vendors/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../../vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartjs -->
    <script type="text/javascript" src="../../vendors/chartjs/Chart-2.7.min.js"></script>
    <!-- data-tables -->
    <script src="../../vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../js/plugins.js"></script>
    <!-- inicialización de JQueries-->
    <script type="text/javascript" src="../../js/inicializadores-materialize.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../js/custom-script.js"></script>
    <!--Modelo de los análisis de suelo-->      
    <script type="text/javascript" language="javascript" src="../../model/m.analisis_suelo/m.analisis_suelo_get.js"></script>
    <script type="text/javascript" language="javascript" src="../../model/m.analisis_suelo/m.analisis_suelo.js"></script>
    <script type="text/javascript" language="javascript" src="../../model/m.analisis_suelo/m.archivos_controller.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../../js/scripts/data-tables.js"></script>
    </div>
  </body>
</html>

 
    

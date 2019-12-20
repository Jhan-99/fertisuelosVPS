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

include('../fetchs.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Fertisuelos | Gestión de novedades</title>
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
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explora Fertisuelos">
            </div>
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title">Gestión de Novedades</h5>
                  <ol class="breadcrumbs">
                    <li><a href="../../index.php">Dashboard</a></li>
                    <li><a href="#">Novedades</a></li>
                    <li class="active">Gestión de Novedades</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!--breadcrumbs end-->
          <!--start container-->
          <div class="container">
            <div class="section">
              <!--DataTables example-->
              <div id="table-datatables">
                <div class="row">
                  <div class="col s12">
                      <div class="divider"></div>
                    <p class="caption">Aquí puedes ver y gestionar tus Novedades.</p>
                      <form method="post" action="../../dompdf/novedadespdf.php">
                      <input type="submit" class="btn red" value="-PDF-">
                      </form>
                          <form method="post" action="../../control/novedades/exportexcel.php">
                             <input type="submit" name="export" class="btn green" value="Excel" />
                         </form>
                  </div>
                    <div align="right">
                    <div class="row">
                        <div class="col s12 l12 m12">
                        <a href="#ayuda" class="modal-trigger"><i class="material-icons">help</i><span class="new badge blue" data-badge-caption="Ayuda "></span></a>
                        </div>
                    </div>
				    </div>   
                  <div class="col s12 m12 l12">
                    <table id="datos_novedades" class="responsive-table display highlight" cellspacing="0">
                     <thead>
                        <tr>
                            <th>Tipo novedad</th>
                            <th>Camellón</th>
                            <th>Fecha</th>
                            <th>Tiempo</th>
                            <th>Control</th>
                            
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
              <a id="add_button" href="#Novedades_modal" class="btn-floating btn-large green modal-trigger">
                <i class="material-icons">add</i>
              </a>
              <ul>
              </ul>
            </div>
            <!-- Floating Action Button -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
         <!-- INICIO DEL MODAL QUE GESTIONA LAS Novedades-->
          <div id="Novedades_modal" class="modal">
        <form method="post" id="form_Novedades" enctype="multipart/form-data">
    <div class="modal-content">
        <div class="modal-header">
            <a href="#!" class="modal-action modal-close red-text right btn-flat">Cerrar</a>
            <h5 class="modal-title">Agregar nueva novedad</h5>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="form-group">
				<label for="">Seleccione la siembra a la cual va a realizar la novedad</label>
				<select name="siembra_id" id="siembra_id" class="validate" required="">
					<?php echo obtener_siembras($conexion); ?>
                    </select>
                  </div>
            <div class="form-group">
			<label for="">Qué Tipo de novedad va a realizar?</label>
			<select name="tipnov_nov" id="tipnov_nov" class="form-control" required>
					<option>Seleccione un Tipo de novedad</option>
					<option value="Defoliación">Defoliación</option>
					<option value="Poda de producción y sanitaria">Poda de producción y sanitaria</option>
					<option value="Control de malezas guadaсa ">Control de malezas guadaсa </option>
					<option value="Pasta protectora base del tallo (patнn)">Pasta protectora base del tallo (patнn)</option>
					<option value="Riego constante">Riego constante</option>
					<option value="Enmiendas">Enmiendas</option>
					<option value="Fertilización edбfica de acuerdo anбlisis de suelos">Fertilización edáfica de acuerdo anбlisis de suelos</option>
					<option value="Fertilización foliar">Fertilización foliar</option>
					<option value="Control hormigas en el suelo ">Control hormigas en el suelo </option>
					<option value="Control de malezas">Control de malezas</option>
					<option value="Trampas macphail">Trampas macphail</option>
					<option value="Toma de muestra para analisis forliar">Toma de muestra para analisis forliar</option>
					<option value="Labores culturales o mantenimientos">Labores culturales o mantenimientos</option>
					<option value="Fertilización">Fertilización</option>
					<option value="Fungicida">Fungicida</option>
					<option value="Insecticida">Insecticida</option>
					<option value="Herbicidas">Herbicidas</option>
					<option value="Otros">Otros</option>
            </select>
          </div>    
			<div class="form-group">
				<label for="">Camellón</label>
				<input type="text" class="validate" name="camellon_nov" id="camellon_nov">
			</div>
			<div class="form-group">
				<label for="">Fecha </label>
				<input type="text" class="datepicker" name="fecha_nov" id="fecha_nov">
			</div>
			<div class="form-group">
				<label for="">¿Cuánto Tiempo Dedico a la Novedad? (en horas) </label>
				<input type="text" class="validate" name="tiempo_nov" id="tiempo_nov">
			</div>
			<div class="form-group">
				<label for="">Estado de Ejecución de la labor</label>
				<select class="validate" name="costopro_nov" id="costopro_nov">
				  <option value="Programada">Programada (por ejecutar)</option>
				  <option value="Finalizada">Finalizada</option>
				</select>
            </div>
		  <div class="form-group">
				<label for="">Costo mano de obra y de los productos aplicados (sin decimales) </label>
				<input type="text" class="validate" name="costoman_nov" id="costoman_nov">
			</div>
			<div class="form-group">
				<label for="">Operario</label>
				<input type="text" class="validate" name="operario_nov" id="operario_nov">
			</div>
		  <div class="form-group">
				<label for="">Estado Fenológico de la Siembra</label>
				<select name="estado_nov" id="estado_nov" class="validate">
					<option>Seleccione un Estado Fenologico</option>
					<option value="1">Estado Vegetativo (en reposo) después de la cosecha</option>
					<option value="2">Floración</option>
					<option value="3">Foliación</option>
					<option value="4">Polinización/Cuajamiento del fruto</option>
					<option value="5">Primer Crecimiento del fruto</option>
					<option value="6">Desarrollo de la Yema Endurecimiento del endocarpio (Hueso que cubre la semilla)</option>
					<option value="7">Segundo crecimiento del mesocarpio (Pulpa)</option>
					<option value="8">Maduración de la fruta </option>
                </select>
			</div>
            
            <div class="form-group">
				<label for="">¿Qué  Producto aplicó?</label>
				<select name="producto_id" id="producto_id" class="validate">
					<?php echo obtener_fertilizantes($conexion); ?>
				</select>
                </div>
                
                <div class="form-group">
				<label for="">Dosis aplicada en mg / ml</label>
				<input type="text" class="validate" name="dosis_nov" id="dosis_nov">
			     </div>
           	
            	<div class="form-group">
				<label for="">Categoría toxica</label>
				<select class="validate" name="cattoxica_nov" id="cattoxica_nov">
				  <option value="0">Seleccione una Categoria Toxica</option>
				  <option value="N/A">No aplica</option>
				  <option value="1">categoria 1</option>
				  <option value="2">categoria 2</option>
                </select>
			</div>

    <div>
            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" name="id_novedad" id="id_novedad" />
            <input type="hidden" name="operacion" id="operacion" />
            <input type="submit" name="accion" id="accion" class="center blue-text btn-flat" value="Agregar">
        </div>
    </div>
            </form>
            </div> </div>
          <!-- FIN DEL MODAL QUE GESTIONA LAS Novedades-->

            <div id="ver_novedades" class="modal">
            <div class="modal-content" id="novedad_data">
                 
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
                </div>
              </div>
          
                  <!-- MODAL AYUDA-->  
        <div id="ayuda" class="modal">
    <div class="modal-content">
      <h5>Ayuda en la gestión de las novedades</h5>
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
                    <td><h6 class="title">Permite editar una novedad   </h6></td>
                    </tr>
                    <tr>
                    <td><a href="#"><i class="material-icons green-text center">remove_red_eye</i></a></td>
                    <td><h6 class="title">Permite visualizar los resultados al detalle de una novedad</h6></td>
                    </tr>
                    <tr>
                    <td><a href="#"><i class="material-icons red-text center">delete</i></a></td>
                    <td><h6 class="title">Permite eliminar una novedad</h6></td>
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
          <span class="right hide-on-small-only"> Diseño <a class="grey-text text-lighten-2" href="#">SENNOVA</a></span>
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
    <!-- data-tables -->
    <script src="../../vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../js/plugins.js"></script>
    <!-- inicialización de JQueries-->
    <script type="text/javascript" src="../../js/inicializadores-materialize.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../js/custom-script.js"></script>
    <!--Modelo de las siembras-->
    <script type="text/javascript" language="javascript" src="../../model/m.novedades/m.novedades.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../../js/scripts/data-tables.js"></script>
    </div>
  </body>
</html>
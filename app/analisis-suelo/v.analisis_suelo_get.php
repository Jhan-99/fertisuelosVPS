<?php include('fetch-head.php'); ?>
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
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color light-green">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="../../index.php" class="brand-logo darken-1">
                    <img src="../../images/logo/materialize-logo.png" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Fertisuelos</span>
                  </a>
                </h1>
              </li>
            </ul>
            <div class="header-search-wrapper hide-on-med-and-down">
              <i class="material-icons">search</i>
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explora Fertisuelos" />
            </div>
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                  <span class="flag-icon flag-icon-gb"></span>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                  <i class="material-icons">notifications_none
                    <small class="notification-badge pink accent-2">5</small>
                  </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="../../images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                  <i class="material-icons">format_indent_increase</i>
                </a>
              </li>
            </ul>
            <!-- translation-button -->
            <ul id="translation-dropdown" class="dropdown-content">
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-gb"></i> English</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-fr"></i> French</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-cn"></i> Chinese</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-de"></i> German</a>
              </li>
            </ul>
            <!-- notifications-dropdown -->
            <ul id="notifications-dropdown" class="dropdown-content">
              <li>
                <h6>NOTIFICACIONES
                  <span class="new badge">5</span>
                </h6>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
            </ul>
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Profile</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Settings</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Help</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Lock</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- end header nav-->
    </header>
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
             
        <!-- START RIGHT SIDEBAR NAV-->
        <aside id="right-sidebar-nav">
          <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
              <div class="row">
                <div class="col s12 border-bottom-1 mt-5">
                  <ul class="tabs">
                    <li class="tab col s4">
                      <a href="#activity" class="active">
                        <span class="material-icons">graphic_eq</span>
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#chatapp">
                        <span class="material-icons">face</span>
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#settings">
                        <span class="material-icons">settings</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div id="settings" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">CONFIGURACIÓN GENERAL</h6>
                  <ul class="collection border-none">
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">NotificaCionEs</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
     
         
                  </ul>
                </div>
                <div id="chatapp" class="col s12">
                  <div class="collection border-none">
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-1.png" alt="" class="circle cyan">
                      <span class="line-height-0">Elizabeth Elliott </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-2.png" alt="" class="circle deep-orange accent-2">
                      <span class="line-height-0">Mary Adams </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Hello Boo </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Caleb Richards </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">9.00 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Keny ! </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-4.png" alt="" class="circle cyan">
                      <span class="line-height-0">June Lane </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Ohh God </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-5.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Edward Fletcher </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.15 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Love you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-6.png" alt="" class="circle deep-orange accent-2">
                      <span class="line-height-0">Crystal Bates </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">8.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Can we </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-7.png" alt="" class="circle cyan">
                      <span class="line-height-0">Nathan Watts </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">9.53 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Great! </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-8.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Willard Wood </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.20 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Do it </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-9.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Ronnie Ellis </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.30 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Got that </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-1.png" alt="" class="circle cyan">
                      <span class="line-height-0">Gwendolyn Wood </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.34 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Like you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-2.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Daniel Russell </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">12.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Sarah Graves </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">11.14 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Okay you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-4.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Andrew Hoffman </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">7.30 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Can do </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-5.png" alt="" class="circle cyan">
                      <span class="line-height-0">Camila Lynch </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">2.00 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Leave it </p>
                    </a>
                  </div>
                </div>
                <div id="activity" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">ACTIVIDAD RECIENTE</h6>
                  <div class="activity">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="deep-purple-text medium-small">just now</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                    </div>
     
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </aside>
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

 
    

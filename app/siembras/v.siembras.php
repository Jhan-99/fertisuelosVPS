<?php include('../fetchs.php'); ?>
<?php include('fetch-head.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Fertil | Gestión de Siembras</title>
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
                  <h5 class="breadcrumbs-title">Gestión de siembras</h5>
                  <ol class="breadcrumbs">
                    <li><a href="../../index.php">Dashboard</a></li>
                    <li><a href="#">Finca</a></li>
                    <li class="active">Gestión de siembras</li>
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
                    <p>Aquí puedes gestionar las siembras.</p>
                  </div>
                  <div align="right">
				</div>
                  <div class="col s12">
                    <table id="datos_siembra" class="responsive-table display highlight bordered striped" cellspacing="0">
                     <thead>
						<tr>
							<th>Nombre siembra</th>
							<th>No plantas</th>
							<th>Descripcion</th>
							<th>Estado</th>
							<th>Editar</th>
							<th>Ajustes</th>
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
              <a id="add_button" class="btn-floating btn-large green modal-trigger" href="#Siembras_modal">
                <i class="material-icons">add</i>
              </a>
            </div>
            <!-- Floating Action Button -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- INICIO DEL MODAL  QUE CARGAR LA GESTIÓN DE LAS SIEMBRAS -->
<div id="Siembras_modal" class="modal bottom-sheet" style="height:90%">
    <div class="container" style="width:95%">
        <div class="modal-dialog">
            <form method="post" id="form_siembras" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header col s12 m12 l12">
                        <a href="#!" class="modal-action modal-close red-text right btn-flat">Cerrar</a>
                        <h5 class="modal-title center">Agregar siembra</h5>
                    </div><br>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col s12 m12 l4">
                                <label class="active" for="Nombre_siembra">Nombre siembra</label>
                                <input id="Nombre_siembra" name="Nombre_siembra" type="text" class="validate">
                            </div>
                            <div class="col s12 m12 l4">
                                <label class="active" for="N_plantas_siembra">No. plantas siembra</label>
                                <input id="N_plantas_siembra" name="N_plantas_siembra" type="number" class="validate">
                            </div>

                            <div class="browser-defaul col s12 m12 l4">
                                <label>Estado siembra</label>
                                <select id="Estado_siembra" name="Estado_siembra">
                  <option value="" disabled selected>Estado siembra</option>
                  <option value="Vegetativo">Vegetativo</option>
                  <option value="Floriación">Floriación</option>
                  <option value="Produccion">Produccion</option>
                  <option value="Boton Floral">Boton Floral</option>
                  <option value="Floracion, llenado de fruto">Floracion, llenado de fruto</option>
                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l4">
                                <label class="active" for="Descripcion_siembra">Descripcion siembra</label>
                                <input id="Descripcion_siembra" name="Descripcion_siembra" type="text" class="validate">
                            </div>
                            <div class="col s12 m6 l2">
                                <label class="active" for="Area_siembra">Área</label>
                                <input id="Area_siembra" name="Area_siembra" type="number" class="validate">
                            </div>

                            <div class="col s12 m12  l3">
                                <label class="active" for="Fecha_siembra">Fecha siembra</label>
                                <input id="Fecha_siembra" name="Fecha_siembra" class="validate datepicker" placeholder="Fecha siembra">
                            </div>
                            <div class="browser-defaul s12 m12 col l3">
                                <label>Tipo rriego</label>
                                <select id="Tiporiego_siembra" name="Tiporiego_siembra">
                                  <option value="" disabled selected>Tipo rriego</option>
                                  <option value="No">No</option>
                                  <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>



                        <div class="row">
                            <div class="browser-defaul col s12 m12 l3">
                                <label>Fuente de agua</label>
                                <label>Fuente de agua</label>
                                <select id="Fteagua_siembra" name="Fteagua_siembra">
                                  <option value="" disabled selected>Fuente de Agua</option>
                                  <option value="Ninguna">Ninguna</option>
                                  <option value="Dron">Dron</option>
                                  <option value="Camión">Camión</option>
                                  <option value="Tractor">Tractor</option>
                                  <option value="Manual">Manual</option>
                                </select>
                            </div>

                            <div class="browser-defaul col s12 m12 l3">
                                <label>Edad de la siembra</label>
                                <select id="Edad_siembra" name="Edad_siembra">
                                  <option value="" disabled selected>Edad de la siembra</option>
                                  <option value="1 - 2 Años">1 - 2 Años</option>
                                  <option value="2 - 3 Años">2 - 3 Años</option>
                                  <option value="3 - 4 Años">3 - 4 Años</option>
                                  <option value="4 - 5 Años">4 - 5 Años</option>
                                </select>
                            </div>
                            <div class="col s12 m12 l3">
                             <label class="active" for="Distancia_siembra">Distancia siembra</label>
                                <input id="Distancia_siembra" name="Distancia_siembra" type="text" class="validate">
                                
                            </div>
                            <div class="browser-defaul col s12 m12 l3">
                                <label>Sanitario siembra</label>
                                <select id="Sanitario_siembra" name="Sanitario_siembra">
                              <option value="" disabled selected>Sanitario siembra</option>
                              <option value="Na">Na</option>
                              <option value="Fábrica">Fábrica</option>
                              <option value="Zona especial">Zona especial</option>
                            </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="browser-defaul col s12 m12 l3">
                                <label>Propagacion siembra</label>
                                <select id="Propagacion_siembra" name="Propagacion_siembra">
                                  <option value="" disabled selected>Fuente de Agua</option>
                                  <option value="Ninguna">Ninguna</option>
                                  <option value="Semilla">Semilla</option>
                                </select>
                            </div>
                            <div class="col s12 m12 l3">
                                <label class="active" for="Registro_siembra">Registro siembra</label>
                                <input id="Registro_siembra" name="Registro_siembra" type="text" class="validate">
                            </div>
                            <div class="col s12 m12 l3">
                                <label class="active" for="Suelo_siembra">Suelo siembra</label>
                                <input id="Suelo_siembra" name="Suelo_siembra" type="text" class="validate">
                            </div>               
						
						<div class="col s12 m12 l3">
                 			<label style="font-size:14px"><b></b>Selecciona un cultivo</label>					
					<a id="ayuda_selec_cul" class="waves-effect waves-light green-text">
                    <i class="material-icons right">help</i></a>  
							<select class="browser-default" name="Cultivo_siembra" id="Cultivo_siembra">
								 <?php echo obtener_cultivos($conexion); ?>
							 </select>
                            </div>

                        </div>
						<!-- -->
					    <div class="row">
                        <div class="browser-default col s12 m12 l4">
                            <select name="Departamento_finca" id="Departamento_finca" class="form-control action">
                                    <option value="">Departamento</option>
                                    <?php echo $departamento; ?>
                            </select>
                        </div>
                        <div class="browser-default col s12 m12 l4">
                            <select name="Municipio_finca" id="Municipio_finca" class="browser-default form-control action">
                             <option value="">Municipio</option>
                             </select>
                        </div>
                        <div class="browser-default col s12 m12 l4">
                            <select name="Vereda_finca" id="Vereda_finca" class=" browser-default form-control">
                             </select>
                        </div>
                    </div>	
						
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_siembra" id="id_siembra" />
                        <input type="hidden" name="operacion" id="operacion" />
                        <input type="submit" name="action" id="action" class="btn green btn-success" value="Add" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
        <!-- FIN DEL MODAL  QUE CARGAR LA GESTIÓN DE LAS SIEMBRAS -->
                <!-- INICIO DEL MODAL PAR LISTAR CULTIVOS -->
        <div id="asig_cultivos" class="modal bottom-sheet">
            <a href="#!" class="right modal-action modal-close waves-effect waves-green btn-flat red-text">X</a>
            <div class="container" style="width:90%">
                <input type="hidden" id="siembra_val" name="siembra_val">
                <h5 class="center">Asignación de cultivos a siembras</h5>
                <label for="filter">Filtrar cultivos:</label> <input type="text" id="filter">
                <table id="cultivos" class="responsive-table display highlight bordered striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>FOTO</th>
                            <th>Nombre cultivo</th>
                            <th>Variedad</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody id="mostrar_cultivos">
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
            </div>
        </div>  
            <!-- FIN DEL MODAL PAR LISTAR CULTIVOS -->
       
<!--INICIO MODAL PAR LISTAR CULTIVOS RELACIONADOS A UNA SIMBRA -->
<div id="lista_cultivos_relacionados" class="modal bottom-sheet">
    <a href="#!" class="right modal-action modal-close waves-effect waves-green btn-flat red-text">X</a>
    <div class="container" style="width:90%">
        <input type="hidden" name="id_siembra_rel" id="id_siembra_rel" />
        <h5 class="center">Esta siembra tiene los siguientes cultivos</h5>
        <label for="filter_rel">Filtrar cultivos relacionados:</label> <input type="text" id="filter_rel">
        <table id="cultivos_relac" class="responsive-table display highlight bordered striped" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>FOTO</th>
                    <th>Nombre cultivo</th>
                    <th>Variedad</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody id="mostrar_c_relac">
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
    </div>
</div>      
<!--FIN MODAL PAR LISTAR CULTIVOS RELACIONADOS A UNA SIMBRA -->    
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
                        <span class="font-weight-600">Notificaciones</span>
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
                <?php 
                if(mysqli_num_rows($result) > 0)
                {
                 while($row = mysqli_fetch_array($result))
                 {
                  echo '
                     <a href="#!" class="collection-item avatar border-none">
                      <img src="../../control/personas/fotos/'.$row["Foto_persona"].'" alt="" class="circle cyan">
                      <span class="line-height-0">'.$row["Nombre_persona"].'</span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">'.$row["Cargo_persona"].'</p>
                    </a>
                  
                  ';
                 }
                }
                        ?>
 
                  </div>
                </div>
               <div id="activity" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">ACTIVIDAD RECIENTE</h6>
                  <div class="activity">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="deep-purple-text medium-small">justo ahora</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Se compró un SPAD 2.</p>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="cyan-text medium-small">16 de mayo</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Se participó en RedColsi.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="green-text medium-small">5 de junio</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Se hicieron pruebas del clorofilométro.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="amber-text medium-small">13 de julio</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Se georreferenciaron los puntos de control.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color deep-orange lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="grey-text medium-small">13 de marzo</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Georreferenciazión del cultivo.</p>
                      </div>
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
            </script> <a class="grey-text text-lighten-2" href="#" target="_blank">SENNOVA</a> C.G.A.O  SENA - Vélez Santander</span>
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
    <script type="text/javascript" language="javascript" src="../../model/m.siembras/m.siembras.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../../js/scripts/data-tables.js"></script>
    </div>
  </body>
</html>
<?php include('fetch-head.php'); ?>
<?php include('../fetchs.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Fertisuelos | Gestión de Fincas</title>
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
                <h6>NOTIFICATIONS
                  <span class="new badge">5</span>
                </h6>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
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
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explora Fertisuelos">
            </div>
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title">Gestión de fincas</h5>
                  <ol class="breadcrumbs">
                    <li><a href="../../index.php">Dashboard</a></li>
                    <li><a href="#">Fincas</a></li>
                    <li class="active">Gestión de fincas</li>
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
                    <p class="caption">Aquí puedes ver y gestionar tus fincas.</p>
                  </div>
                  <div align="right">
                    <a id="add_button" class="waves-effect waves-light btn green modal-trigger" href="#fincas_modal">AGREGAR</a>
				</div>
                  <div class="col s12 m12 l12">
                    <table id="datos_fincas" class="responsive-table display highlight" cellspacing="0">
                     <thead>
                        <tr>
                            <th>Nombre finca</th>
                            <th>Descripción</th>
                            <th>Departamento</th>
                            <th>Municipio</th>
                            <th>Editar</th>
                            <th>Control</th>
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
                <li>
                  <a href="cards-extended.html" class="btn-floating green">
                    <i class="material-icons">widgets</i>
                  </a>
                </li>
                <li>
                  <a href="app-calendar.html" class="btn-floating amber">
                    <i class="material-icons">today</i>
                  </a>
                </li>
                <li>
                  <a href="app-email.html" class="btn-floating red">
                    <i class="material-icons">mail_outline</i>
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
         <!-- INICIO DEL MODAL QUE GESTIONA LAS FINCAS-->
          <div id="fincas_modal" class="modal">
        <form method="post" id="form_fincas" enctype="multipart/form-data">
    <div class="modal-content">
        <div class="modal-header">
            <a href="#!" class="modal-action modal-close red-text right btn-flat">Cerrar</a>
            <h5 class="modal-title">Agregar elemento</h5>
        </div>
        <div class="modal-body">
            <div class="row">
                    <div class="col s12 m12 l12">
						<label class="active" for="">Nombre finca</label>
                        <input id="Nombre_finca" name="Nombre_finca" type="text" data-length="20" maxlength="30">
                    </div>
                    <div class="col s12 m12 l12">
						<label class="active" for="">Descripcion finca</label>
                        <input type="text" name="Descripcion_finca" id="Descripcion_finca" class="validate" />
                    </div>
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
                    <!-- -->
                    <div class="row">
                        <div class="col s12 m12 l3">
                            <label class="active" for="">Latitud</label>
                            <input type="text" name="Latitud_finca" id="Latitud_finca" class="validate" />
                        </div>

                        <div class="col s12 m12 l3">
                            <label class="active" for="">Longitud</label>
                            <input type="text" name="Longitud_finca" id="Longitud_finca" class="validate" />
                        </div>
                        <div class="col s12 m12 l6">
                            <label class="active" for="">Viacc</label>
                            <input type="text" name="Viacc_finca" id="Viacc_finca" class="validate" />
                        </div>
                    </div>
                    <!-- -->
                    <div class="row">
                        <div class="col s12 m12 l6">
                            <label class="active" for="">Inte familia</label>
                            <input type="text" name="Int_familia_finca" id="Int_familia_finca" class="validate" />
                        </div>
                        <div class="col s12 m12 l6">
                            <label class="active" for="">Jovenes 1518</label>
                            <input type="text" name="Jovenes_1518" id="Jovenes_1518" class="validate" />
                        </div>
                    </div>

                    <div class="browser-default col s12 m12 l12">
                        <label class="active" for="">Propietario</label>
                        <select name="Propietario" id="Propietario" class="browser-default form-control action">
                            <?php echo obtener_personas($conexion); ?>
                            </select>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" name="id_finca" id="id_finca" />
            <input type="hidden" name="operacion" id="operacion" />
            <input type="submit" name="accion" id="accion" class="center blue-text btn-flat" value="Agregar">
        </div>
    </div>
            </form>
</div> 
          <!-- FIN DEL MODAL QUE GESTIONA LAS FINCAS-->
            
             <!--INICIO MODAL PARA ASIGNAR MAPAS Y ARCHIVOS A LAS FINCAS-->
        <div id="poligon_add" class="modal">
            <div class="modal-content">
                <h5 class="ceneter">Asignar mapas a la finca</h5>
                <div class="row">
                    <form class="col s12 m12 l12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="identificador" name="identificador" value="" class="validate" />
                                <label for="identificador">Nombre identificador</label>
                            </div>
                        </div>
                        <div class="row">
                            <input type="hidden" name="id_finca_add_poligon" id="id_finca_add_poligon">
                            <div class="input-field col s12 m12 l12">
                                <textarea id="url_poligon" name="url_poligon" class="materialize-textarea"></textarea>
                                <label for="url_poligon">Link del mapa en Arcgis</label>
                            </div>
                        </div>
                        <button type="button" name="g_poligon" id="g_poligon" class="btn  right g_poligon"><i class="material-icons right">map</i>Guardar</button>

                    </form>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <form class="col s12 m12 l12" enctype="multipart/form-data">
                        <div class="row">
                            <span class="center">Subir un archivo SHP, KML, KMZ, ZIP</span>
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>SHP</span>
                                    <input type="file" name="shp_file_poligon" id="shp_file_poligon">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                        <button type="button" name="g_shp_file_g_poligon" id="g_shp_file_g_poligon" class="btn   right g_cabecera col s12 m12 l12"><i class="material-icons right">save</i>Guardar Archivo</button>
                    </form>
                </div>
                <div class="row">
                    <div id="carga_controler"></div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="red-text modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
            </div>
        </div>
            <!--FIN MODAL PARA ASIGNAR MAPAS Y ARCHIVOS A LAS FINCAS-->
             <!--INICIO DEL MODAL QUE ME PERMITE VER LOS ARCHIVOS QUE TIENE LA FINCA-->
                <div id="ver_poligonos" class="modal">
            <div class="modal-content">
                <div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s6 m5 l6"><a class="active" href="#lista_mapas">Mapas</a></li>
                            <li class="tab col s6 m5 l6"><a href="#ver_mapas">Visualizar</a></li>
                        </ul>
                    </div>
                    <div id="lista_mapas" class="col s12">
                        <input type="hidden" id="id_finca_add_id">
                        <!--RRECOGE EL ID DE LA FINCA-->
                        <table class="highlight">
                            <thead>
                                <tr>
                                    <th>MAPAS ARCGIS</th>
                                    <th>Ver en...</th>
                                    <th>Control</th>
                                </tr>
                            </thead>

                            <tbody id="datos_poligonos">
                            </tbody>
                        </table>
                        <ul class="collapsible">
                            <li>
                                <div id="" class="collapsible-header ver_archivos_finca"><i class="material-icons">filter_drama</i>Archivos</div>
                                <div id="" class="collapsible-body">
                                    <table class="highlight">
                                        <thead>
                                            <tr>
                                                <th>Nombre del archivo</th>
                                                <th>Acción</th>
                                                <th>Control</th>
                                            </tr>
                                        </thead>

                                        <tbody id="datos_archivos_fincas">
                                        </tbody>
                                    </table>
                                </div>

                            </li>
                        </ul>
                    </div>
                    <div id="ver_mapas" class="col s12">
                        <div class="embed-container">
                            <iframe id="map_arcgis" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Estado inicial" src=""></iframe>
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <a href="#!" class="red-text modal-close waves-effect waves-green btn-flat">Cerrar</a>
            </div>
        </div>
             <!--FIN DEL MODAL QUE ME PERMITE VER LOS ARCHIVOS QUE TIENE LA FINCA-->
          
                  <!-- INICIO DEL MODAL PAR LISTAR LAS SIEMBRAS -->
<div id="asig_siembras" class="modal bottom-sheet">
    <a href="#!" class="right modal-action modal-close waves-effect waves-green btn-flat red-text">X</a>
    <div class="container" style="width:90%">
        <input type="hidden" id="finca_val" name="finca_val">
        <h5 class="center">Asignación de siembras a la finca</h5>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre siembra</th>
                    <th>Variedad</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody id="mostrar_siembras">
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
    </div>
</div>  
    <!-- FIN DEL MODAL PAR LISTAR LAS SIEMBRAS -->
          
          
          <!--INICIO MODAL PAR LISTAR SIEMBRAS RELACIONADOS A UNA CULTIVO -->
<div id="list_siembras_rel" class="modal bottom-sheet">
    <a href="#!" class="right modal-action modal-close waves-effect waves-green btn-flat red-text">X</a>
    <div class="container" style="width:90%">
        <input type="hidden" name="id_finca_rel" id="id_finca_rel" />
        <h5 class="center">Esta fincas tiene las siguientes siembras</h5>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre siembra</th>
                    <th>Variedad</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody id="mostrar_siembras_relac">
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
    </div>
</div>      
<!--FIN MODAL PAR LISTAR SIEMBRAS RELACIONADOS A UNA CULTIVO -->    
          
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
                  <h6 class="mt-5 mb-3 ml-3">GENERAL SETTINGS</h6>
                  <ul class="collection border-none">
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show recent activity</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show recent activity</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show your emails</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show Task statistics</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
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
    <script type="text/javascript" language="javascript" src="../../model/m.fincas/m.fincas.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../../js/scripts/data-tables.js"></script>
    </div>
  </body>
</html>
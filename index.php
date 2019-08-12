<?php
include("db/dbconnect.php");
$querypersonas = "SELECT * FROM personas";
$resultpersonas = mysqli_query($conexion, $querypersonas);

$query = "SELECT * FROM siembras";
$result = mysqli_query($conexion, $query);
$query2 = "SELECT * FROM cultivos";
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
    <!-- Start Page Loading -->
      <div id="loader"></div>
      <div class="main animate-bottom" style="display:none;">
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color  light-green">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="index.html" class="brand-logo darken-1">
                    <img src="images/logo/materialize-logo.png" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Fertisuelos</span>
                  </a>
                </h1>
              </li>
            </ul>
            <div class="header-search-wrapper hide-on-med-and-down">
              <i class="material-icons">search</i>
				<form action="" method="get">
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explora Fertisuelos" /></form>
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
                    <img src="images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                </a>
              </li>
             <!-- <li>
                <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                  <i class="material-icons">format_indent_increase</i>
                </a>
              </li> -->
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
                  <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> Se ha comprado un medidor de clorofila</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">Hace 2 meses</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle red small">stars</span> Se realizó el primer PF</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">Hace 1 mes</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle teal small">settings</span> La programación de cosechas se acerca</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">Hace 4 días</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle deep-orange small">today</span> Recomendaciones nutricionales terminada</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">Hace 1 mes</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">Hace una semana</time>
              </li>
            </ul>
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Perfil</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Ajustes</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Ayuda</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Bloquear</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Cerrar</a>
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
        <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
              <div class="row">
                <div class="col col s4 m4 l4">
                  <img src="images/avatar/avatar-7.png" alt="" class="circle responsive-img valign profile-image cyan">
                </div>
                <div class="col col s8 m8 l8">
                  <ul id="profile-dropdown-nav" class="dropdown-content">
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
                  <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav">Sena<i class="mdi-navigation-arrow-drop-down right"></i></a>
                  <p class="user-roal">Administrator</p>
                </div>
              </div>
            </li>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan active">
                    <i class="material-icons">dashboard</i>
                    <span class="nav-text">Dashboard</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li class="#">
                        <a href="app/noticias/noticias.php#">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Noticias</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>                
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan active">
                    <i class="material-icons">spa</i>
                    <span class="nav-text">Fincas</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="app/fincas/v.fincas.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Gestión de fincas</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="app/siembras/v.siembras.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Gestión de siembras</span>
                        </a>
                      </li>                     
                       <li class="">
                        <a href="app/cultivos/v.cultivos.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Gestión de cultivos</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan active">
                    <i class="material-icons">grain</i>
                    <span class="nav-text">Nutrientes</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="app/fertilizantes/v.fertilizantes.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Gestión de fertilizantes</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="app/elementos/v.elementos.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Gestión de elementos</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>               
                 <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan active">
                    <i class="material-icons">map</i>
                    <span class="nav-text">SIG</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="app/nitrogeno/ciclo-nitrogeno.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Nitrógeno</span>
                        </a>
                      </li>                    
                      <li>
                        <a href="app/nitrogeno/mapping_ap.php#">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Mapping AP</span>
                        </a>
                      </li>                      
                    </ul>
                  </div>
                </li>  <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan active">
                    <i class="material-icons">track_changes</i>
                    <span class="nav-text">Monitoreos</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="app/analisis-suelo/v.analisis-suelos.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Crear Análisis de suelo</span>
                        </a>
                      </li>                    
                      <li>
                        <a href="app/analisis-suelo/v.analisis_suelo_get.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Panel Análisis de suelo</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="app/analisis-foliar/v.analisis-foliar.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Crear Análisis foliar</span>
                        </a>
                      </li>                      
                     <li class="">
                        <a href="app/analisis-foliar/v.analisis_foliar_get.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Panel Análisis foliar</span>
                        </a>
                      </li>                      
                    <li class="">
                        <a href="#">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Análisis de clorofila</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li> 
                  
                <li class="bold">
                  <a href="app/prog-cosechas/v.prog-cosechas.php" class="waves-effect waves-cyan">
                    <i class="material-icons">today</i>
                    <span class="nav-text">Prog de cosechas</span>
                  </a>
                </li>
                <li class="bold">
                  <a href="app/novedades/v.novedades.php" class="waves-effect waves-cyan">
                    <i class="material-icons">low_priority</i>
                    <span class="nav-text">Novedades</span>
                  </a>
                </li>
                <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">web</i>
                    <span class="nav-text">Plan de fertilización</span>
                  </a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li>
                        <a href="app/pf/v.pf.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Fertilización al suelo</span>
                        </a>
                      </li>                   
                     <li>
                        <a href="sol-nutritiva/v.sol_nutritiva.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Solución nutritiva</span>
                        </a>
                      </li>                  
                       <li>
                        <a href="#">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Visualizar</span>
                        </a>
                      </li>
     
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
              </ul>
            </li>
            <li class="li-hover">
              <p class="ultra-small margin more-text">MÁS</p>
            </li>
            <li>
              <a href="app/documentacion/documentacion.php" target="_blank">
                <i class="material-icons">import_contacts</i>
                <span class="nav-text">Documentación</span>
              </a>
            </li>
            <li>
              <a href="app/soporte/soporte.php" target="_blank">
                <i class="material-icons">help_outline</i>
                <span class="nav-text">Soporte</span>
              </a>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
           <div id="card-stats">
              <div class="row">
                <div class="col s12 m6 l3">
                  <div class="card">
                    <div class="card-content cyan white-text">
                      <p class="card-stats-title">
                        <i class="material-icons">person_outline</i> Agrícultores</p>
                      <h4 class="card-stats-number">566</h4>
                      <p class="card-stats-compare">
                        <i class="material-icons">keyboard_arrow_up</i> 15%
                        <span class="cyan text text-lighten-5">desde 2012</span>
                      </p>
                    </div>
                    <div class="card-action cyan darken-1">
                      <div id="clients-bar" class="center-align"></div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3">
                  <div class="card">
                    <div class="card-content red accent-2 white-text">
                      <p class="card-stats-title">
                        <i class="material-icons">attach_money</i>Total Ventas (Santander)</p>
                      <h4 class="card-stats-number">66.200 Ton</h4>
                      <p class="card-stats-compare">
                        <i class="material-icons">keyboard_arrow_up</i> 42%
                        <span class="red-text text-lighten-5">Producción del país</span>
                      </p>
                    </div>
                    <div class="card-action red darken-1">
                      <div id="sales-compositebar" class="center-align"></div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3">
                  <div class="card">
                    <div class="card-content teal accent-4 white-text">
                      <p class="card-stats-title">
                        <i class="material-icons">trending_up</i> Se Benefician</p>
                      <h4 class="card-stats-number">9.000 familias</h4>
                      <p class="card-stats-compare">
                        <i class="material-icons">keyboard_arrow_up</i> 15.000
                        <span class="teal-text text-lighten-5">Hectareas</span>
                      </p>
                    </div>
                    <div class="card-action teal darken-1">
                      <div id="profit-tristate" class="center-align"></div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3">
                  <div class="card">
                    <div class="card-content deep-orange accent-2 white-text">
                      <p class="card-stats-title">
                        <i class="material-icons">content_copy</i> Se facturan</p>
                      <h4 class="card-stats-number">$24 USD</h4>
                      <p class="card-stats-compare">
                        <i class="material-icons">keyboard_arrow_down</i> 130
                        <span class="deep-orange-text text-lighten-5">Fábricas en Vélez</span>
                      </p>
                    </div>
                    <div class="card-action  deep-orange darken-1">
                      <div id="invoice-line" class="center-align"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--card stats end-->
            <!--chart dashboard start-->
            <div class="row">
			  <div class="card-panel">
				<div id="chartcom1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
				</div>
			  </div>
            <!--chart dashboard end-->
            <!--work collections start-->
            <div id="work-collections">
              <div class="row">
                <div class="col s12 m12 l6">
                  <ul id="projects-collection" class="collection z-depth-1">
                    <li class="collection-item avatar">
                      <i class="material-icons cyan circle">card_travel</i>
                      <h6 class="collection-header m-0">Siembras en la finca</h6>
                      <p>Favoritos</p>
                    </li>
                    <?php 
                if(mysqli_num_rows($result) > 0)
                {
                 while($row = mysqli_fetch_array($result))
                 {
                  echo '
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s6">
                          <p class="collections-title">'.$row["Nombre_siembra"].'</p>
                          <p class="collections-content">No. plantas '.$row["N_plantas_siembra"].'</p>
                        </div>
                        <div class="col s3">
                          <span class="task-cat cyan">'.$row["Estado_siembra"].'</span>
                        </div>
                        <div class="col s3">
                          <div id="project-line-1"></div>
                        </div>
                      </div>
                    </li>
                  
                  ';
                 }
                }
                        ?>
                  </ul>
                </div>
                <div class="col s12 m12 l6">
                  <ul id="issues-collection" class="collection z-depth-1">
                    <li class="collection-item avatar">
                      <i class="material-icons red accent-2 circle">bug_report</i>
                      <h6 class="collection-header m-0">Cultivos más productivos en la finca</h6>
                      <p>Asignados por el administrador</p>
                    </li>
                                        <?php 
                if(mysqli_num_rows($result2) > 0)
                {
                 while($row2 = mysqli_fetch_array($result2))
                 {
                  echo '
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s7">
                          <p class="collections-title">
                            <strong>#'.$row2["cod_cultivo"].'</strong> '.$row2["Nombre_cultivo"].'</p>
                          <p class="collections-content">'.$row2["Variedad_cultivo"].'</p>
                        </div>
                        <div class="col s2">
                          <span class="task-cat deep-orange accent-2">'.$row2["Metodo_cultivo"].'</span>
                        </div>
                        <div class="col s3">
                          <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                  ';
                 }
                }
                        ?>
                  </ul>
                </div>
              </div>
            </div>
            <!--work collections end-->
            <!--card widgets start-->
            <div id="card-widgets">
              <div class="row">
                <div class="col s12 m4 l4">
                  <ul id="task-card" class="collection with-header">
                    <li class="collection-header teal accent-4">
                      <h4 class="task-card-title">Actividades</h4>
                      <p class="task-card-date">Feb 1, 2018</p>
                    </li>
                    <li class="collection-item dismissable">
                      <input type="checkbox" id="task1" checked="checked"/>
                      <label for="task1">Determinar el área de estudio.
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">15 Feb</span>
                        </a>
                      </label>
                      <span class="task-cat cyan">Finca Guillermo Parada</span>
                    </li>
                    <li class="collection-item dismissable">
                      <input type="checkbox" id="task2" checked="checked" />
                      <label for="task2">Levantamiento perimetral del área de estudio.
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">Mar 1</span>
                        </a>
                      </label>
                      <span class="task-cat red accent-2">1 HECT 408 arboles</span>
                    </li>
                    <li class="collection-item dismissable">
                      <input type="checkbox" id="task3" checked="checked" />
                      <label for="task3">Uso de sensores Ópticos y el Dron
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">Wednesday</span>
                        </a>
                      </label>
                      <span class="task-cat teal accent-4">Examinando el cultivo</span>
                    </li>                    
                    <li class="collection-item dismissable">
                      <input type="checkbox" id="task3" checked="checked" />
                      <label for="task3">Procesamiento de datos
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">Mayo</span>
                        </a>
                      </label>
                      <span class="task-cat teal accent-4">Sistematizando variables</span>
                    </li>
                  </ul>
                </div>
                <div class="col s12 m12 l4">
                  <div id="flight-card" class="card">
                    <div class="card-header deep-orange accent-2">
                      <div class="card-title">
                        <h5 class="flight-card-title">Georreferenciazión (GR3)</h5>
                        <p class="flight-card-date">Marzo 18, Thu 04:50</p>
                      </div>
                    </div>
                    <div class="card-content-bg white-text">
                      <div class="card-content">
                        <div class="row flight-state-wrapper">
                          <div class="col s5 m5 l5 center-align">
                            <div class="flight-state">
                              <h4 class="margin">GR3</h4>
                              <p class="ultra-small">Georreferenciador</p>
                            </div>
                          </div>
                          <div class="col s2 m2 l2 center-align">
                            <i class="material-icons">room</i>
                          </div>
                          <div class="col s5 m5 l5 center-align">
                            <div class="flight-state">
                              <h4 class="margin">CAP</h4>
                              <p class="ultra-small">Topografía C.G.A.O</p>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col s6 m6 l6 center-align">
                            <div class="flight-info">
                              <p class="small">
                                <span class="grey-text text-lighten-4">Unid Exper:</span> 4</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">No. Puntos :</span> 410</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">No. Arboles:</span> 408</p>
                            </div>
                          </div>
                          <div class="col s6 m6 l6 center-align flight-state-two">
                            <div class="flight-info">
                              <p class="small">
                                <span class="grey-text text-lighten-4">Finca:</span> Los Parada</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Vereda:</span>P. Blanca</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Z. Estudio:</span> 1 HECT</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m4 l4">
                  <div id="profile-card" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="images/gallary/34.png" alt="user bg">
                    </div>
                    <div class="card-content">
                      <img src="images/avatar/avatar-7.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                      <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                        <i class="material-icons">edit</i>
                      </a>
                      <span class="card-title activator grey-text text-darken-4">SENNOVA C.G.A.O</span>
                      <p>
                        <i class="material-icons">perm_identity</i> Manager de proyectos</p>
                      <p>
                        <i class="material-icons">perm_phone_msg</i> +57 (7) 75 63017</p>
                      <p>
                        <i class="material-icons">email</i> cegao@sena.edu.co</p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">SENA C.G.A.O
                        <i class="material-icons right">close</i>
                      </span>
                      <p>Información acerca de los administradores</p>
                      <p>
                        <i class="material-icons">perm_identity</i> SENNOVA</p>
                      <p>
                        <i class="material-icons">perm_phone_msg</i> +57 (7) 75 63017</p>
                      <p>
                        <i class="material-icons">email</i> cegao@sena.edu.co</p>
                      <p>
                        <i class="material-icons">cake</i> 18 Junio 1998
                      </p>
                      <p>
                      </p>
                      <p>
                        <i class="material-icons">face</i> Dr - Orlando Ariza Ariza
                      </p>
                      <p>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- blog card -->
                <div class="col s12 m12 l12 item">
					<div id="fertilizantes" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

                </div>
                
                
               
              </div>
            </div>
            <!--card widgets end-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- START RIGHT SIDEBAR NAV-->
        <!--<aside id="right-sidebar-nav">
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
                if(mysqli_num_rows($resultpersonas) > 0)
                {
                 while($rowpersonas = mysqli_fetch_array($resultpersonas))
                 {
                  echo '
                     <a href="#!" class="collection-item avatar border-none">
                      <img src="control/personas/fotos/'.$rowpersonas["Foto_persona"].'" alt="" class="circle cyan">
                      <span class="line-height-0">'.$rowpersonas["Nombre_persona"].'</span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">'.$rowpersonas["Cargo_persona"].'</p>
                    </a>
                  
                  ';
                 }
                }
                        ?>
                  </div>
                </div>
                <div id="activity" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">RECENT ACTIVITY</h6>
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
        </aside>-->
        <!-- END RIGHT SIDEBAR NAV-->
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
    <footer class="page-footer light-green">
      <div class="container">
        <div class="row section">
          <div class="col l12 s12 m12">
            <h5 class="white-text">Mapa de cultivos y fincas productoras</h5>
            <p class="grey-text text-lighten-4">Mapa de fincas, cultivos y fábricas en Vélez &#40;SANTANDER.&#41;</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d27364.572797810346!2d-73.68106870088032!3d5.956603555731311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8e41ef88f213a8b9%3A0x2535c93dd22e5fce!2sPena+Blanca%2C+V%C3%A9lez%2C+Santander!3m2!1d5.9583699999999995!2d-73.65724!5e1!3m2!1ses-419!2sco!4v1530910650550" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
 
        </div>
      </div>
      <div class="page-footer  light-green">
        <div class="footer-copyright">
          <div class="container">
            <span>Derechos ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-2" href="#" target="_blank">SENNOVA</a> Centro de Gestión Agroempresarial del Oriente.</span>
            <span class="right hide-on-small-only"> Diseño <a class="grey-text text-lighten-2" href="#">SENNOVA</a></span>
          </div>
        </div>
      </div>
    </footer>
    <!-- END FOOTER -->
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartjs -->
    <script type="text/javascript" src="vendors/temperatura/charts.js"></script>
    <script type="text/javascript" src="vendors/temperatura/datos.js"></script>
    <!-- sparkline -->
    <script type="text/javascript" src="vendors/sparkline/jquery.sparkline.min.js"></script>
    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>
    <!--jvectormap-->
    <script type="text/javascript" src="vendors/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="vendors/jvectormap/vectormap-script.js"></script>
    <!--google map-->
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--card-advanced.js - Page specific JS-->
    
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
      </div>
  </body>
    
</html>
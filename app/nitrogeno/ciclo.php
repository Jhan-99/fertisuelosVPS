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
    <title>Fertisuelos | Ciclo</title>
    <!-- Favicons-->
    <link rel="icon" href="../../images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="../../images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.html">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="../../css/themes/horizontal-menu/materialize.css" type="text/css" rel="stylesheet">
    <link href="../../css/themes/horizontal-menu/style.css" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="../../css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- CSS style Horizontal Nav-->
    <link href="../../css/layouts/style-horizontal.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../../vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="../../vendors/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet">
    <link href="../../vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  </head>
  <body id="layouts-horizontal">
    <!-- Start Page Loading -->
      <div id="loader"></div>
      <div class="main animate-bottom" style="display:none;">
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
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
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize" />
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
                    <small class="notification-badge orange accent-3">5</small>
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
        <!-- HORIZONTL NAV START-->
        <nav id="horizontal-nav" class="white hide-on-med-and-down">
          <div class="nav-wrapper">
            <ul id="ul-horizontal-nav" class="left hide-on-med-and-down">
              <li class="active">
                <a class="dropdown-menu active" href="#!" data-activates="Dashboarddropdown">
                  <i class="material-icons">dashboard</i>
                  <span>Dashboard
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Fincasdropdown">
                  <i class="material-icons">map</i>
                  <span>Fincas
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Nutrientesdropdown">
                  <i class="material-icons">grain</i>
                  <span>Nutrientes
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a href="../../app/prog-cosechas/v.prog-cosechas.php">
                  <i class="material-icons">today</i>
                  <span>Prog cosechas</span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Monitoreosdropdown">
                  <i class="material-icons">track_changes</i>
                  <span>Monitoreos
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="PlanfertilUIdropdown">
                  <i class="material-icons">web</i>
                  <span>Plan de fertilización
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="NitrogenoUIdropdown">
                  <i class="material-icons">compare</i>
                  <span>Nitrógeno
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
				</li>
 
            </ul>
          </div>
        </nav>
        <!-- Dashboarddropdown -->
        <ul id="Dashboarddropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="../../index.php">Index</a></li>
        </ul>
        <!-- Fincasdropdown -->
        <ul id="Fincasdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="../../app/fincas/v.fincas.php">Gestión de fincas</a></li>
          <li><a href="../../app/siembras/v.siembras.php">Gestión de siembras</a></li>
          <li><a href="../../app/cultivos/v.cultivos.php">Gestión de cultivos</a></li>         
        </ul>
        <!-- Nutrientesdropdown -->
        <ul id="Nutrientesdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="../../app/fertilizantes/v.fertilizantes.php">Gestión de fertilizantes</a></li>
          <li><a href="../../app/elementos/v.elementos.php">Gestión de elementos</a></li>
        </ul>
        <!-- Monitoreosdropdown -->
        <ul id="Monitoreosdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="../../app/analisis-suelo/v.analisis-suelos.php">Crear análisis de suelo</a></li>
          <li><a href="../../app/analisis-suelo/v.analisis_suelo_get.php">Panel análisis de suelo</a></li>
		  <li><a href="../../app/analisis-foliar/v.analisis-foliar.php">Crear análisis foliar</a></li>
		  <li><a href="../../app/analisis-foliar/v.analisis_foliar_get.php">Panel análisis foliar</a></li>
		  <li><a href="#">Análisis de clorófila</a></li>
        </ul>
        <!-- PlanfertilUIdropdown-->
        <ul id="PlanfertilUIdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="../../app/pf/v.pf.php">Generar nuevo</a></li>
          <li><a href="#">Visualizar</a></li>
        </ul>
        <!-- NitrogenoUIdropdown-->
        <ul id="NitrogenoUIdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="../../app/nitrogeno/ciclo-nitrogeno.php">Inicio ciclo</a></li>
          <li><a href="../../app/nitrogeno/ciclo.php">Ciclo</a></li>
        </ul>
 
      </div>
    </header>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        
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
                  <h5 class="breadcrumbs-title">Plan de fertilización</h5>
                  <ol class="breadcrumbs">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="#">Plan de fertilización</a></li>
                    <li class="active">Ciclo</li>
                  </ol>
                </div>
                <div class="col s2 m6 l6">
                <!--  <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn light-green right" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">Ajustes</i>
                    <span class="hide-on-small-onl">Settings</span>
                    <i class="material-icons right">arrow_drop_down</i>
                  </a> -->
                  <ul id="dropdown1" class="dropdown-content">
                    <li><a href="#!" class="grey-text text-darken-2">Access<span class="badge">1</span></a>
                    </li>
                    <li><a href="#!" class="grey-text text-darken-2">Profile<span class="new badge">2</span></a>
                    </li>
                    <li><a href="#!" class="grey-text text-darken-2">Notifications</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--breadcrumbs end-->
          <!--start container-->
          <div class="container">
            <div class="section">
              <!-- <p class="caption">En esta sección puedes visualizar el ciclo en la finca Los parada</p> -->
              <div class="divider"></div>
              <div id="full-calendar">
                <div class="row">
                  <div class="col s12 m12 l12">
             <iframe width="100%" height="800" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Estado inicial" src="http://arcgisonlinesena.maps.arcgis.com/apps/webappviewer/index.html?id=8ba1ca460a2c450a9497cd1edd2fe472"></iframe>
                  </div>
                </div>
              </div>
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
    <!--scrollbar-->
    <script type="text/javascript" src="../../vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartjs -->
    
    <!-- sparkline -->
    <script type="text/javascript" src="../../vendors/sparkline/jquery.sparkline.min.js"></script>
    <!-- google map api -->
    
    <!--jvectormap-->
    <script type="text/javascript" src="../../vendors/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="../../vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="../../vendors/jvectormap/vectormap-script.js"></script>
    <!--google map-->
    <script type="text/javascript" src="../../js/scripts/google-map-script.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../js/plugins.js"></script>
    <!--card-advanced.js - Page specific JS-->
    
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../js/custom-script.js"></script>
      </div>
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/horizontal-menu/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 13:53:22 GMT -->
</html>
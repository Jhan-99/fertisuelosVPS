<?php  include('fetch-head.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Fertil | plan de fertilización</title>
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
  <body>
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
        <?php include("../left-sidebar.php") ?>
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
                  <h5 class="breadcrumbs-title">Plan de fertilización</h5>
                  <ol class="breadcrumbs">
                    <li><a href="../../index.php">Dashboard</a></li>
                    <li><a href="#">Plan de fertilización</a></li>
                    <li class="active">Generar plan de fertilización</li>
                  </ol>
                </div>
                <div class="col s2 m6 l6">
                  <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn light-green right" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">settings</i>
                    <span class="hide-on-small-onl">Settings</span>
                    <i class="material-icons right">arrow_drop_down</i>
                  </a>
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
              <p class="caption">Este espacio te ayudará a generar un plan de fertilización para tus cultivos.</p>
              <div class="divider"></div>
              <!--DataTables example-->
              <div id="table-datatables">
                <h4 class="header">Inicio</h4>
                <div class="row">
                  <div class="col s12">
                     <!--INICIO TABS PARA LA ESTRUCTURA DEL ANÁLISIS DE SUELO -->
                      <div id="fixed-width-tab" class="section">
              <div class="row">
                <div class="col s12 l12 m12">
                  <div class="row">
                    <div class="col s12">
                      <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
                        <li class="tab"><a class="active" href="#dg">Datos generales</a></li>
                        <li id="anfolobj" style="display:none;" class="tab"><a href="#anfo">Análisis foliar</a></li>
                        <li id="ansuelobj" style="display:none;" class="tab disabled"><a href="#ansuel">Análisis de suelo</a></li>       
						<li id="obj_img_espectral" style="display:none;" class="tab"><a href="#img_espect">Análisis multiespectral</a></li>
                        <li id="consolidado" class="tab consolidado fertilizacion disabled"><a href="#consol">Recomendaciones</a></li>
                        <li class="indicator" style="right: 434px; left: 128px;"></li>
                      </ul>
                    </div>
                    <div class="col s12">
        <div id="dg" class="col s12">
     <input type="hidden" id="cod_pf" value="<?php  echo(mt_rand()); ?>">
        <div class="row">
        <form class="col s12"><br>   
			
         <div class="card-panel white">
			 
			 				<div class="row">
							<div class="col s12 m12 l4">
							<label style="font-size:14px"><b></b>Selecciona una siembra</label>
							<select class="browser-default" name="Siembra_id" id="Siembra_id">
								 <?php echo obtener_siembras($conexion); ?>
							 </select>
								<input type="hidden" name="Val cultivo" value="" id="id_cul">
							</div>
								<div class="" id="mostrar_detsiembra">  
								  <?php echo obtener_carac_siembras($conexion);?>  
								</div>
						</div>
			 
		 <div class="row">
            <div class="input-field col s12 m12 l6">
              <i class="material-icons prefix">info_outline</i>
              <input id="Nombre_programa" type="text" class="validate">
              <label for="Nombre_programa">Nombre del plan de fertilización <b class="red-text">*</b></label>
              </div>
			 
                  <!-- Modal Trigger -->
             <div class="browser-default col  s12 m12 l2">
                    <label class="active" for="ana_foliar">Análisis foliar</label>
                 <select name="ana_foliar" id="ana_foliar" class="activate">
					<option value="Si">Si</option>
                    <option value="No">No</option>
                  </select> 
              </div>                
            <div class="browser-default col  s12 m12 l2">
                    <label class="active" for="ana_suelo">Análisis suelo</label>
                 <select name="ana_suelo" id="ana_suelo" class="activate selec_control">
					<option value="Si">Si</option>
                    <option value="No">No</option>
                  </select> 
              </div>             
			
			 <div class="browser-default col  s12 m12 l2">
                    <label class="active" for="img_espectral">Análisis multiespectral</label>
                 <select name="img_espectral" id="img_espectral" class="activate">
					<option value="Si">Si</option>
                    <option value="No">No</option>
                  </select> 
              </div>   
      
          </div>  
			 
			 <!--COLLAPSIBLE REQUERIMIENTOS NUTRICIONALES-->
			 	<h5 id="titureqs" class="center grey-text">Requerimientos nutricionales</h5><br>
			 	<div id="req_nutricional_culti"></div><br>
                <h5 id="titureqs" class="center grey-text">Requerimientos nutricionales: Estado fenológico</h5><br>
			 	<div id="reqs_estado_fenolog"></div><!--cargar requerimientos nutricionales según estado fenológico-->
			 	<div style="display:none;" id="req_nutricional_culti_inputs"></div>
					<br><br>
                    </div>          
               
      
            <div class="row">
                <div class="input-field col s10" id="mostrar_finca_descrip">
            <!--Este espacio se carga el request del Selec "Finca" para cargar la descripcion de la finca-->
                </div>   
                </div>
                <div align="center">
                    
 				</div>
            <br>
            <span class="green-text" id="msg_exito_ana"></span><!--CONTROLADOR DE RESPUESTAS [EXITO]-->
            <span class="red-text" id="msg_error_ana"></span> <!--CONTROLADOR DE RESPUESTAS  [ERROR]-->
              </form>   
      
          </div>  
                          
                      </div>
                <div id="anfo" class="col s12">
				<div class="card-panel white">
					<label>Escoge una análisis foliar</label>
					<select class="asing_anafol ver_datos_anafols" id="anafoliardata"></select>
			 	</div>		
				<div style="" id="anafoliardetalles_cabecera" class="card-panel white"></div>	<br>
				<div style="display:none;" id="anafoliardetalles" class="card-panel white"></div>	<br>
                </div>         
				<div id="ansuel" class="col s12">
				<div class="card-panel white">
					<label>Escoge una análisis de suelo</label>
					<select class="asing_anasuel ver_datos_anasuels" id="anasuelodata"></select>
				</div>
			 <div id="anasuelodetalles_cabecera" class="card-panel white"></div>	<br>
			 <div id="anasuelodetalles_varsuelos" class="card-panel white"></div>	<br>
			 <div style="display:none;" id="anasuelodetalles" class="card-panel white"></div>	<br>
 
					
                </div>
				
				<div id="img_espect" class="col s12">
                    <br><br>
                    <a id="" class="waves-effect waves-light btn center  modal-trigger ver_mapa_momentos" href="#mapa_momentos">Ver mapa para el momento</a><br>
				<div class="" style="overflow-x:scroll;">  
				<h5 align="center">Matriz de datos nitrógeno</h5><br />
				<span id="result"></span>
				<div style="height:400px" id="live_data"></div>  
                        
                    </div>  
                <div class="row">
                      <!-- Modal Structure -->
                      <div id="mapa_momentos" class="modal" style="width:85%" height="80%">
                        <div class="modal-content">
                    <div class="row">
                    <div class="col s12 l6 m12">
                    <iframe id="estado_mapa1" width="100%" height="500px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Estado inicial" src=""></iframe>
                    <a id="ampliarmapa1" target="_blank" class="waves-effect waves-teal btn-flat"><i class="material-icons right orange-text">open_in_new</i>Ampliar</a>
                    <a id="reloadmap1" class="waves-effect btn-flat"><i class="material-icons right blue-text">sync</i>Recargar</a><br>
                    </div>
                    <div class="col s12 l6 m12">
                       <iframe id="estado_mapa2" width="100%" height="500px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Estado inicial" src=""></iframe>
                    </div>
                    <a id="ampliarmapa2" target="_blank" class="waves-effect waves-teal btn-flat"><i class="material-icons right orange-text">open_in_new</i>Ampliar</a>
                    <a id="reloadmap2" class="waves-effect btn-flat"><i class="material-icons right blue-text">sync</i>Recargar</a><br>
                        </div><br>
                <div class="row">            
                    <div class="col s12 l6 m12">
                       <iframe id="estado_mapa3" width="100%" height="500px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Estado inicial" src=""></iframe>
                    <a id="ampliarmapa3" target="_blank" class="waves-effect waves-teal btn-flat"><i class="material-icons right orange-text">open_in_new</i>Ampliar</a>
                    <a id="reloadmap3" class="waves-effect btn-flat"><i class="material-icons right blue-text">sync</i>Recargar</a><br>
                    </div>
                    <div class="col s12 l6 m12">
                    <iframe id="estado_mapa4" width="100%" height="500px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Estado inicial" src=""></iframe>
                    </div>
                          </div>  

                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-close waves-effect waves-green btn-flat red-text">X</a>
                        </div>
                      </div>
                    

                    
                    </div>
                    
				</div>
                      <div id="consol" class="col s12"><br><br>
                          <div class="card-panel">
                          
						  <div class="chip" id="inform_cul">
							<img src="../../images/avatar/grow.png" alt="Contact Person">
							Para siembra de: Los requerimientos nutricionales son los siguientes.
						  </div><br>
                              
						  <div id="req_nutricional_cult"></div><br>
						  <div style="display:none;" id="vals_reqs_cultivo"></div><br>
						  <div id="chartjs-bar-chart" class="section">
							<h5 class="header center">Balance de los requerimientos nutricionales del cultivo por ciclo productivo.</h5>
                          </div>
                              <!--requerimientos nutricionales-->
                        <div class="row">				  
							<div class="col l12">
								<div class="chart-container" style="position: relative;">
									<canvas id="elements_chart" width="800" height="250"></canvas>
								  </div><br>
 								</div>	
                       						     <div class="col l12">
								<div align="center">
								<h6 class="center chip teal darken-4 re_consoltxt white-text">Requerimientos nutricionales para cultivo de:.</h6><br>
								</div>
									<div align="center">
								<p class="chip  green lighten-2 white-text" id="val_nitro">N</p>
								<p class="chip  green lighten-2 white-text" id="val_fosfo">P</p>
								<p class="chip  green lighten-2 white-text" id="val_pota">K</p>
								<p class="chip  green lighten-2 white-text" id="val_mag">Mg</p>
								<p class="chip  green lighten-2 white-text" id="val_cal">Ca</p>
								<p class="chip  green lighten-2 white-text" id="val_azu">S</p>
								<p class="chip  green lighten-2 white-text" id="val_bor">B</p>
								<p class="chip  green lighten-2 white-text" id="val_zinc">Zn</p>
								<p class="chip  green lighten-2 white-text" id="val_cobr">Cu</p>
								<p class="chip  green lighten-2 white-text" id="val_hierr">Fe</p>
									</div>
								</div>
                            </div> <!--requerimientos nutricionales-->
                              
                              
                              <!--Iniciocontenedor de los momentos-->   
                          <div class="row">
                            <div class="col l12 s12 m12"> 
                            <div class="card-panel" id="momento1" style="display:none;">
                            <div id="">
								<div class="chart-container" style="position: relative;">
									<canvas id="elements_momento1" width="800" height="150"></canvas>
								  </div><br>
                                  <table >
                                    <thead>
                                      <tr>
                                          <th>N</th><th>P</th><th>K</th><th>Mg</th><th>Ca</th><th>B</th><th>Zn</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>45</td><td>15</td><td>100</td><td>6.6</td><td>3.3</td><td>0.7</td><td>1</td>
                                      </tr>
                                    </tbody>
                                  </table>
 								</div>   
                                </div>
                                <div class="card-panel" id="momento2" style="display:none;">
                                <div id="">
								<div class="chart-container" style="position: relative;">
									<canvas id="elements_momento2" width="800" height="150"></canvas>
								  </div><br>
                                    <table style="font-size:11px;">
                                    <thead>
                                      <tr>
                                          <th>N</th><th>P</th><th>K</th><th>Mg</th><th>Ca</th><th>B</th><th>Zn</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>45</td><td>30</td><td>50</td><td>6.6</td><td>3.3</td><td>0.7</td><td>1</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                </div>
                            <div class="card-panel" id="momento3" style="display:none;">
                             <div id="">
								<div class="chart-container" style="position: relative;">
									<canvas id="elements_momento3" width="800" height="150"></canvas>
								  </div><br>
                                    <table style="font-size:11px;">
                                    <thead>
                                      <tr>
                                          <th>N</th><th>P</th><th>K</th><th>Mg</th><th>Ca</th><th>B</th><th>Zn</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>90</td><td>15</td><td>50</td><td>6.6</td><td>3.3</td><td>0.7</td><td>1</td>
                                      </tr>
                                    </tbody>
                                  </table>
 								</div>
                                </div>
                                </div>
                              </div>
                          <!--Fincontenedor de los momentos--> 
                              <div class="row"><!-- fin principal recomendaciones inicio-->
                                <div class="col l6 m12 s12">    
                                    <ul class="collection with-header" style="font-size:12px">
                                    <li class="collection-header"><h6><b>Relación con análisis de suelo</b></h6></li>
                                    <li class="collection-item" id="recomen_x_momento_n">-</li>
                                        <input type="text" id="rec_x_mom_n" style="display:none;">
                                    <li class="collection-item" id="recomen_x_momento_p">-</li>
                                        <input type="text" id="rec_x_mom_p" style="display:none;">
                                    <li class="collection-item" id="recomen_x_momento_k">-</li>
                                        <input type="text" id="rec_x_mom_k" style="display:none;">
                                    <li class="collection-item" id="recomen_x_momento_mg">-</li>
                                     <input type="text" id="rec_x_mom_mg" style="display:none;">
                                    <li class="collection-item" id="recomen_x_momento_ca">-</li>
                                        <input type="text" id="rec_x_mom_ca" style="display:none;">
                                    <li class="collection-item" id="recomen_x_momento_b">-</li>
                                        <input type="text" id="rec_x_mom_b" style="display:none;">
                                    <li class="collection-item" id="recomen_x_momento_zn">-</li>
                                        <input type="text" id="rec_x_mom_zn" style="display:none;">
                                  </ul>
                                    </div><!-- finde la recomenacion por planta-->
                                  
                                  <!-- inicio de la recomendacion por fertilizante-->
                                  <div class="col l6 m12 s12" >
                                <ul class="collection with-header" style="font-size:12px">
                    <li class="collection-header" style="font-size:14px"><h6><b>Selecciona el fertilizante</b><a href="#select-fertilizantes" class="btn-floating btn-large waves-effect waves-light red right modal-trigger"><i class="material-icons">add</i></a></h6></li>
                    <li class="collection-item" id="fer_xn">Para (N)
              <form action="#" id="form_nitro">
                     <p>
                      <input class="with-gap" name="group1" type="radio" id="ure46" value="46"/>
                      <label for="ure46">Urea</label>
                     <input class="with-gap" name="group1" type="radio" id="tri15_n" value="15" />
                      <label for="tri15_n">Triple 15</label>
                    <input class="with-gap" name="group1" type="radio" id="tri18_n" value="18"/>
                      <label for="tri18_n">Triple 18</label>
                    </p>   
              </form>
             <h6 class="grey-text" id="fertil_nitrogeno"></h6>                   
                    </li>
                                     
   
            <li class="collection-item" id="fer_xp">Para (P)
                <form action="#" id="form_fosforo">
                    
                     <p>
                      <input class="with-gap dap" name="group2" type="radio" id="dap" value="48"/>
                      <label for="dap">DAP</label>
                        <input class="with-gap" name="group2" type="radio" id="tri15p" value="15" />
                      <label for="tri15p">Triple 15</label>
                        <input class="with-gap" name="group2" type="radio" id="p103010" value="30"/>
                      <label for="p103010">10-30-10</label>
                    </p>     
              </form>                     
                  <h6 class="grey-text" id="fertil_fosforo"></h6>                   
                </li>
            <li class="collection-item" id="fer_xk">Para (K)
                    <form action="#" id="form_potasio">
                     <p>
                      <input class="with-gap dap" name="group3" type="radio" id="kcl_k" value="60"/>
                      <label for="kcl_k">KCL</label>
                        <input class="with-gap" name="group3" type="radio" id="sulfa_pota_k" value="50" />
                      <label for="sulfa_pota_k">Sulfato de potasio</label> 
                        <input class="with-gap" name="group3" type="radio" id="nitra_pota_k" value="44" />
                      <label for="nitra_pota_k">Nitrato de potasio</label>
    
                    </p>     
              </form>                     
                  <h6 class="grey-text" id="fertil_potasio"></h6>                         
            </li>
            <li class="collection-item" id="fer_xmg">Para (Mg)
                    <form action="#" id="form_magnesio">
                     <p>
                      <input class="with-gap dap" name="group4" type="radio" id="nitromag_mg" value="7.5"/>
                      <label for="nitromag_mg">Nitromag</label>
                        <input class="with-gap" name="group4" type="radio" id="microman_mg" value="20" />
                      <label for="microman_mg">Microman</label> 
                        <input class="with-gap" name="group4" type="radio" id="micromagnesio_mg" value="40" />
                      <label for="micromagnesio_mg">Micromagnesio</label>
    
                    </p>     
              </form>                     
                  <h6 class="grey-text" id="fertil_magnesio"></h6>   
                </li>
            <li class="collection-item" id="fer_xca">Para (Ca) 
                <form action="#" id="form_calcio">
                     <p>
                      <input class="with-gap" name="group5" type="radio" id="nitrabor_ca" value="18"/>
                      <label for="nitrabor_ca">Nitrabor</label>
                        <input class="with-gap" name="group5" type="radio" id="nitrato_ca" value="26" />
                      <label for="nitrato_ca">Nitrato de Ca</label> 
                    </p>     
              </form>                     
                  <h6 class="grey-text" id="fertil_calcio"></h6>             
                                    
                        </li>
            <li class="collection-item" id="fer_xbo">Para (B)
                <form action="#" id="form_boro">
                     <p>
                      <input class="with-gap" name="group6" type="radio" id="boro_gran" value="10"/>
                      <label for="boro_gran">Boro Granulado</label>
                      
                    </p>     
              </form>                        
                <h6 class="grey-text" id="fertil_boro"></h6>
                                </li>
            <li class="collection-item" id="fer_xzn">Para (Zn)
                <form action="#" id="form_zinc">
                     <p>
                      <input class="with-gap" name="group7" type="radio" id="micro_zinc_z" value="22"/>
                      <label for="micro_zinc_z">MicroZinc</label>
                      
                    </p>     
              </form>                        
                <h6 class="grey-text" id="fertil_zinc"></h6>    
                                </li>
                                     
                                  </ul>
                                    </div>
                                  <!-- fin de la recomendacion por fertilizante-->
                              
                                </div><!-- fin principal recomendaciones inicio-->
                              
                              
                              
                    </div><!--fin de la card- panel-->
                          
       
								</div><br>
							  <div class="divider"></div><br>
							
								  
							</div>
						  </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                     <!--FIN TABS PARA LA ESTRUCTURA DEL ANÁLISIS DE SUELO -->
                  </div>
                </div>
              
              <br>
              <div class="divider"></div>
                <!-- Modal para seleccionar los fertilizantes -->
              <div id="select-fertilizantes" class="modal">
                <div class="modal-content white">
                  <h5 class="grey-text">Lista de fertilizantes con su aporte nutricional</h5><br>
                    
                        <div class="row">
                            <div class="col s12 l12 m12">
                            
                            </div>
                       
                        </div>
          
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                </div>
              </div>
              
            
            <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
              <a class="btn-floating btn-large red siguiente_pf">
                <i class="material-icons">arrow_forward</i>
              </a>
            </div>
            <!-- Floating Action Button -->
          
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
     <!-- Modal Structure -->
				  <div id="modal_detalle_fertilizante" class="modal bottom-sheet" style="height:40%">
					  <div align="right">
						 <a href="#!" class="modal-close waves-effect waves-green btn-flat red-text">X</a>
					  </div>
					  <div class="modal-content" id="detalle_fer"></div>
				  </div>
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
                  <h6 class="mt-5 mb-3 ml-3">RECENT ACTIVITY</h6>
                  <div class="activity">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="deep-purple-text medium-small">just now</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="cyan-text medium-small">Yesterday</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="green-text medium-small">5 Days Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="amber-text medium-small">1 Week Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
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
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color brown lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="brown-text medium-small">1 Month Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color deep-purple lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="grey-text medium-small">1 Year Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
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
      <!--INICIO MODAL PARA ELEGIR LOS FERTILIZANTES PARA EL PLAN DE FERTILIZACIÓN-->
 
      <!--FIN MODAL PARA ELEGIR LOS FERTILIZANTES PARA EL PLAN DE FERTILIZACIÓN-->
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
	<!-- chartjs -->
    <script type="text/javascript" src="../../vendors/chartjs/Chart-2.7.min.js"></script>
	<!-- <script src = "../../vendors/highcharts/highcharts.js"></script> -->
	<!-- <script src = "../../vendors/highcharts/export-data.js"></script> -->
	<!-- <script src = "../../vendors/highcharts/exporting.js"></script> -->
	<!-- <script src = "../../js/scripts/charts-highcharts.js"></script> -->
    <!-- data-tables -->
    <script src="../../vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <!-- plugins.js - Some Specific JS codes for Plugin Settings -->
    <script type="text/javascript" src="../../js/plugins.js"></script>
    <!-- inicialización de JQueries-->
    <script type="text/javascript" src="../../js/inicializadores-materialize.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../js/custom-script.js"></script>
    <!--Modelo del plan de fertilización-->
    <script src="../../model/m.plan_fertilizacion/m.plan_fertilizacion.js"></script> 
    <script src="../../model/m.plan_fertilizacion/m.matriz_datos_nitrogeno.js"></script> 

    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../../js/scripts/data-tables.js"></script>
    </div>
  </body>
</html>
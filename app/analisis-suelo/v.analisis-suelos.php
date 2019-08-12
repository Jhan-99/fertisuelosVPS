<?php
include('fetch-head.php');
include('../fetchs.php');
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
    <title>Fertil | Creación de análisis de suelos</title>
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
                  <h5 class="breadcrumbs-title">Crear nuevo análisis de suelos</h5>
                  <ol class="breadcrumbs">
                    <li><a href="../../index.php">Dashboard</a></li>
                    <li><a href="#">Estudio de campo</a></li>
                    <li class="active">Análisis de suelo</li>
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
                <!--INICIO ELEMENTOS PARA LA CREACIÓN DE ANÁLISIS DE SUELO-->
                    <!--Código carga el análisis de suelo-->
         <input type="hidden" id="codcab" value="<?php  echo (mt_rand()); ?>">
          <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
            <li class="tab col s3 m3 l3 active"><a href="#info_inicial">Infomación inicial</a></li>
            <li id="vars_s" class="tab col s3 m3 l3 disabled"><a  href="#vars_sign">Variables significativas</a></li>
            <li id="el" class="tab col s3 m3 l3 disabled"><a  href="#elementos">Elementos</a></li>
            <li id="grafic" class="tab col s3 m3 l3 disabled"><a  href="#grafico_analisis">Grafico</a></li>
            </ul>
            <div id="info_inicial" class="col s12"><!--Recoleción de infomación de la cabecera{-->
                <div class="container" style="width:96%"><!--CONTAINER DE LA CABECERA [INICIO]-->
             <div class="row"><!--FILA GENERAL [INICIO]-->
        <form class="col s12"><br>
          <div class="row">
            <div class="input-field col s12 m6 l4">
              <i class="material-icons prefix">info_outline</i>
              <input id="Nombre_programa" type="text" class="validate" value="">
              <label for="Nombre_programa">Nombre del programa <b class="red-text">*</b></label>
              </div>
              
              <div class="input-field col s12 m6 l4">
              <i class="material-icons prefix">person</i>
              <input id="Propietario" type="text" class="validate">
              <label id="lbpropietarios" for="Propietario">Propietario <b class="red-text">*</b></label>
            </div>
                  <!-- Modal Trigger -->
            <div class="input-field col s12 m12 l4">
              <i class="material-icons prefix">directions_walk</i>
              <input id="Asistente_tecnico" type="text" class="validate">
              <label for="Asistente_tecnico">Asistente técnico</label>
            </div>      
      
          </div>   
        
            <div class="row">
              <div class="input-field col s12 m5 l5">
              <input type="text" id="Fecha_muestreo" name="Fecha_muestreo" class="datepicker">
              <label for="Fecha_muestreo">Fecha muestreo</label>
            </div> 
            <div class="input-field col s12 m5 l5">
                <input type="text" id="Fecha_recepcion" name="Fecha_recepcion" class="datepicker">
              <label for="Fecha_recepcion">Fecha Recepción</label>
            </div>    
                
            <div class="browser-default col s12 m2 l2">
                <label for="Fecha_recepcion">Zona</label>
                <select class="" name="No_zona" id="No_zona">
                    <option value="1">Bloque 1</option>
                    <option value="2">Bloque 2</option>
                    <option value="3">Bloque 3</option>
                    <option value="4">Bloque 4</option>
                 </select>
            </div>
              </div>        
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
            <div style="display:none;" class="col s12 m12 l12"><div id="carga_req_nutricionales_siembra"></div></div> <!--Por el momento no necesito verlos-->
            <div class="row">
             <div class="col s12 m4 l4">
                 <label class="active" for="Departamento">Departamento</label>
                 <select name="Departamento" id="Departamento" class="browser-default activate selec_control">
                    <option value="" disabled selected>Elige un departamento</option>
                       <?php echo $Departamento; ?>
                  </select> 
              </div>       
               <div class="col s12 m4 l4">
                  <label>Municipio</label>
				  <select name="Municipio" id="Municipio" class="browser-default form-control  selec_control">
                  <option value="" disabled selected>Elige un municipio</option>
                  </select> 
              </div>            
            <div class="col s12 m4 l4">
                    <label>Finca</label>
                <select name="Finca" id="Finca" class=" browser-default validate">
                    <option value="" disabled selected>Elige una finca</option>
                  </select><br>
                    <a class="waves-effect waves-light green-text">
                    <i class="material-icons right">room</i>¿No se encuentra tu finca?</a>  
         
              </div> 
                 </div>       
            <div class="row">
                <div class="input-field col s12 l12 m12" id="mostrar_finca_descrip">
            <!--Este espacio se carga el request del Selec "Finca" para cargar la descripcion de la finca-->
                </div>   
                </div>
         <button type="button" name="g_cabecera" id="cabecera_control" class="waves-light btn  green right g_cabecera"  value="Guardar y Continuar">Guardar y Continuar</button>
            <br>
            <span class="green-text" id="msg_exito_ana"></span><!--CONTROLADOR DE RESPUESTAS [EXITO]-->
            <span class="red-text" id="msg_error_ana"></span> <!--CONTROLADOR DE RESPUESTAS  [ERROR]-->
              </form><!-- Aquí termina el primer formulario de la cabecera-->
              <div id="load_tweets"></div>
                </div><!--FILA GENERAL [FIN]-->
                </div>
          
                    </div><!-- Cabecera fin }-->
                <div id="vars_sign" class="col s12">
                                              <!--LA RECOLECCIÓN DE DATOS DEL ANÁLISIS DE SUELO [INICIO]{ -->
             <div class="container" style="width:96%">     
        <div class="row col s12"><br>
			<div class="card-panel">
			<div class="chip cyan white-text">
                Elige la textura del suelo
              </div>
                    <div class="browser-default">
                    <select class="" name="textura" id="textura">
                    <option t_suelo="1.0" value="Arenoso">Arenoso</option> 
                    <option t_suelo="2.0" value="Arenoso franco">Arenoso franco</option> 
                    <option t_suelo="2.0" value="Franco arenoso">Franco arenoso</option> 
                    <option t_suelo="2.0" value="Franco">Franco</option> 
                    <option t_suelo="2.0" value="Franco limoso">Franco limoso</option> 
                    <option t_suelo="2.0" value="Franco arcilloso arenoso">Franco arcilloso arenoso</option> 
                    <option t_suelo="2.0" value="Franco arcilloso">Franco arcilloso</option> 
                    <option t_suelo="2.0" value="Franco arcillo limoso">Franco arcillo limoso</option> 
                    <option t_suelo="2.6" value="Arcillo arenoso">Arcillo arenoso</option> 
                    <option t_suelo="2.6" value="Arcillo limoso">Arcillo limoso</option> 
                    <option t_suelo="2.6" value="Arcilloso">Arcilloso</option>     
                    </select>
                    </div><br><br>
			  <div class="chip">
                Agrega las variables más significativas del suelo
              </div><br><br>
			<div class="row">
				<div class="col s12 m6 l4">
				<label>PH &#40; % &#41;</label>
				<input type="text" id="ph" name="ph">
				<span class="teal chip white-text" id="inter_ph"></span>
				</div>
				<div class="col s12 m6 l2">
				<label>C.E &#40;ds.m -1&#41;</label>
				<input type="text" id="ce" name="ce">
			    <span class="orange chip white-text" id="inter_ce"></span>
				</div>
				<!-- -->
				<div class="col s12 m6 l2">
				<label>C.I.C.E  &#40;cmol kg -1&#41;</label>
				<input type="text" id="cice" name="cice">
				<span class="purple darken-4 chip white-text" id="inter_cice">0.0</span>
				</div>
			
			<div class="col s12 m6 l2">
				<label>Salinidad &#40;ppm&#41;</label>
				<input type="text" id="salinidad" name="salinidad">
				<span class="light-green darken-3 chip white-text" id="inter_sal">0.0</span>
				</div>			
			
				<div class="col s12 m4 l2">
				<label>Densidad &#40;g/cc&#41;</label>
				<input type="text" id="densidad_aparn" name="densidad_aparn">
				<span class="brown darken-4 chip white-text" id="inter_densidad_aparn">0.0</span>
				</div>
 
			</div>
        </div>
                    <br>
                <span class="green-text" id="msg_exito_paso2"></span><!--CONTROLADOR DE RESPUESTAS [EXITO]-->
                <span class="red-text" id="msg_error_paso2"></span> <!--CONTROLADOR DE RESPUESTAS  [ERROR]-->
             <button type="button" id="variables_control"
			 class="waves-light btn green right g_vars_sign">Guardar</button>
        
            
                        </div>
                        
                                </div>
                                    <!-- ANALISIS DE SUELO }-->
                    </div>
                <div id="elementos" class="col s12">
                <div class="container" style="width:95%"><!-- CONTENEDOR DEL ANÁLISIS DE SUELO-->
                <div class="card-panel white" id="body_elementos">      
        <div class="row">
            <br>
              <div class="chip">
                Agrega los nutrientes a tu análisis de suelo
              </div>
                 <div class="divider"></div> 
            <br>
                            <h5 class="center">Calculo del nitrógeno</h5><br>
                                         <div class="col l2 s12 m3">
										<label>M.O/C.OR</label>
                                            <select class="browser-default" name="co_o_mo" id="co_o_mo">
                                                <option value="mo">M.O</option>
                                                <option value="co">C.O</option>
                                             </select>
										  <label>Clima</label>
                                            <select class="browser-default" name="tipo_clima" id="tipo_clima">
                                                <option value="clma_frio">Frio</option>
                                                <option value="clma_medio">Medio</option>
                                                <option value="clma_calido">Calido</option>
                                            </select>
                                            </div>
                                    <div class="col l2 s12 m3">
										<label>M.O/C.OR /Dato</label>
										<input  type="text" id="nitro" name="nitro">
										  </div>
                                    <div class="col l8 s12 m3">
										<span class="teal-text chip" id="inter_nitrogeno">Est:</span>
										<span class="chip red-text" id="nitro_total">N.Total</span>
										<span class="chip orange-text" id="nitro_dispon">N.Disp</span>
										<span class="chip purple-text" id="nitro_suelo_ppm">N.ppm</span>
										<span class="chip green-text" id="nitro_suelo">N.Suelo</span>
										<span class="chip black-text" id="nitro_aprovechable">N.Apro</span>
										<span class="chip blue-text" id="n_necesidad">NF</span>
										<span class="chip black-text" id="cant_aplicar_planta">Cant. Apli x planta: </span>
                                     </div>
							</div>
                                 <div class="row">
									<div class="col s12 m5 l3">
									  <div class="card-panel">
										  <span><b>Fosforo</b> &#40;Bray II - ppm&#41;</span>
									<input type="text" id="fosforo" name="fosforo">
                                    <span class="cyan-text"id="inter_fosforo">Est:</span><br>
                                    <span class="red-text"id="p_suelo">P.Suelo:</span><br>
                                    <span class="green-text"id="p_asimilable">P.Asimi:</span><br>
                                    <span class="amber-text"id="p_aprovechable">P.Apro:</span><br>
                                    <span class="teal-text"id="p_necesidad">NF.P:</span><br>
									  </div>
									</div>						
								<div class="col s12 m5 l3">
									  <div class="card-panel">
										  <span><b>Calcio</b> &#40;cmol kg&#41;</span>
										  	<input type="text" id="calcio" name="calcio">
										  <span class="cyan-text" id="inter_calcio"></span><br>
										  <span class="red-text" id="ca_suelo"></span><br>
										  <span class="green-text" id="ca_aprovechable"></span><br>
										  <span class="amber-text" id="ca_necesidad"></span>
									  </div>
									</div>						
									<div class="col s12 m5 l3">
									  <div class="card-panel">
										  <span><b>Magnesio</b> &#40;cmol kg&#41;</span>
										  	<input type="text" id="magnecio" name="magnecio">
										  <span class="cyan-text" id="inter_magnecio"></span><br>
										  <span class="red-text" id="mg_suelo"></span><br>
										  <span class="green-text" id="mg_aprovechable"></span><br>
										  <span class="teal-text" id="mg_necesidad"></span>
									  </div>
									</div>					
								<div class="col s12 m5 l3">
									  <div class="card-panel">
										  <span><b>Potasio</b> &#40;cmol kg&#41;</span>
										  	<input type="text" id="potasio" name="potasio">
										  <td><span id="inter_potasio"></span><br>
										  <td><span class="red-text" id="k_suelo"></span><br>
										  <td><span class="green-text" id="k_asimilable"></span><br>
										  <td><span class="teal-text" id="k_aprovechable"></span><br>
										  <td><span class="purple-text" id="k_necesidad"></span><br>
									  </div>
									</div>
									 
								  </div>
			                          <div class="row">
									<div class="col s12 m5 l3">
									  <div class="card-panel">
										  <span><b>Sodio</b> &#40;cmol kg&#41;</span>
										  <input type="text" id="sodio" name="sodio">
                                          <span id="inter_sodio"></span><br>
                                          <span class="purple-text" id="na_suelo"></span><br>
									  	</div>
										</div>
									<div class="col s12 m5 l3">
									  <div class="card-panel">
										  <span><b>Azufre</b> &#40;ppm&#41;</span>
										  <input type="text" id="azufre" name="azufre">
                                          <td><span class="cyan-text" id="inter_azufre"></span><br>
										  <span class="green-text"id="s_suelo">S.Suelo:</span><br>
                                    	  <span class="amber-text"id="s_aprovechable">S.Apro:</span><br>
                                    	  <span class="teal-text"id="s_necesidad">NF.S:</span><br>
									  	</div>
										</div>					
									<div class="col s12 m5 l3">
									  <div class="card-panel">
										  <span><b>Manganeso</b> &#40;ppm&#41;</span>
										  <input type="text" id="manganeso" name="manganeso">
                                          <td><span class="cyan-text" id="inter_manganeso"></span><br>
                                          <td><span class="red-text" id="mn_suelo"></span><br>
                                          <td><span class="orange-text" id="mn_aprovechable"></span><br>
                                          <td><span class="teal-text" id="mn_necesidad"></span><br>
									  	</div>
										</div>				
									<div class="col s12 m5 l3">
									  <div class="card-panel">
										  <span><b>Boro</b> &#40;ppm&#41;</span>
										  <input type="text" id="boro" name="boro">
                                          <td><span class="cyan-text" id="inter_boro"></span><br>
                                          <td><span class="orange-text" id="b_suelo"></span><br>
                                          <td><span class="green-text" id="b_aprovechable"></span><br>
                                          <td><span class="red-text" id="b_necesidad"></span>
									  	</div>
										</div>						
								<div class="col s12 m5 l3">
									  <div class="card-panel">
										  <span><b>Cobre</b> &#40;ppm&#41;</span>
										  <input type="text" id="cobre" name="cobre">
                                          <td><span id="inter_cobre"></span><br>
                                          <span class="red-text" id="cu_suelo"></span><br>
                                          <span class="orange-text" id="cu_aprovechable"></span><br>
                                          <span class="green-text" id="cu_necesidad"></span><br>
                                          <span class="cyan-text" id="nf_cobre"></span>
									  	</div>
										</div>
							<div class="col s12 m5 l3">
									  <div class="card-panel">
										  <span><b>Zn</b> &#40;ppm&#41;</span>
										  <input type="text" id="zinc" name="zinc">
                                          <td><span class="orange-text" id="inter_zinc"></span><br>
                                          <td><span class="blue-text" id="zn_suelo"></span><br>
                                          <td><span class="red-text" id="zn_aprovechable"></span><br>
                                          <td><span class="green-text" id="zn_necesidad"></span>
									  	</div>
										</div>				
								<div class="col s12 m5 l3">
									  <div class="card-panel">
										  <span><b>Hierro</b> &#40;ppm&#41;</span>
										  <input type="text" id="hierro" name="hierro">
                                          <td><span id="inter_hierro"></span><br>
                                          <td><span class="green-text" id="fe_suelo"></span><br>
                                          <td><span class="red-text" id="fe_aprovechable"></span><br>
                                          <td><span class="teal-text" id="fe_necesidad"></span><br>
									  	</div>
										</div>	
			
									</div>
                    	<br> 
                <span class="green-text" id="msg_exito_elementos"></span><!--CONTROLADOR DE RESPUESTAS [EXITO]-->
                <span class="red-text" id="msg_error_elementos"></span> <!--CONTROLADOR DE RESPUESTAS  [ERROR]-->
                <button type="button" name="g_elementos" id="elementos_control" class="waves-light btn  green right g_elementos"  value="Guardar">Guardar</button><br><br>
        
                        </div>
                   </div><!-- TARJETA PANEL-->
                </div><!--FIN DEL CONTENEDOR DE ANÁLISIS DE SUELOS-->

          
                </div>              
          
          <div id="grafico_analisis" class="col s12">
                <div class="container" style="width:95%"><!-- CONTENEDOR DEL ANÁLISIS DE SUELO-->
                <div class="card-panel white" id="body_elementos">      
            <div class="row">
                    <div class="card-content white">
              <div id="chartjs" class="section">
                <h4 class="header center">Estimación gráfica de las variables del suelo</h4>
                <div class="row">
                  <div class="col s12">
                  </div>
                    <div id="interpretacion_vars" class="col s12 m12 l2">
                        <ul>
                        <li class="purple white-text">PH &#40; % &#41;</li>
                        <li style="font-size:12px" id="ph_est"></li>
                        <div class="divider"></div>
                        <li class="orange white-text">C.E  &#40;ds.m -1&#41;</li>
                        <li style="font-size:12px" id="ce_est"></li>
                        <div class="divider"></div>
                        <li class="blue white-text">C.I.C.E &#40;cmol kg -1&#41;</li>
                        <li style="font-size:12px" id="cice_est"></li>                      
                        <div class="divider"></div>
                        <li class="brown white-text">SALINIDAD &#40;ppm&#41;</li>
                        <li  style="font-size:12px" id="sal_est"></li>                        
                        <div class="divider"></div>
                        <li class="green white-text">NITROGENO &#40;%&#41;</li>
                        <li  style="font-size:12px" id="n_est"></li>
                        </ul>
                </div>
                  <div class="col s10">
                      <div class="chart-container" style="position: relative;">
                        <canvas id="variables-graf" width="800" height="250"></canvas>
                      </div>
                      
                  </div>
                </div>
              </div>
        
            </div>
                  <div class="row">
            <div id="chartjs-bar-chart" class="section">
                <h4 class="header center">Interpretación gráfica de los elementos del suelo</h4>
                <div class="row">
                  <div class="col s12">
                  </div>
                    <div id="interpretacion_elements" class="col s12 m12 l2">
                        <ul>
                        <li style="background-color: #ff0000;" id="est_p" class="  white-text">[ P ]</li>
                        <div class="divider"></div>
                        <li style="background-color: #ff4000;" id="est_ca" class="  white-text">[ Ca ]</li>
                        <div class="divider"></div>
                        <li style="background-color: #ff8000;" id="est_mg" class="white-text">[ Mg ]</li>
                        <div class="divider"></div>
                        <li style="background-color: #ffbf00;" id="est_k" class="white-text">[ K ]</li>
                        <div class="divider"></div>
                        <li style="background-color: #ffff00;" id="est_na" class="white-text">[ Na ]</li>
                        <div class="divider"></div>
                        <li style="background-color: #00ff80;" id="est_s" class="white-text">[ S ]</li>           
                        <div class="divider"></div>
                        <li style="background-color: #00ffbf;" id="est_mn" class="white-text">[ Mn ]</li>           
                        <div class="divider"></div>
                        <li style="background-color: #00bfff;" id="est_b" class="text">[ B ]</li>                        
                        <div class="divider"></div>
                        <li style="background-color: #0040ff;" id="est_cu" class="accent-2 white-text">[ Cu ]</li>      
                        <div class="divider"></div>
                        <li style="background-color: #4000ff;" id="est_zn" class="white-text">[ Zn ]</li>      
                        <div class="divider"></div>
                        <li style="background-color: #bf00ff;" id="est_fe" class="white-text">[ Fe ]</li>
                        </ul>
                </div>
                    
                  <div class="col s10">
                    <div class="chart-container" style="position: relative; padding:0;">
                      <canvas id="elements_chart" width="800" height="280"></canvas>
                    </div>
                  </div>
                </div>
              </div>
                  </div>
                   </div><!-- TARJETA PANEL-->
                </div><!--FIN DEL CONTENEDOR DE ANÁLISIS DE SUELOS-->
                </div>
                <!--FIN ELEMENTOS PARA LA CREACIÓN DE ANÁLISIS DE SUELO-->
                </div>
              </div>
              <br>
              <div class="divider"></div>
              
            </div>
                 <!-- INICIO Modal Para buscar propietarios y asociarlos al análisis-->
              <div id="busca_propietarios" class="modal">
                <div class="modal-content">
                      <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="Buscar_Propietario" name="Buscar_Propietario" type="text" class="validate">
                       <div id="lista_propietarios"></div>  
                      <label for="Buscar_Propietario">Propietarios <b class="red-text">*</b></label>
                    </div>
                  </div>
                </form>
              </div>

                </div>       
                <div class="modal-footer">
                  <a href="#!" class="red-text modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                </div>
              </div>  
              <!-- FIN Modal Para buscar propietarios y asociarlos al análisis-->
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
    <script type="text/javascript" src="../../js/materialize.js"></script>
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
    <!--card-advanced.js - Page specific JS-->
    <script type="text/javascript" src="../../model/m.analisis_suelo/m.graficos.js"></script>
    <!--Modelo de los análisis de suelo-->
    <script type="text/javascript" language="javascript" src="../../model/m.analisis_suelo/m.analisis_suelo.js"></script>
    <script type="text/javascript" language="javascript" src="../../model/m.analisis_suelo/m.guarda_analisis_suelo.js"></script>
    <script type="text/javascript" language="javascript" src="../../model/m.analisis_suelo/estimacion_elementos.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../../js/scripts/data-tables.js"></script>
      </div>
  </body>
</html>
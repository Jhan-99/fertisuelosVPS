<?php
include('fetch-head.php');
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
          <ul class="tabs tabs-fixed-width tab-demo z-depth-1" style="overflow-x: hidden;">
            <li class="tab col s3 m3 l3 active"><a class="active" href="#info_inicial">Infomación inicial</a></li>
            <li id="vars_s" class="tab col s3 m3 l3 "><a  href="#vars_sign">Variables significativas</a></li>
            <li id="el" class="tab col s3 m3 l2 "><a  href="#elementos">Elementos</a></li>
            <li id="grafic" class="tab col s3 m3 l2 disabled"><a  href="#grafico_analisis">Grafico</a></li>
            <li id="" class="tab col s3 m3 l2 "><a href="#pmq">PMQ</a></li>
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
                    <option value="na">No aplica</option>
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
                    <option t_suelo="2.0" value="Franco" selected>Franco</option> 
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
				<label>C.E &#40;ds.m <sup>-1</sup>&#41;</label>
				<input type="text" id="ce" name="ce">
			    <span class="orange chip white-text" id="inter_ce"></span>
				</div>
				<!-- -->
				<div class="col s12 m6 l2">
				<label>C.I.C.E  &#40;cmol kg <sup>-1</sup>&#41;</label>
				<input type="text" id="cice" name="cice">
				<span class="purple darken-4 chip white-text" id="inter_cice">0.0</span>
				</div>
			
			<div class="col s12 m6 l2">
				<label>Salinidad &#40;gr/l&#41;</label>
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
                <div class="card-panel white" id="body_elementos" style="font-family: Courier, Monaco, monospace; font-size:16px">      
        <div class="row">
            <br>
              <div class="chip">
                Agrega los nutrientes a tu análisis de suelo
              </div>
                 <div class="divider"></div> 
            <br>
                            <h5 class="center">Calculo del nitrógeno</h5><br>
                                         <div class="col l2 s12 m3" >
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
                                    <div class="col l8 s12 m3" >
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
									<div class="col s12 m5 l4">
									  <div class="card-panel" style="font-family: Courier, Monaco, monospace; font-size:16px">
								   <span><b>Fosforo</b> &#40;Bray II - ppm&#41;</span>
									<input class="teal-text" type="text" id="fosforo" name="fosforo">
                                    <span class="teal-text" id="inter_fosforo">Est:</span><br>
                                    <span class=""id="p_suelo">P.Suelo:</span><br>
                                    <span class=""id="p_asimilable">P.Asimi:</span><br>
                                    <span class=""id="p_aprovechable">P.Apro:</span><br>
                                    <span class=""id="p_necesidad">NF.P:</span><br>
                                    <span class=""id="cant_aplicar_planta_p">P2O5:</span><br>
									  </div>
									</div>						
								<div class="col s12 m5 l4">
									  <div class="card-panel" style="font-family: Courier, Monaco, monospace; font-size:16px">
										  <span><b>Calcio</b> &#40;cmol kg&#41;</span>
										  	<input class="red-text" type="text" id="calcio" name="calcio">
										  <span class="red-text" id="inter_calcio"></span><br>
										  <span class="" id="ca_suelo"></span><br>
										  <span class="" id="ca_aprovechable"></span><br>
										  <span class="" id="ca_necesidad"></span><br>
										  <span class="" id="cant_aplicar_planta_ca"></span><br>
										  <span class="" id=""></span><br>
									  </div>
									</div>						
									<div class="col s12 m5 l4">
									  <div class="card-panel" style="font-family: Courier, Monaco, monospace; font-size:16px">
										  <span><b>Magnesio</b> &#40;cmol kg&#41;</span>
										  	<input class="orange-text" type="text" id="magnecio" name="magnecio">
										  <span class="orange-text" id="inter_magnecio"></span><br>
										  <span class="" id="mg_suelo"></span><br>
										  <span class="" id="mg_aprovechable"></span><br>
										  <span class="" id="mg_necesidad"></span><br>
										  <span class="" id="cant_aplicar_planta_mg"></span><br>
										  <span class="" id=""></span><br>
									  </div>
									</div>					
									 
								  </div>
                    
			                          <div class="row">
                                    <div class="col s12 m5 l4">
									  <div class="card-panel" style="font-family: Courier, Monaco, monospace; font-size:16px">
										  <span><b>Potasio</b> &#40;cmol kg&#41;</span>
										  <input class="blue-text" type="text" id="potasio" name="potasio">
										  <td><span class="blue-text" id="inter_potasio"></span><br>
										  <td><span class="" id="k_suelo"></span><br>
										  <td><span class="" id="k_asimilable"></span><br>
										  <td><span class="" id="k_aprovechable"></span><br>
										  <td><span class="" id="k_necesidad"></span><br>
										  <td><span class="" id="cant_aplicar_planta_k"></span><br>
									  </div>
									</div>  
									<div class="col s12 m5 l4">
									  <div class="card-panel" style="font-family: Courier, Monaco, monospace; font-size:16px">
										  <span><b>Sodio</b> &#40;cmol kg&#41;</span>
										  <input class="orange-text" type="text" id="sodio" name="sodio">
                                          <span class="orange-text" id="inter_sodio"></span><br>
                                          <span class="" id="na_suelo"></span><br>
                                          <span class="" id=""></span><br>
                                          <span class="" id=""></span><br>
                                          <span class="" id=""></span><br>
                                          <span class="" id=""></span><br>
									  	</div>
										</div>
									<div class="col s12 m5 l4">
									  <div class="card-panel" style="font-family: Courier, Monaco, monospace; font-size:16px">
										  <span><b>Azufre</b> &#40;ppm&#41;</span>
										  <input class="amber-text" type="text" id="azufre" name="azufre">
                                          <td><span class="amber-text" id="inter_azufre"></span><br>
										  <span class=""id="s_suelo">S.Suelo:</span><br>
                                    	  <span class=""id="s_aprovechable">S.Apro:</span><br>
                                    	  <span class=""id="s_necesidad">NF.S:</span><br>
                                    	  <span class=""id="cant_aplicar_planta_s">NF.S:</span><br>
                                    	  <span class=""id=""></span><br>
									  	</div>
										</div>		
                    </div>
                                        <div class="row">
									<div class="col s12 m5 l4">
									  <div class="card-panel" style="font-family: Courier, Monaco, monospace; font-size:16px">
										  <span><b>Manganeso</b> &#40;ppm&#41;</span>
										  <input class="yellow-text" type="text" id="manganeso" name="manganeso">
                                          <td><span class="yellow-text" id="inter_manganeso"></span><br>
                                          <td><span class="" id="mn_suelo"></span><br>
                                          <td><span class="" id="mn_aprovechable"></span><br>
                                          <td><span class="" id="mn_necesidad"></span><br>
                                          <td><span class="" id="cant_aplicar_planta_mn"></span><br>
                                          <td><span class="" id=""></span><br>
									  	</div>
										</div>				
									<div class="col s12 m5 l4">
									  <div class="card-panel" style="font-family: Courier, Monaco, monospace; font-size:16px">
										  <span><b>Boro</b> &#40;ppm&#41;</span>
										  <input class="green-text" type="text" id="boro" name="boro">
                                          <td><span class="green-text" id="inter_boro"></span><br>
                                          <td><span class="" id="b_suelo"></span><br>
                                          <td><span class="" id="b_aprovechable"></span><br>
                                          <td><span class="" id="b_necesidad"></span><br>
                                          <td><span class="" id="cant_aplicar_planta_b"></span><br>
                                          <td><span class="" id=""></span><br>
									  	</div>
										</div>						
								<div class="col s12 m5 l4">
									  <div class="card-panel" style="font-family: Courier, Monaco, monospace; font-size:16px">
										  <span><b>Cobre</b> &#40;ppm&#41;</span>
										  <input class="teal-text" type="text" id="cobre" name="cobre">
                                          <td><span class="teal-text" id="inter_cobre"></span><br>
                                          <span class="" id="cu_suelo"></span><br>
                                          <span class="" id="cu_aprovechable"></span><br>
                                          <span class="" id="cu_necesidad"></span><br>
                                          <span class="" id="nf_cobre"></span><br>
                                          <span class="" id="cant_aplicar_planta_cu"></span><br>
									  	</div>
										</div>
                    </div>
                    <div class="row">
							<div class="col s12 m5 l4">
									  <div class="card-panel" style="font-family: Courier, Monaco, monospace; font-size:16px">
										  <span><b>Zn</b> &#40;ppm&#41;</span>
										  <input class="red-text" type="text" id="zinc" name="zinc">
                                          <td><span class="red-text" id="inter_zinc"></span><br>
                                          <td><span class="" id="zn_suelo"></span><br>
                                          <td><span class="" id="zn_aprovechable"></span><br>
                                          <td><span class="" id="zn_necesidad"></span><br>
                                          <td><span class="" id="cant_aplicar_planta_zn"></span><br>
                                          <td><span class="" id=""></span><br>
									  	</div>
										</div>				
								<div class="col s12 m5 l4">
									  <div class="card-panel" style="font-family: Courier, Monaco, monospace; font-size:16px">
										  <span><b>Hierro</b> &#40;ppm&#41;</span>
										  <input class="brown-text" type="text" id="hierro" name="hierro">
                                          <td><span class="brown-text" id="inter_hierro"></span><br>
                                          <td><span class="" id="fe_suelo"></span><br>
                                          <td><span class="" id="fe_aprovechable"></span><br>
                                          <td><span class="" id="fe_necesidad"></span><br>
                                          <td><span class="" id="cant_aplicar_planta_fe"></span><br>
                                          <td><span class="" id=""></span><br>
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
            
                <style>
            table, td, th {  
              border: 1px solid #ddd;
              text-align: left;
            }

            table {
              border-collapse: collapse;
              width: 100%;
            }

            th, td {
              padding: 15px;
            }
        </style>

            <div id="pmq"  class="col s12" style="font-family: Courier, Monaco, monospace;">
            <div  class="container">
            <div  class="card-panel white">
            <div  class="row">
                <div class="col s12">
                <div class="col s12 m6 l2">
				<label>Saturación de (Al)</label>
				<input type="text" id="saturacion_al" name="saturacion_al">
                </div>  
            <div class="col s12 m6 l2">
				<label>CICE</label>
				<input type="text" id="cice_pmq" name="cice_pmq">
                </div>                      
            <div class="col s12 m6 l3">
                <span class="" id="est_saturacion_al"></span>
            </div>
                    
            <div class="col s12 m6 l12">
                <input type="hidden" id="elemento1">
                <input type="hidden" id="elemento2">
                <input type="hidden" id="elemento3">
                <input type="hidden" id="contador">
                <span id="msgs"></span>
                <table style="font-size: 12px;" class="responsive">
                <thead>
                    <tr>
                        <th>Aplicar</th>
                        <th>Materiales encalantes</th>
                        <th>CaCO<sup>3</sup> (%)</th>
                        <th>MgCO<sup>3</sup> (%)</th>
                        <th>CaO (%)</th>
                        <th>Ca(OH)<sup>2</sup> (%)</th>
                        <th>MgO (%)</th>
                        <th>P2O5 (%)</th>
                        <th>S (%)</th>
                        <th>EQ (CaCO <sup>3</sup>) (%)</th>
                        <th width="130">%</th>
                    </tr>    
                </thead>
                    <tbody>
                    <tr>
                       <td> <div class="switch">
                        <label>
                          <input type="checkbox" id="s_cal_viva" class="s_cal_viva">
                          <span class="lever"></span>
                        </label>
                      </div>
                        </td> 
                       <td>Cal viva</td> 
                        <td></td>
                        <td></td>
                        <td>75</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>134</td>
                        <td>
                        <select class="browser-default" id="val_porc_cal_viva">
                            <option value="65">65</option>   
                            <option value="20">20</option>   
                            <option value="15">15</option>   
                         </select>
                        <span class="red-text" id="result_cal_viva"></span>    
                        </td>
                    </tr>
                    <tr>
                        <td> <div class="switch">
                        <label>
                          <input type="checkbox" id="s_cal_hidratada" class="s_cal_hidratada">
                          <span class="lever"></span>
                        </label>
                      </div>
                        </td>
                       <td>Cal hidratada</td> 
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>80</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>110</td>
                    </tr>
                    <tr>
                <td> <div class="switch">
                        <label>
                          <input type="checkbox" id="s_cal_dolomita" class="s_cal_dolomita">
                          <span class="lever"></span>
                        </label>
                      </div>
                        </td>
                       <td>Cal dolomita</td> 
                        <td>55</td>
                        <td>33</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>94</td>
                    </tr>
                <tr>
                    <td> <div class="switch">
                        <label> 
                          <input type="checkbox" id="s_abono_paz_rio" class="s_abono_paz_rio">
                          <span class="lever"></span>
                        </label>
                      </div>
                        </td>
                       <td>Abono paz del rio</td> 
                        <td></td>
                        <td></td>
                        <td>48</td>
                        <td></td>
                        <td>1.2</td>
                        <td>10</td>
                        <td></td>
                        <td>89</td>
                    </tr>
                    <tr>
                    <td> <div class="switch">
                        <label>
                          <input type="checkbox" id="s_roca_fosforica" class="s_roca_fosforica">
                          <span class="lever"></span>
                        </label>
                      </div>
                        </td>
                       <td>Roca fosfórica</td> 
                        <td></td>
                        <td></td>
                        <td>40</td>
                        <td></td>
                        <td>0.5</td>
                        <td>30</td>
                        <td></td>
                        <td>73</td>
                    </tr>
                    <tr>
                    <td> <div class="switch">
                        <label> 
                          <input type="checkbox" id="s_escorias" class="s_escorias">
                          <span class="lever"></span>
                        </label>
                      </div>
                        </td>
                       <td>Escorias básicas</td> 
                        <td></td>
                        <td></td>
                        <td>59</td>
                        <td></td>
                        <td>11</td>
                        <td></td>
                        <td></td>
                        <td>132</td>
                    </tr>
                    <tr>
                    <td> <div class="switch">
                        <label>  
                          <input type="checkbox" id="s_yeso_agricola" class="s_yeso_agricola">
                          <span class="lever"></span>
                        </label>
                      </div>
                        </td>
                       <td>Yeso agrícola</td> 
                        <td></td>
                        <td></td>
                        <td>36</td>
                        <td></td>
                        <td></td>
                        <td>0.5</td>
                        <td>15</td>
                        <td>100</td>
                    </tr>
                  <tr>
                    <td> <div class="switch">
                        <label>
                          <input type="checkbox" id="s_dolomita_calcindad" class="s_dolomita_calcindad">
                          <span class="lever"></span>
                        </label>
                      </div>
                        </td>
                       <td>Dolomita calcinada</td> 
                        <td></td>
                        <td></td>
                        <td>28</td>
                        <td></td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td>186</td>
                    </tr>
                    </tbody>
                </table>
            </div>
                    
                  </div>     
                  </div>     
                  </div>     
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
         <!--   <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
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
            </div> -->
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
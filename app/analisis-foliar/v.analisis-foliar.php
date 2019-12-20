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
    <title>Fertil | Creación de análisis foliares</title>
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
                  <h5 class="breadcrumbs-title">Crear nuevo análisis foliar</h5>
                  <ol class="breadcrumbs">
                    <li><a href="../../index.php">Dashboard</a></li>
                    <li><a href="#">Estudio de campo</a></li>
                    <li class="active">Análisis foliar</li>
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
                <!--INICIO ELEMENTOS PARA LA CREACIÓN DE ANÁLISIS FOLIARES-->
        
                    <!--Código carga el análisis de suelo-->
         <input type="hidden" id="codcab" value="<?php  echo(mt_rand()); ?>">
          <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
            <li class="tab col s3 m3 l3 active"><a href="#info_inicial">Principal</a></li>
            <li id="vars_s" class="tab col s3 m3 l3 "><a  href="#vars_sign">Variables significativas</a></li>
            <li id="el" class="tab col s3 m3 l3 "><a  href="#elementos">Nutrición</a></li>
            </ul>
            <div id="info_inicial" class="col s12"><!--Recoleción de infomación de la cabecera{-->
                <div class="container" style="width:96%"><!--CONTAINER DE LA CABECERA [INICIO]-->
             <div class="row"><!--FILA GENERAL [INICIO]-->
            <form class="col s12"><br>      

                
                
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
             <div class="browser-default col s12 m4 l4">
                    <label class="active" for="Departamento">Departamento</label>
                 <select name="Departamento" id="Departamento" class="activate selec_control">
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
                <div class="input-field col s10" id="mostrar_finca_descrip">
            <!--Este espacio se carga el request del Selec "Finca" para cargar la descripcion de la finca-->
                </div>   
                </div>
                
          <div class="row">
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">info_outline</i>
              <input id="Nombre_programa" type="text" class="validate">
              <label for="Nombre_programa">Nombre del programa <b class="red-text">*</b></label>
              </div>
              
              <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">person</i>
              <input id="Propietario" type="text" class="validate">
              <label id="lbpropietarios" for="Propietario">Propietario <b class="red-text">*</b></label>
            </div>
                  <!-- Modal Trigger -->
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">directions_walk</i>
              <input id="Asistente_tecnico" type="text" class="validate">
              <label for="Asistente_tecnico">Asistente técnico</label>
            </div>      
      
          </div>   
        
            <div class="row">
              <div class="input-field col s12 m4 l4">
              <input type="text" id="Momento_muestreo" name="Momento_muestreo" class="datepicker">
              <label for="Momento_muestreo">Momento muestreo</label>
            </div>             
              <div class="input-field col s12 m4 l4">
              <input type="text" id="Fecha_muestreo" name="Fecha_muestreo" class="datepicker">
              <label for="Fecha_muestreo">Fecha muestreo</label>
            </div> 
            <div class="input-field col s12 m4 l4">
                <input type="text" id="Fecha_recepcion" name="Fecha_recepcion" class="datepicker">
              <label for="Fecha_recepcion">Fecha Recepción</label>
            </div>
              </div>        
         <input type="button" name="g_cabecera" id="cabecera_control" class="waves-light btn  teal right g_cabecera"  value="Guardar y Continuar"/>
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
             <div class="chip teal white-text">
                Elige el estado fenológico
              </div>
            <div class="divider"></div> 
                    <div class="browser-default">
                    <select class="" name="estado_feno" id="estado_feno" required>
					<option value="Flecha & Botón">Flecha | Botón</option>
                    <option value="Floriación">Floriación</option>
                    <option value="Llenado del fruto">Llenado del fruto</option>
                    <option value="Cosecha">Cosecha</option>
                    </select>
                    </div>
                <br>
              <div class="chip">
                Agrega las variables más significativas 
              </div>
                 <div class="divider"></div> 
            <br>
            <div class="row">
            <div class="col s2">
            <label class="orange-text">PH (%)</label>
            <input type="text" id="ph" name="ph" required>
            <span class="orange-text" id="inter_ph"></span>
            </div>         
            <!-- //-->    
            <div class="col s2">
            <label class="teal-text">C.E (ds.m -1)</label>
            <input type="text" id="ce" name="ce" required>
            <span class="teal-text" id="inter_ce"></span>
            </div>          
            <!-- //-->    
            <div class="col s2">
            <label class="red-text">NDVI (%)</label>
            <input type="text" id="ndvi" name="ndvi" required>
            <span class="red-text" id="inter_ndvi"></span>
            </div>                      
            <!-- //-->    
            <div class="col s2">
            <label class="green-text">Clorofila (%)</label>
            <input type="text" id="clorofila" name="clorofila" required>
            <span class="green-text" id="inter_cloro"></span>
            </div>
                <!-- //-->    
            <div class="col s4">
            <label class="blue-text">Sat Hum (%)</label>
            <input type="text" id="sat_hum" name="sat_hum" required>
            <span class="blue-text" id="inter_sat_hum"></span>
            </div>
            </div>
                             <h5 class="center grey-text">Calculo del nitrógeno en el tejido foliar</h5><br>
                            <div class="row">
                                            <div class="col l2 s12 m3">
                                            <select class="browser-default" name="co_o_mo" id="co_o_mo">
                                                <option value="" selected><b>Val nitrógeno</b></option>
                                                <option value="mo">M.O</option>
                                                <option value="co">C.O</option>
                                             </select>
                                            <select class="browser-default" name="tipo_clima" id="tipo_clima">
                                                <label><b>Clima</b></label>
                                                <option value="" selected><b>Tipo clima</b></option>
                                                <option value="clma_frio">Frio</option>
                                                <option value="clma_medio">Medio</option>
                                                <option value="clma_calido">Calido</option>
                                            </select>
                                            </div>
                                    <div class="col l2 s12 m3">
                                        <input type="text" id="nitro" name="nitro">
                                     </div>
                                       <div class="col l2 s12 m1"><span class="teal-text" id="inter_nitrogeno"></span></div>
                                       <div class="col l2 s12 m1"><span  id="nitro_total">N.TOTAL</span></div>
                                       <div class="col l2 s12 m1"><span id="nitro_dispon">N.DISP</span></div>
                                       <div class="col l2 s12 m1"><span id="nitro_suelo_ppm">N.PPM</span></div>
                                </div><br><div class="divider"></div><br>
            
                        <!-- BOTONES DE CONTROL PARA GUARDAR EL ANALISIS FOLIRAR-->
                    <div class="col s12 m12 l12 center">
                    <span class="green-text" id="msg_exito_paso2"></span><!--CONTROLADOR DE RESPUESTAS [EXITO]-->
                    <span class="red-text" id="msg_error_paso2"></span> <!--CONTROLADOR DE RESPUESTAS  [ERROR]-->
                    <input type="button" name="g_vars_sign" id="variables_control" class="waves-light btn teal right g_vars_sign"  value="Guardar"/>
                    </div>
                            <!--interpretación del gráfico  de las variables del suelo-->
                <div class="card-content white">
              <div id="chartjs" class="section">
                <h4 class="header center">Estimación gráfica de las variables del tejido foliar</h4>
                <div class="row">
                  <div class="col s12">
                  </div>
                    <div id="interpretacion_vars" class="col s12 m12 l2">
                        <ul>
                        <li class="orange white-text">PH (%)</li>
                        <li style="font-size:12px" id="ph_est"></li>
                        <div class="divider"></div>
                        <li class="teal white-text">C.E (ds.m -1)</li>
                        <li style="font-size:12px" id="ce_est"></li>
                        <div class="divider"></div>
                        <li class="red white-text">NDVI (%)</li>
                        <li style="font-size:12px" id="ndvi_est"></li>                      
                        <div class="divider"></div>
                        <li class="blue white-text">SAT HUM (%)</li>
                        <li  style="font-size:12px" id="sathum_est"></li>                  
						<div class="divider"></div>
                        <li class="green white-text">CLOROFILA (%)</li>
                        <li  style="font-size:12px" id="cloro_est"></li>                        
                        <div class="divider"></div>
                        <li class="cyan white-text">NITRÓGENO (%)</li>
                        <li  style="font-size:12px" id="n_est"></li>
                        </ul>
                </div>

                  <div class="col s10">
                      <div class="chart-container" style="position: relative;">
                        <canvas id="line-chart" width="800" height="200"></canvas>
                      </div>
                      
                  </div>
                </div>
              </div>
        
            </div>
        
            
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
                Calcula la estimación de los nutrientes para tu análisis foliar
              </div>
                 <div class="divider"></div> 
            <br>
                                 <br><br><div class="divider"></div>
                                <div class="row col s12 l12 m12">
                                     <div class="col s12 m6 l2">
                                     <span><b style="color: #ff0000;">P</b> &#40;Bray II - ppm&#41;</span>
                                     <input type="text" id="fosforo" name="fosforo">
                                      <span id="inter_fosforo"></span>
                                     </div>                 
                                    <div class="col s12 m6 l2">
                                    <span><b style="color: #ff4000;">Ca</b> &#40;cmol kg&#41;</span>
                                    <input type="text" id="calcio" name="calcio">
                                     <span id="inter_calcio"></span>
                                    </div>   
                                    <!-- -->
                                    <div class="col s12 m6 l2">
                                    <span><b style="color: #ff8000;">Mg</b> &#40;cmol kg&#41;</span>
                                    <input type="text" id="magnecio" name="magnecio">
                                     <span id="inter_magnecio"></span>
                                    </div>         
                                    <!-- -->
                                    <div class="col s12 m6 l2">
                                    <span><b style="color: #ffbf00;">K</b> &#40;cmol kg&#41;</span>
                                    <input type="text" id="potasio" name="potasio">
                                     <span id="inter_potasio"></span>
                                    </div>               
                                     <!-- -->
                                    <div class="col s12 m6 l2">
                                    <span><b style="color: #ffff00;">Cl</b> &#40;&#41;</span>
                                    <input type="text" id="cloro" name="cloro">
                                     <span id="inter_clor"></span>
                                    </div>                      
                                    <!-- -->
                                    <div class="col s12 m6 l2">
                                    <span><b style="color: #00ff80;">S</b> &#40;ppm&#41;</span>
                                    <input type="text" id="azufre" name="azufre">
                                     <span id="inter_azufre"></span>
                                    </div>                
                                </div><br><br><br><div class="divider"></div><br>
                            <div class="row col s12 m12 l12">
                                   <!-- -->
                                  <div class="col s12 m6 l2">
                                  <span><b style="color: #00ffbf;">Mn</b> &#40;ppm&#41;</span>
                                  <input type="text" id="manganeso" name="manganeso">
                                   <span id="inter_manganeso"></span>
                                  </div>                           
                                <!-- -->
                                  <div class="col s12 m6 l2">
                                  <span><b style="color: #00bfff;">B</b> &#40;ppm&#41;</span>
                                  <input type="text" id="boro" name="boro">
                                   <span id="inter_boro"></span>
                                  </div>                          
                                  <!-- -->
                                  <div class="col s12 m6 l2">
                                  <span><b style="color: #0040ff;">Cu</b> &#40;ppm&#41;</span>
                                  <input type="text" id="cobre" name="cobre">
                                   <span id="inter_cobre"></span>
                                  </div>                         
                               <!-- -->
                                  <div class="col s12 m6 l2">
                                  <span><b style="color: #4000ff;">Zn</b> &#40;ppm&#41;</span>
                                  <input type="text" id="zinc" name="zinc">
                                   <span id="inter_zinc"></span>
                                  </div>              
                                  <!-- -->
                                  <div class="col s12 m6 l2">
                                  <span><b style="color: #bf00ff;">Fe</b> &#40;ppm&#41;</span>
                                  <input type="text" id="hierro" name="hierro">
                                   <span id="inter_hierro"></span>
                                  </div>               
                                <div class="col s12 m6 l2">
                                  <span><b style="color: #00bfa5;">Mo</b> &#40;&#41;</span>
                                  <input type="text" id="molibdeno" name="molibdeno">
                                   <span id="inter_molibdeno"></span>
                                  </div><br>
                                <!-- interpretación de los elementos en el análisis foliar-->
                        <div class="row"><br><br>
            <div id="chartjs-bar-chart" class="section"><br><br>
                <h5 class="header center grey-text">Interpretación gráfica de los elementos del tejido foliar</h5>
                <div class="row">
                  <div class="col s12">
                  </div>
                    <div id="interpretacion_elements" class="col s12 m12 l3">
                        <ul>
                        <li id="est_p" style="color: #ff0000;">[ P ]</li>
                        <div class="divider"></div>
                        <li id="est_ca" style="color: #ff4000;">[ Ca ]</li>
                        <div class="divider"></div>
                        <li id="est_mg" style="color: #ff8000;">[ Mg ]</li>
                        <div class="divider"></div>
                        <li id="est_k" style="color: #ffbf00;">[ K ]</li>
                        <div class="divider"></div>
                        <li id="est_cl" style="color: #ffff00;">[ Cl ]</li>
                        <div class="divider"></div>
                        <li id="est_s" style="color: #00ff80;">[ S ]</li>           
                        <div class="divider"></div>
                        <li id="est_mn" style="color: #00ffbf;">[ Mn ]</li>           
                        <div class="divider"></div>
                        <li id="est_b" style="color: #00bfff;">[ B ]</li>                        
                        <div class="divider"></div>
                        <li id="est_cu" style="color: #0040ff;">[ Cu ]</li>      
                        <div class="divider"></div>
                        <li id="est_zn" style="color: #4000ff;">[ Zn ]</li>      
                        <div class="divider"></div>
                        <li id="est_fe" style="color: #bf00ff;">[ Fe ]</li>                    
                        <div class="divider"></div>
                        <li id="est_mo" style="color: #00bfa5;">[ Mo ]</li>
                        </ul>
                </div>
                    
                  <div class="col s12 m12 l9 ">
                    <div class="chart-container" style="position: relative;">
                      <canvas id="elements_chart" width="800" height="200"></canvas>
                    </div>
                  </div>
                </div>
              </div>
                  </div>
                                
                    </div>
                <span class="green-text" id="msg_exito_elementos"></span><!--CONTROLADOR DE RESPUESTAS [EXITO]-->
                <span class="red-text" id="msg_error_elementos"></span> <!--CONTROLADOR DE RESPUESTAS  [ERROR]-->
                <input type="button" name="g_elementos" id="elementos_control" class="waves-light btn  teal right g_elementos"  value="Guardar"/>
        
                        </div>
                   </div><!-- TARJETA PANEL-->
                </div><!--FIN DEL CONTENEDOR DE ANÁLISIS FOLIARES-->

          
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
    <script type="text/javascript" src="../../model/m.analisis_foliar/m.graficos.js"></script>
    <!--Modelo de los análisis foliares-->
     <script type="text/javascript" language="javascript" src="../../model/m.analisis_foliar/m.analisis_foliar.js"></script>
   <script type="text/javascript" language="javascript" src="../../model/m.analisis_foliar/m.guarda_analisis_foliar.js"></script>
    <script type="text/javascript" language="javascript" src="../../model/m.analisis_foliar/estimacion_elementos.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../../js/scripts/data-tables.js"></script>
        </div>
  </body>
</html>
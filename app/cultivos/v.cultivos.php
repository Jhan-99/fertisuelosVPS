<?php //include('fetch-head.php'); 
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
    <title>Fertil | Gestión de Cultivos</title>
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
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title">Gestión de cultivos</h5>
                  <ol class="breadcrumbs">
                    <li><a href="../../index.php">Dashboard</a></li>
                    <li><a href="#">Fincas</a></li>
                    <li class="active">Gestión de cultivos</li>
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
                    <p>Aquí puedes ver y gestionar tus cultivos.</p>
                  </div>
                <div align="right">
                    <div class="row">
                        <div class="col s12 l12 m12">
                        <a href="#ayuda" class="modal-trigger"><i class="material-icons">help</i><span class="new badge blue" data-badge-caption="Ayuda "></span></a>
                        </div>
                    </div>
				    </div>
                  <div class="col s12">
                    <table id="datos_cultivos" class="responsive-table display highlight bordered striped" cellspacing="0">
                     <thead>
						    <tr>
							<th>Foto</th>
							<th>Nombre</th>
							<th>Variedad</th>
							<th>Superficie</th>
							<th>Metodo</th>
							<th>Descripcion</th>
							<th>Editar</th>
							<th>Ver</th>
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
       
                <a id="add_button"  href="#Cultivos"class="btn-floating btn-large modal-trigger green"><i class="material-icons">add</i></a>
                
            </div>
            <!-- Floating Action Button -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
         <!--INICIO MODAL QUE CONTIENE LOS CULTIVOS-->
          <div id="Cultivos" class="modal ">
	<div class="modal-dialog">
		<form method="post" id="form_cultivos" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
                    <a href="#!" class="modal-action modal-close red-text right btn-flat">Cerrar</a>
					<h4 class="modal-title">Agregar cultivos</h4>
				</div>
				<div class="modal-body">
					<label>Codigo cultivo</label>
					<input type="number" name="cod_cultivo" id="cod_cultivo" class="form-control" />
					<br />			
					<label>Nombre cultivo</label>
					<input type="text" name="Nombre_cultivo" id="Nombre_cultivo" class="form-control" />
					<br />
					<label>Variedad</label>
					<input type="text" name="Variedad_cultivo" id="Variedad_cultivo" class="form-control" />				<br />
					<label>Superficie</label>
					<input type="text" name="Superficie_cultivo" id="Superficie_cultivo" class="form-control" />
                     <br />
					<label>Metodo</label>
					<input type="text" name="Metodo_cultivo" id="Metodo_cultivo" class="form-control" />                     <br />
					<label>Descripcion</label>
					<input type="text" name="Descripcion_cultivo" id="Descripcion_cultivo" class="form-control" />
					<br />
					<label>Selecciona una imagen</label>
					<input type="file" name="user_image" id="user_image" />
					<span id="imagen_cultivo_subida"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="cultivo_id" id="cultivo_id" />
					<input type="hidden" name="operacion" id="operacion" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					
				</div>
			</div>
		</form>
	</div>
</div>
         <!--FIN MODAL QUE CONTIENE LOS CULTIVOS-->
         <!-- INICIO MODAL PARA ENVÍAR LOS REQUERIMIENTOS NUTRICIONALES A LOS CULTIVOS -->
                <div id="add_requerimientos" class="modal" style="width:70%">
                <div class="modal-content">
                      <input type="hidden" id="id_cultivo" name="id_cultivo">
                      <h5 class="center">Introducir las variables más significativas del suelo al cultivo</h5><br>
                    <div class="row">
                <div class="browser-default col s12 m12 l12">
                    <div class="select-wrapper">
                    <label>Textura del suelo</label>
                    <select class="initialized green-text" name="val_textura" id="val_textura">
                    <option value="Arcilloso" selected>Selecciona una textura</option> 
                    <option value="Arcilloso">Arcilloso</option> 
                    <option>Arenoso</option> 
                    <option>Arenoso franco</option> 
                    <option>Franco arenoso</option> 
                    <option>Franco</option> 
                    <option>Franco limoso</option> 
                    <option>Franco arcilloso arenoso</option> 
                    <option>Franco arcilloso</option> 
                    <option>Franco arcillo limoso</option> 
                    <option>Limoso</option> 
                    <option>Arcillo arenoso</option> 
                    <option>Arcillo limoso</option> 
                    <option>Arcilloso</option>     
                    </select></div>
                    <label>Textura del suelo</label>
                    </div>
                    
              
              <div class="input-field col s12 m12 l3">
              <input id="val_ph" type="text" class="validate">
              <label class="active green-text" for="val_ph">PH</label>
            </div>
                
            <div class="input-field col s12 m12 l3">
              <input id="val_ce" type="text"  class="validate">
              <label class="active orange-text" for="val_ce">C.E</label>
            </div>     
            
            <div class="input-field col s12 m12 l3">
              <input id="val_cice" type="text"  class="validate">
              <label class="active red-text" for="val_cice">C.I.C.E</label>
            </div>          
            
            <div class="input-field col s12 m12 l3">
              <input id="val_salinidad" type="text"  class="validate">
              <label class="active blue-text" for="val_salinidad">SALINIDAD</label>
            </div><br>
 
             <input type="button" name="inerta_vars_suelo_ana" id="" class="waves-light btn green right g_vars_suelo" value="Guardar">
             <span class="red-text" id="msg_error_vc"></span>
             <span class="green-text" id="msg_exito_vc"></span><br>  
          </div>
                    
                      <h5 class="center">Agregar requerimientos nutricionales a los cultivos</h5>
                    <form id="form-elements">
                      <table class="highlight">
                          <thead>
                              <tr>
                                  <th style="">NUTRIENTE</th>
                                  <th style="width:100px;">VALOR</th>
                                  <th style="">DESCRIPCIÓN</th>
                                  <th style="">CATEGORÍA</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr class="green-text">
                                  <td><p class="chip">NITROGENO &#40;N&#41;</p></td>
                                  <td><input type="text" id="r_nitrogeno"></td>
                                  <td><input type="text" id="desc_nitrogeno"></td>
                                  <td><p class="chip">Mayor</p></td>
                              </tr>         
                              <tr class="green-text">
                                  <td><p class="chip">FOSFORO &#40;P&#41;</p></td>
                                  <td><input type="text" id="r_fosforo"></td>
                                  <td><input type="text" id="desc_fosforo"></td>
                                  <td><p class="chip">Mayor</p></td>
                              </tr>        
                                 <tr class="green-text">
                                  <td><p class="chip">POTASIO &#40;K&#41;</p></td>
                                  <td><input type="text" id="r_potasio"></td>
                                  <td><input type="text" id="desc_potasio"></td>
                                  <td><p class="chip">Mayor</p></td>
                              </tr>          
                              <tr class="blue-text">
                                  <td><p class="chip">MAGNESIO &#40;Mg&#41;</p></td>
                                  <td><input type="text" id="r_magnesio"></td>
                                  <td><input type="text" id="desc_magnesio"></td>
                                  <td><p class="chip">Secundario</p></td>
                              </tr>
                               <tr class="blue-text">
                                  <td><p class="chip">CALCIO &#40;Ca&#41;</p></td>
                                  <td><input type="text" id="r_calcio"></td>
                                  <td><input type="text" id="desc_calcio"></td>
                                  <td><p class="chip">Secundario</p></td>
                              </tr>              
                              <tr class="blue-text">
                                  <td><p class="chip">AZUFRE &#40;S&#41;</p></td>
                                  <td><input type="text" id="r_azufre"></td>
                                   <td><input type="text" id="desc_azufre"></td>
                                    <td><p class="chip">Secundario</p></td>
                              </tr>             
                                 <tr class="orange-text">
                                  <td><p class="chip">BORO &#40;B&#41;</p></td>
                                  <td><input type="text" id="r_boro"></td>
                                   <td><input type="text" id="desc_boro"></td>
                                   <td><p class="chip">Menor</p></td>
                              </tr>              
                                 <tr class="orange-text">
                                  <td><p class="chip">ZINC &#40;Zn&#41;</p></td>
                                  <td><input type="text" id="r_zinc"></td>
                                   <td><input type="text" id="desc_zinc"></td>
                                    <td><p class="chip">Menor</p></td>
                              </tr>             
                                  <tr class="orange-text">
                                  <td><p class="chip">COBRE &#40;Cu&#41;</p></td>
                                  <td><input type="text" id="r_cobre"></td>
                                   <td><input type="text" id="desc_cobre"></td>
                                    <td><p class="chip">Menor</p></td>
                              </tr>
                                 <tr class="orange-text">
                                  <td><p class="chip">HIERRO &#40;Fe&#41;</p></td>
                                  <td><input type="text" id="r_hierro"></td>
                                   <td><input type="text" id="desc_hierro"></td>
                                    <td><p class="chip">Menor</p></td>
                              </tr>
                          </tbody>
                      </table></form><br>
                      <span id="msg_exito_elementos" class="blue-text"></span>
                      <span id="msg_error_elementos" class="red-text"></span>
                      <input type="button" name="g_req_cultivo" id="g_req_cultivo" class="waves-light btn green center g_req_cultivo"  value="Guardar"/>
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat right">Cerrar</a>
                </div>
              </div>
         <!-- FIN MODAL PARA ENVÍAR LOS REQUERIMIENTOS NUTRICIONALES A LOS CULTIVOS -->
         
         <!-- INICIO MODAL PARA VISUALIZAR LOS REQUERIMIENTOS NUTRICIONALES A LOS CULTIVOS -->
                    <div class="modal" id="modal_ver_req" style="width:80%">
                     <div class="modal-content">
                        <h6 class="center" id="text_inf"></h6>
                         <div class="col s12" id="req_cultivos_varsuelos">
                         
                         </div>                 
				 <div class="col s12" id="">
 

                         </div>
                     </div>
                     <div class="modal-footer">
                         
                         
                     </div>
                 </div>
          
                  <!-- MODAL DE AYUDA-->  
        <div id="ayuda" class="modal">
    <div class="modal-content">
      <h5>Ayuda en la gestión de cultivos</h5>
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
                    <td><h6 class="title">Permite editar un cultivo</h6></td>
                    </tr>
                    <tr>
                    <td><a href="#"><i class="material-icons orange-text center">grain</i></a></td>
                    <td><h6 class="title">Permite agregar los requerimientos nutricionales al cultivo y las variables más significativas del suelo. (Primero se debe agregar un cultivo)</h6></td>
                    </tr>        
                    <tr>
                    <td><a href="#"><i class="material-icons blue-text center">filter_list</i></a></td>
                    <td><h6 class="title">Permite visualizar los requerimientos nutricionales del cultivo cultivo</h6></td>
                    </tr>
                    <tr>
                    <td><a href="#"><i class="material-icons red-text center">delete</i></a></td>
                    <td><h6 class="title">Permite eliminar un cultivo</h6></td>
                    </tr>    
                    <tr>
                    <td><a id="add_button" class="btn-floating btn-large green modal-trigger"  href="#">
                <i class="material-icons">add</i></a></td>
                    <td><h6 class="title">Permite agregar un nuevo cultivo</h6></td>
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
		  

         <!-- FIN MODAL PARA VISUALIZAR LOS REQUERIMIENTOS NUTRICIONALES A LOS CULTIVOS -->
             
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
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Usar checks para busquedas.</p>
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
    <script type="text/javascript" language="javascript" src="../../model/m.cultivos/m.cultivos.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../../js/scripts/data-tables.js"></script>
    </div>
  </body>
</html>
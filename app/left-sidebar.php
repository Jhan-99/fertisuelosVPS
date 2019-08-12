<?php 
echo '
<aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
              <div class="row">
                <div class="col col s4 m4 l4">
                  <img src="../../images/avatar/avatar-7.png" alt="" class="circle responsive-img valign profile-image cyan">
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
                        <a href="../noticias/noticias.php#">
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
                        <a href="../fincas/v.fincas.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Gestión de fincas</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="../siembras/v.siembras.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Gestión de siembras</span>
                        </a>
                      </li>                     
                       <li class="">
                        <a href="../cultivos/v.cultivos.php">
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
                        <a href="../fertilizantes/v.fertilizantes.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Gestión de fertilizantes</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="../elementos/v.elementos.php">
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
                        <a href="../nitrogeno/ciclo-nitrogeno.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Nitrógeno</span>
                        </a>
                      </li>                    
                      <li>
                        <a href="../nitrogeno/mapping_ap.php#">
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
                        <a href="../analisis-suelo/v.analisis-suelos.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Crear Análisis de suelo</span>
                        </a>
                      </li>                    
                      <li>
                        <a href="../analisis-suelo/v.analisis_suelo_get.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Panel Análisis de suelo</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="../analisis-foliar/v.analisis-foliar.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Crear Análisis foliar</span>
                        </a>
                      </li>                      
                     <li class="">
                        <a href="../analisis-foliar/v.analisis_foliar_get.php">
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
                  <a href="../prog-cosechas/v.prog-cosechas.php" class="waves-effect waves-cyan">
                    <i class="material-icons">today</i>
                    <span class="nav-text">Prog de cosechas</span>
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
                        <a href="../pf/v.pf.php">
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
              <a href="../documentacion/documentacion.php" target="_blank">
                <i class="material-icons">import_contacts</i>
                <span class="nav-text">Documentación</span>
              </a>
            </li>
            <li>
              <a href="../soporte/soporte.php" target="_blank">
                <i class="material-icons">help_outline</i>
                <span class="nav-text">Soporte</span>
              </a>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>
        ';

?>





 
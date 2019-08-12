 <?php  
 if(isset($_POST["val_cabecera"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT a.estado_feno, a.Ph, a.C_E, a.ndvi, a.nitrogeno, a.sat_hum,clorofila, a.cabecera_id,              id_analisis
        FROM analisis_foliares a
        LEFT JOIN cabecera_foliar c  ON  a.cabecera_id = c.id_cabecera WHERE c.id_cabecera= '".$_POST["val_cabecera"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
 
      while($row = mysqli_fetch_array($result))  
      { 
           $output .= '
    <div class="section">
     <div class="row">
         <div class=" col s12 m6 l6">
            <!--Estado fenológico -->
        <input type="hidden" id="id_vars_ana" value="'.$row["id_analisis"].'">
        <div class="browser-default col s12 m12 l12">
         <label>Estado fenológico</label>
         <select class="" name="estado_feno" id="estado_feno">
         <option value="'.$row["estado_feno"].'" selected>'.$row["estado_feno"].'</option> 
			<option value="Flecha">Flecha</option>
			<option value="Botón">Botón</option>
            <option value="Floriación">Floriación</option>
            <option value="Llenado del fruto">Llenado del fruto</option>
            <option value="Cosecha">Cosecha</option> 
         </select>
         </div> 
 
        </div>
                <div class=" col s12 m6 l6">
        <select class="" name="co_o_mo" id="co_o_mo">
            <option value="" selected><b>Val nitrógeno</b></option>
            <option value="mo">M.O</option>
            <option value="co">C.O</option>
         </select>
        <select class="" name="tipo_clima" id="tipo_clima">
            <label><b>Clima</b></label>
            <option value="" selected><b>Tipo clima</b></option>
            <option value="clma_frio">Frio</option>
            <option value="clma_medio">Medio</option>
            <option value="clma_calido">Calido</option>
            </select>
            
            <div class="col l2 s12 m2 teal-text"><span id="nitro_total">N.TOTAL</span></div>
            <div class="col l2 s12 m2 teal-text"><span id="nitro_dispon">N.DISP</span></div>
            <div class="col l2 s12 m2 teal-text"><span id="nitro_suelo_ppm">N.PPM</span></div>
        </div>
        </div>
 
      <div class="row">
        <div class="col s12 m6 l6"> 
            <div class="col s12 m12 l2">
            <label class="orange-text">PH</label>
            <input type="text" id="ph" name="ph" value="'.$row["Ph"].'" required>
            <span class="verticaltx orange-text" id="inter_ph"></span>
            </div>         
            <!-- //-->    
            <div class="col s12 m12 l2">
            <label class="teal-text">C.E</label>
            <input type="text" id="ce" name="ce" value="'.$row["C_E"].'" required>
            <span class="verticaltx teal-text" id="inter_ce"></span>
            </div>          
            <!-- //-->    
            <div class="col s12 m12 l2">
            <label class="red-text">NDVI</label>
            <input type="text" id="ndvi" name="ndvi" value="'.$row["ndvi"].'" required>
            <span class="verticaltx red-text" id="inter_ndvi"></span>
            </div>                      
            <!-- //-->    
            <div class="col s12 m12 l2">
            <label class="green-text">CLOROFILA %</label>
            <input type="text" id="clorofila" name="clorofila" value="'.$row["clorofila"].'" required>
            <span class="verticaltx green-text" id="inter_cloro"></span>
            </div>
                <!-- //-->    
            <div class="col s12 m12 l2">
            <label class="blue-text">SAT HUM %</label>
            <input type="text" id="sat_hum" name="sat_hum" value="'.$row["sat_hum"].'" required>
            <span class="verticaltx blue-text" id="inter_sat_hum"></span>
            </div>               
            <!-- //-->    
            <div class="col s12 m12 l2">
            <label class="teal-text">NITRÓGENO</label>
            <input type="number" id="nitro" name="nitro" value="'.$row["nitrogeno"].'" required>
            <span class="verticaltx teal-text" id="inter_nitrogeno">Eficiente</span>
            </div><br><br>
            <input type="button" name="" id="variables_control"
            class="waves-light btn green right e_vars_foliar"  value="Editar"/><br>
             <span class="red-text" id="msg_error_edit"></span><br>
             <span class="green-text" id="msg_exito_edit"></span>
        </div> 

        <div class="col s12 m6 l6">
                <div class="chart-container">
                <canvas id="v-foliar"  width="800" height="400px"></canvas>
                </div>  
                <a id="actu_gra" class="waves-effect waves-light blue-text right">Actualizar gráfico</a>
        </div>
 
 
      </div>

    </div>
           '; 
 
        $output.='
                 <ul class="collapsible">
                <li>
                <div id="'.$row["cabecera_id"].'" class="collapsible-header carga_elementos"><i class="material-icons teal-text">grain</i>Elementos de este análisis foliar...
                  </div>
                  <div class="collapsible-body" id ="cargar_elementos">
                
          
                  </div>
                  </div>
                </li>
      
              </ul>
        ';
      }  
      echo $output;  
     
 }  
 ?>
<style>
    .verticaltx {
    writing-mode: vertical-lr;
    transform: rotate(180deg);
}
@media screen and (max-width: 992px) {
    .verticaltx {
    writing-mode: horizontal-tb;
    transform: rotate(-90deg);
    }
}
@media screen and (max-width: 600px) {
    .verticaltx {
        writing-mode: horizontal-tb;
        transform: rotate(-90deg);
    }
}
</style>
<script>
    $(document).ready(function() {
       $('.collapsible').collapsible();   
       $('.tooltipped').tooltip({delay: 50});
        $('select').material_select();
    });
</script>
 
 <script type="text/javascript" language="javascript" src="../../model/m.analisis_foliar/estimacion_anafoliar_get.js"></script>

 <?php  
//Este me permite seleccionar las variables más significativas del suelo para el análisis de suelo ya creado

 if(isset($_POST["val_cabecera"]))   //id del analisis de suelo
 {  
      $output = '';  
      include('../../db/dbconnect.php'); //incluir la conexión a la base de datos
     
     //:inicio:realizar la consulta:
      $query = "SELECT a.id_analisis, a.Textura, a.Ph, a.C_E, a.C_I_C_E, a.salinidad, a.cabecera_id
	  FROM analisis_suelos a LEFT JOIN cabecera_suelo c  ON  a.cabecera_id = c.id_cabecera 
	  WHERE c.id_cabecera= '".$_POST["val_cabecera"]."'"; 
      //:fin:
     
      $result = mysqli_query($conexion, $query);  
     //:inicio: obtener la información detallada
      while($row = mysqli_fetch_array($result))  
      { 
           $output .= '
             
            <div  class="row col s12 m12 l12">
            <h5 class="center green-text">Variables significativas de este análisis de suelo.</h5><br>
            <div class="row col s12 m12 l4">
            <input type="hidden" id="id_vars_ana" value="'.$row["id_analisis"].'">
            </div>
            </div>
            <!-- -->
                <div class="row">
                <div class="col s12 m12 l12">
                <div class="browser-default">
                    <label>Textura del suelo</label>
                    <select class="" name="val_textura" id="val_textura">
                    <option value="'.$row["Textura"].'">'.$row["Textura"].'</option> 
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
                    </select>
                    <label>Textura del suelo</label>
                    </div>    
                
                </div> 
                    <!-- -->
            <div class="row input-field col s12 m12 l3">
              <input id="val_ph" type="text" value="'.$row["Ph"].'" class="validate">
              <label class="active green-text" for="val_ph">PH</label>
              <span class="green-text" id="inter_ph"></span>
            </div>
            <!-- -->
            <div class="row input-field col s12 m12 l3">
              <input id="val_ce" type="text" value="'.$row["C_E"].'" class="validate">
              <label class="active orange-text" for="val_ce">C.E</label>
              <span class="orange-text" id="inter_ce">Muy bajo</span>
            </div>      
                <!-- -->    
            <div class="row input-field col s12 m12 l3">
              <input id="val_cice" type="text" value="'.$row["C_I_C_E"].' " class="validate">
              <label class="active red-text" for="val_cice">C.I.C.E</label>
               <span class="red-text" id="inter_cice">Muy bajo</span>
            </div>       
                <!-- -->
            <div class="input-field col s12 m12 l3">
              <input id="val_salinidad" type="text" value="'.$row["salinidad"].'" class="validate">
              <label class="active blue-text" for="val_salinidad">SALINIDAD</label>
               <span class="blue-text" id="inter_sal">Alto</span><br>
                </div>    
                    
                </div>     
        <!-- fila para el gráfico -->
                <div class ="row">
                <div class="col s12 l12 m12">
                <input type="button" name="edita_vars_suelo_ana" id="variables_control" class="waves-light btn green right e_vars_suelo"  value="Editar"/>
                <span class="red-text" id="msg_error_edit"></span>
                <span class="teal-text" id="msg_exito_edit"></span><br>  
                  
                   <br><br>
                      <div class="chart-container" style="position: relative;">
                      <canvas id="v-suelos"  width="1280" height="400px"></canvas><br>
                      <a id="actu_gra" class="waves-effect waves-light red-text right">Actualizar gráfico</a>  
                      </div>  
                  </div><br><br>
            </div><br>
 

 
 
           '; 
          
        $output.='
               <ul class="collapsible">
                <li>
                <div id="'.$row["cabecera_id"].'" name="elements" class="collapsible-header carga_elementos"><i class="material-icons">grain</i>Elementos de este análisis de suelo... <span id="result" class="right"></span></div>
                  <div class="collapsible-body" id="cargar_elementos" style="">
                
          
                  </div>
                  </div>
                </li>
              </ul>
        ';
      }  
     //:fin:
     
     //:inicio: renderizar la información en el template
      echo $output;  
     
 }  
 ?>

<!--Se agregan estos arcivos javascript para ejecutar elementos del DOM -->
<script>
    $(document).ready(function() {
       $('.collapsible').collapsible();   
       $('.tooltipped').tooltip({delay: 50});
        $('select').material_select();
    });
</script>
<script type="text/javascript" language="javascript" src="../../model/m.analisis_suelo/estimacion_anasuelos_get.js"></script>


 
 

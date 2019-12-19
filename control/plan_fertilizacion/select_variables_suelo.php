 <?php  
 if(isset($_POST["val_cabecera"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT a.id_analisis, a.Textura, a.Ph, a.C_E, a.C_I_C_E, a.salinidad, a.cabecera_id FROM analisis_suelos a
                LEFT JOIN cabecera_suelo c  ON  a.cabecera_id = c.id_cabecera WHERE c.id_cabecera= '".$_POST["val_cabecera"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
 
      while($row = mysqli_fetch_array($result))  
      { 
           $output .= '
        <div class="card-panel white">   
        <h6 class="center green-text">Variables significativas de este análisis de suelo.</h6>
            <div class="row col s12 l4">
            <input type="hidden" id="id_vars_ana" value="'.$row["id_analisis"].'">
                    <div class="input-field">
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
              <div class="row">
            <div class="input-field col s12 l4">
              <input id="val_ph" type="text" value=" '.$row["Ph"].'" class="validate">
              <label class="active" for="ph">Ph</label>
            </div>
              </div>
            <div class="row">
            <div class="input-field col s12 l4>
              <input id="val_ce" type="text" value="'.$row["C_E"].'" class="validate">
              <label class="active" for="Ce">C.E</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12 l4">
              <input id="val_cice" type="text" value="'.$row["C_I_C_E"].' " class="validate">
              <label class="active" for="cice">C.I.C.E</label>
            </div> 
            </div>
            
            <div class="row">
            <div class="input-field col s12 l4">
              <input id="val_salinidad" type="text" value="'.$row["salinidad"].'" class="validate">
              <label class="active" for="salinidad">Salinidad</label>
            </div><br>
            </div>
            <div class="row">
            <input type="button" name="edita_vars_suelo_ana" id="variables_control" class="waves-light btn  lighten-4 right e_vars_suelo"  value="Editar"/>
             <span class="red-text" id="msg_error_edit"></span>
             <span class="green-text" id="msg_exito_edit"></span>
            </div>

                
        
            
         
            


          </div> 
    </div>
         
           '; 
          
        $output.='
                 <ul class="collapsible">
                <li>
                <div id="'.$row["cabecera_id"].'" class="collapsible-header carga_elementos"><i class="material-icons">lock_open</i>Elementos de este análisis de suelo...
                  </div>
                  <div class="collapsible-body" id ="cargar_elementos">
                  <span>Lorem ipsum dolor sit amet.</span>
                  ddd
                  </div>
                </li>
      
              </ul>
        ';
      }  
 

     
      echo $output;  
     
 }  
 ?>

<script>
    $(document).ready(function() {
       $('.collapsible').collapsible();   
       $('.tooltipped').tooltip({delay: 50});
        $('select').material_select();
    });
</script>
 
 
 

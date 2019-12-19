 
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
                <input type="button" name="edita_vars_suelo_ana" id="variables_control" class="waves-light btn green left e_vars_suelo"  value="Editar"/>
                <span class="red-text" id="msg_error_edit"></span>
                <span class="green-text" id="msg_exito_edit"></span><br>  
                  
                   <br><br>
                      <div class="chart-container" style="position: relative;">
                      <canvas id="v-suelos"  width="1280" height="400px"></canvas><br>
                      <a id="actu_gra" class="waves-effect waves-light red-text right">Actualizar gráfico</a>  
                      </div>  
                  </div><br><br>
            </div><br>
 

 
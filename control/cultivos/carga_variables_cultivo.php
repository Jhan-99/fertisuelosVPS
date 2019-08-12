 <?php  
 if(isset($_POST["id_cultivo"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
            $query = "SELECT a.id_varsig, a.textura, a.ph, a.ce, a.cice, a.salinidad, a.id_cultivo FROM vars_significativas_cultivo a
                LEFT JOIN cultivos c  ON  a.id_cultivo = c.id_cultivo WHERE c.id_cultivo = '".$_POST["id_cultivo"]."'";  
      
      $result = mysqli_query($conexion, $query);  
     if(mysqli_num_rows($result) > 0)  
      { 
      while($row = mysqli_fetch_array($result))  
      { 
           $output .= '
        <div class="card-panel white">   
            <div class="row">
            <form id="form-vars">
            <input type="hidden" id="id_cultivo_req" value="'.$row["id_cultivo"].'">
                <div class="browser-default col s12 m12 l12">
                        <label>Textura en el suelo</label>
                    <select class="browser-default" name="val_textura_c" id="val_textura_c">
                    <option value="'.$row["textura"].'">'.$row["textura"].'</option> 
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
                    </div>
                    
              
              <div class="input-field col s12 m12 l3">
              <input id="val_ph_c" type="text" value="'.$row["ph"].'" class="validate">
              <label class="active green-text" for="val_ph_c">PH</label>
              <span class="green-text" id="inter_ph"></span>
            </div>
                
            <div class="input-field col s12 m12 l3">
              <input id="val_ce_c" type="text" value="'.$row["ce"].'" class="validate">
              <label class="active orange-text" for="val_ce_c">C.E</label>
            </div>     
            
            <div class="input-field col s12 m12 l3">
              <input id="val_cice_c" type="text" value="'.$row["cice"].' " class="validate">
              <label class="active red-text" for="val_cice_c">C.I.C.E</label>
            </div>          
            
            <div class="input-field col s12 m12 l3">
              <input id="val_salinidad_c" type="text" value="'.$row["salinidad"].'" class="validate">
              <label class="active blue-text" for="val_salinidad_c">SALINIDAD</label>
            </div><br>
             <input type="button" name="" id="variables_control" class="waves-light btn green right edita_vars_suelo_cul"  value="Editar"/>
             <span class="red-text" id="msg_error_edit"></span>
             <span class="green-text" id="msg_exito_edit"></span><br>  
             </form>
          </div> 
          
    </div>
           '; 
		        $output.='
                 <ul class="collapsible">
                <li>
                <div id="'.$row["id_cultivo"].'" class="collapsible-header cargar_elementos"><i class="material-icons">grain</i>Elementos nutricionales para éste cultivo...
                  </div>
                  <div class="collapsible-body" id ="">
                <form method="post" id="update_form">
                    <div align="right">
                        <input type="submit" name="multiple_update" id="multiple_update" class="waves-light btn green" value="Actualizar" />
                    </div>              
                    <br />	
                    <div class="table-responsive">
                        <table class="responsive-table display highlight bordered striped" cellspacing="0"
                            <thead>
                                <th width="5%">Editar</th>
                                <th width="5%">Valor</th>
                                <th width="15%">Descripción</th>
                                <th width="10%">Etiqueta</th>
                                <th width="10%">Nombre</th>
                                <th width="3%">Cultivo</th>
                            </thead>
                            <tbody id="elementos_cul"></tbody>
                        </table>
                    </div>  
                </form>          
                  </div>
                  </div>
                </li>
      
              </ul>
        ';
 
		  
      } 
 
 
 
     }else {
         $output .= '<span class="red-text">No hay datos para este cultivo</span>';
     }
     
      echo $output;  
     
 }  
 ?>

<script>
    $(document).ready(function() {
       $('.collapsible').collapsible();   
       $('.tooltipped').tooltip({delay: 50});
		$('select').material_select();
		
		$('#update_form').on('submit', function(event){
        event.preventDefault();
        if($('.check_box:checked').length > 0)
        {
            $.ajax({
                url:"../../control/cultivos/actualizar_req_nut_cultivo.php",
                method:"POST",
                data:$(this).serialize(),
                success:function()
                {
                    alert('Datos actualizados');
                }
            })
        }else{
			alert("No hay datos para guardar");
		}
    });
		
    });
</script>

 

 
 

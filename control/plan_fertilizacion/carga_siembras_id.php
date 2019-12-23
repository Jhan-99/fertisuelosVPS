 <?php  
 //Cargar los detalles de las siembras
 include('../../db/dbconnect.php');   //incluir la conexión              
 include('estados-fenologicos.php');   //incluir la conexión              
 $output = '';  
 if(isset($_POST["id_siembra"]))  
 {  
      if($_POST["id_siembra"] != '')  
      {  
           $sql = "SELECT * FROM siembras WHERE id_siembra = '".$_POST["id_siembra"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM siembras";  
      }  
      $result = mysqli_query($conexion, $sql);    
        
       
      while($row = mysqli_fetch_array($result))  
      { 
          if($row['Cultivo_siembra'] == '88') {
            $estado_fenologico    = $estado_guayaba;       
          }elseif($row['Cultivo_siembra'] == '92'){
              $estado_fenologico = $estado_mora;      
          }elseif($row['Cultivo_siembra'] == '89'){
              $estado_fenologico = $estado_durazno;
          }
          
              
           $output .= '<input type="hidden" name="id_siembra" id="id_siembra" value="'.$row["id_siembra"].'">';  
           $output .= '
           <div class="input-field col s12 m12 l4">
            <input type="text" name="Descripcion_siembra" id="Variedad_cultivo" value="'.$row["Descripcion_siembra"].'" readonly>
            <label for="Descripcion_siembra" class="active">Descripcion siembra</label>
            </div>';
            $output .= '
           <div class="input-field col s12 m12 l2">
            <input type="text" name="N_plantas_siembra" id="N_plantas_siembra" value="'.$row["N_plantas_siembra"].'" readonly>
            <label for="N_plantas_siembra" class="active">No. Plantas</label>       
            </div>       
            <div class="input-field col s12 m12 l2">
            <input type="text" name="Lote" id="Lote" value="'.$row["Lote"].'" readonly>
            <label for="Lote" class="active">Lote</label>         
            </div>
 
			<div class="input-field col s12 m12 l3">
            <input type="text" name="Departamento" id="Departamento" value="'.$row["Departamento"].'" readonly>
            <label for="Lote" class="active">Departamento</label>
            </div>			
			
			<div class="input-field col s12 m12 l2">
            <input type="text" name="Municipio" id="Municipio" value="'.$row["Municipio"].'" readonly>
            <label for="Lote" class="active">Municipio</label>
            </div>
			
			<div class="input-field col s12 m12 l3">
            <input type="text" name="Vereda" id="Vereda" value="'.$row["Vereda"].'" readonly>
            <label for="Lote" class="active">Vereda</label>
            </div><br>
			 
            <div class="row col s12 m12 l4">
              <label>Estado fenológico</label>
               '.$estado_fenologico.'
                
              </div>
              
			</div>	';

      }    
      echo $output;  
 }  
 ?>  

<script>
  $(document).ready(function() {
    $('select').material_select();
  });
        $('#estado_fenologico').change(function(){  
            var est_fenologico = $('#estado_fenologico').val();
            
            var cod_siembra = $('option:selected', '#Siembra_id').attr('codcult');
                if (est_fenologico == ''){
				alert('Selecciona un estado fenológico');
				}else
					{
				 $.ajax({  
				 url:"../../control/plan_fertilizacion/reqs_est_fenologico.php",  
                 method:"POST",  
                 data:{est_fenologico:est_fenologico,cod_siembra:cod_siembra},  
                 success:function(data){   
                 $('#reqs_estado_fenolog').html('');         
                 $('#reqs_estado_fenolog').append(data);         
				 }  
                    });  	
						
					}
            
            
            
            });
    
</script>

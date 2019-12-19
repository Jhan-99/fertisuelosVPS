 <?php  
 //Cargar los detalles de las siembras
 include('../../db/dbconnect.php');   //incluir la conexión              
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
                <select class="icons" name="guayaba_fenologico" id="estado_fenologico">
                <option value="" disabled selected></option>
                <option value="1" data-icon="../../images/fenologico-guayaba/yema_floral.png" class="circle">Yema Floral</option>
                <option value="1" data-icon="../../images/fenologico-guayaba/flor_abierta.png" class="circle">Flor Abierta</option>
                <option value="1" data-icon="../../images/fenologico-guayaba/flor_seca.png" class="circle">Flor Seca</option>
                <option value="2" data-icon="../../images/fenologico-guayaba/fruto_cuajado.png" class="circle">Fruto Cuajado</option>
                <option value="2" data-icon="../../images/fenologico-guayaba/fruto_inmaduro.png" class="circle">Fruto Inmaduro</option>
                  <option value="3" data-icon="../../images/fenologico-guayaba/fruto_madurez_fisiologica.png" class="circle">Madurez Fisiológica</option>
                  <option value="3" data-icon="../../images/fenologico-guayaba/fruto_pinton.jpg" class="circle">Fruto Pintón</option>
                  <option value="3" data-icon="../../images/fenologico-guayaba/cosecha.png" class="circle">Cosecha</option>
                </select>          
                
 
                
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

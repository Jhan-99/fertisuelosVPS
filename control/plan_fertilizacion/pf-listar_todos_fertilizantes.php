  <?php
 
 if(isset($_POST["listar"]))  
 {  
      $output = '';   
      include('../../db/dbconnect.php');                                                                
      $query = "SELECT * FROM fertilizantes"; 
      $result = mysqli_query($conexion, $query);  
	  $fila = mysqli_num_rows($result);
	  if($fila>0){
      while($row = mysqli_fetch_array($result)) 
      { 
      $output .= '
	  <tr class="">
	  <td>'.$row["Nombre_fertilizante"].'</td>
	  <td><a href="javascript:void(0);"  value="" id="'.$row["id_fertilizante"].' main" codfer="'.$row["Codigo_fertilizante"].'" class="waves-effect waves-light black-text ver_detalles main tooltipped" data-position="bottom" data-tooltip="'.$row["Nombre_fertilizante"].'"><i class="material-icons blue-text center">help</i></a></td>
	  
	  <td>
	  <div class="switch">
		<label>
		  <input class="'.$row["Codigo_fertilizante"].' red"  name="'.$row["Nombre_fertilizante"].'" id="'.$row["Codigo_fertilizante"].'" comp="'.$row["Composicion_fertilizante"].'" estado="'.$row["Estado_fertilizante"].'" codfer="'.$row["Codigo_fertilizante"].'"  type="checkbox">
		  <span class="lever"></span>
		</label>
	  </div>
	  
	  </td>
	  
	  </tr>
	  ';        
      } 
      echo $output;  
		  }else{
		  
		  echo "Error al cargar los fertilizantes";
	  }
 } 

?>
 
<script>
  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
</script>
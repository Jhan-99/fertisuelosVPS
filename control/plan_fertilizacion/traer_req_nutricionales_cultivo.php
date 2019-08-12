 <?php  
//cargar los reuerimientos nutricionales para el cultivo en tarjeticas
 if(isset($_POST["codgo_cult"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT u.id_req, u.nombre_req, u.descripcion_req, u.valor_req, u.etiqueta, u.id_cultivo FROM req_nutricionales_cultivo u
      LEFT JOIN cultivos t  ON  u.id_cultivo = t.id_cultivo WHERE t.id_cultivo = '".$_POST["codgo_cult"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
      while($row = mysqli_fetch_array($result))  
      { 
        $output .= '
		<p class=" '.$row["etiqueta"].' chip white-text">'.$row["nombre_req"].': => '.$row["valor_req"].' Kg/Ha</p>';      
      }  
     
      echo $output;   
 } 

if(isset($_POST["codgo_cult_inputs"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT u.id_req, u.nombre_req, u.descripcion_req, u.valor_req, u.etiqueta, u.id_cultivo FROM req_nutricionales_cultivo u
      LEFT JOIN cultivos t  ON  u.id_cultivo = t.id_cultivo WHERE t.id_cultivo = '".$_POST["codgo_cult_inputs"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
      while($row = mysqli_fetch_array($result))  
      { 
        $output .= '
		<input type="text" id="RC_'.$row["nombre_req"].'" class="'.$row["etiqueta"].'" value="'.$row["valor_req"].'">
		';      
      }  
     
      echo $output;   
 }  

if(isset($_POST["id_cult_var"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT u.id_req, u.nombre_req, u.descripcion_req, u.valor_req, u.etiqueta, u.id_cultivo FROM req_nutricionales_cultivo u
      LEFT JOIN cultivos t  ON  u.id_cultivo = t.id_cultivo WHERE t.id_cultivo = '".$_POST["id_cult_var"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
      while($row = mysqli_fetch_array($result))  
      { 
        $output .= '
		<input type="text" inter="" value="'.$row["valor_req"].'" id="D_'.$row["nombre_req"].'"/>';      
      }  
     
      echo $output;   
 }  
 ?>
<script>
    $(document).ready(function() {
       $('.collapsible').collapsible();   
       $('.tooltipped').tooltip({delay: 50});
    });
</script>
 


 
 
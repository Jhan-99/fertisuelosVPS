 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["ph"]))  
 {  
      $id_vars = mysqli_real_escape_string($conexion, $_POST["id_vars"]);  
      $ph = mysqli_real_escape_string($conexion, $_POST["ph"]);  
      $ce = mysqli_real_escape_string($conexion, $_POST["ce"]);  
      $ndvi = mysqli_real_escape_string($conexion, $_POST["ndvi"]);  
      $nitrogeno = mysqli_real_escape_string($conexion, $_POST["nitrogeno"]);  
      $estado_feno = mysqli_real_escape_string($conexion, $_POST["estado_feno"]);  
      $sat_hum = mysqli_real_escape_string($conexion, $_POST["sat_hum"]);  
      $clorofila = mysqli_real_escape_string($conexion, $_POST["clorofila"]);  
      //--------------//

        $sql = "UPDATE analisis_foliares SET
        Ph='$ph',C_E='$ce',ndvi='$ndvi',
        nitrogeno='$nitrogeno',clorofila='$clorofila',estado_feno='$estado_feno',sat_hum='$sat_hum'
        WHERE id_analisis = '$id_vars'"; 
    
      if(mysqli_query($conexion, $sql))  
      {  
      echo "Editado correctamente"; 
      } else{
		        echo "ERROR... ):"; 

	  }          
 }  

 ?>
 
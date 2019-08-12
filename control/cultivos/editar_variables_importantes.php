 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["val_ph"]))  
 {  
      
      $id_cultivo_req = mysqli_real_escape_string($conexion, $_POST["id_cultivo_req"]);  
      $val_textura = mysqli_real_escape_string($conexion, $_POST["val_textura"]);  
      $val_ph = mysqli_real_escape_string($conexion, $_POST["val_ph"]);  
      $val_ce = mysqli_real_escape_string($conexion, $_POST["val_ce"]);  
      $val_cice = mysqli_real_escape_string($conexion, $_POST["val_cice"]);  
      $val_salinidad = mysqli_real_escape_string($conexion, $_POST["val_salinidad"]);  
      //--------------//
 
      $sql = "UPDATE vars_significativas_cultivo SET textura='$val_textura',ph='$val_ph',ce='$val_ce',cice='$val_cice',salinidad='$val_salinidad' WHERE id_cultivo = '$id_cultivo_req'";  
    
    if (mysqli_query($conexion, $sql)) {
     echo "<span class='green-text'>Operación exitosa</span>";
    } else {
        echo "<span class='red-text'>Error:</span>" . $sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
            
 }  

 ?>

<script>
 $(document).ready(function(){
    
  });
       
</script>
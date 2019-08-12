 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["val_ph"]))  
 {  
      
      $id_vars_ana = mysqli_real_escape_string($conexion, $_POST["id_vars_ana"]);  
      $val_textura = mysqli_real_escape_string($conexion, $_POST["val_textura"]);  
      $val_ph = mysqli_real_escape_string($conexion, $_POST["val_ph"]);  
      $val_ce = mysqli_real_escape_string($conexion, $_POST["val_ce"]);  
      $val_cice = mysqli_real_escape_string($conexion, $_POST["val_cice"]);  
      $val_salinidad = mysqli_real_escape_string($conexion, $_POST["val_salinidad"]);  
      //--------------//
 
      $sql = "UPDATE analisis_suelos SET Textura='$val_textura',Ph='$val_ph',C_E='$val_ce',C_I_C_E='$val_cice',salinidad='$val_salinidad' WHERE id_analisis = '$id_vars_ana'";  
    
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
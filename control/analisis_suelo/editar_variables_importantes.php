 <?php  
 //insert.php  
include('../../db/dbconnect.php');
//edita las variables del suelo en la creación del análisis de suelo
if(isset($_POST["ph"]))  
 {  
      $id_cab_suelo = mysqli_real_escape_string($conexion, $_POST["id_cab_suelo"]);  
      $textura = mysqli_real_escape_string($conexion, $_POST["textura"]);  
      $val_textura = mysqli_real_escape_string($conexion, $_POST["val_textura"]);  
      $ph = mysqli_real_escape_string($conexion, $_POST["ph"]);  
      $ce = mysqli_real_escape_string($conexion, $_POST["ce"]);  
      $cice = mysqli_real_escape_string($conexion, $_POST["cice"]);  
      $salinidad = mysqli_real_escape_string($conexion, $_POST["salinidad"]);  
      $densidad_aparente = mysqli_real_escape_string($conexion, $_POST["densidad_aparente"]);  
      //--------------//
      $sql = "UPDATE analisis_suelos SET val_textura='$val_textura',Textura='$textura',Ph='$ph',C_E='$ce',C_I_C_E='$cice',salinidad='$salinidad', densidad='$densidad_aparente' WHERE cabecera_id = '$id_cab_suelo'";  
    
    if (mysqli_query($conexion, $sql)) {
     echo "Se ha actualizado el clima";
    } else {
        echo "Error al actualizar el clima" . $sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
            
 }  


//edita las variables del suelo en el panel de administración
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
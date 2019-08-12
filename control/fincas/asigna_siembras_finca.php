 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["finca_val"],$_POST["val_siembra"]))      
 {       
      $finca_val = mysqli_real_escape_string($conexion, $_POST["finca_val"]);  
      $val_siembra = mysqli_real_escape_string($conexion, $_POST["val_siembra"]);  
    
$sql1 = "SELECT * FROM siembras_finca  WHERE id_finca = '".$finca_val."' AND id_siembra = '".$val_siembra."'";
$resultado= $conexion->query($sql1);
$fila = mysqli_num_rows($resultado);
    if($fila>0){
        echo"Esta asignación ya se realizó";  
    }else{
    $sql = "INSERT INTO siembras_finca(id_finca,id_siembra) VALUES ('".$finca_val."','".$val_siembra."')";  
        if(mysqli_query($conexion, $sql)) {  
               echo "Asignación correcta";  
          } else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);    
        }  
    }

     }  
 ?>
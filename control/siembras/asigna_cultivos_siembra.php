 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["val_cultivo"],$_POST["val_siembra"]))      
 {  
     
      $val_cultivo = mysqli_real_escape_string($conexion, $_POST["val_cultivo"]);  
      $val_siembra = mysqli_real_escape_string($conexion, $_POST["val_siembra"]);  
 
     
$sql1 = "SELECT * FROM cultivos_siembra  WHERE id_siembra = '".$val_siembra."' AND id_cultivo = '".$val_cultivo."'";
$resultado= $conexion->query($sql1);
$fila = mysqli_num_rows($resultado);
    if($fila>0){
        echo"Esta asignación ya se realizó";  
    }else{
    $sql = "INSERT INTO cultivos_siembra(id_siembra,id_cultivo) VALUES ('".$val_siembra."','".$val_cultivo."')";  
        if(mysqli_query($conexion, $sql)) {  
               echo "Asignación correcta";  
          } else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);    
        }  
    }

     }  
 ?>
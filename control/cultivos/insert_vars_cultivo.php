 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["id_cultivo"]))      
 {  
     $id_cultivo = mysqli_real_escape_string($conexion, $_POST["id_cultivo"]);  
     $val_textura  = mysqli_real_escape_string($conexion, $_POST["val_textura"]);  
     $val_ph  = mysqli_real_escape_string($conexion, $_POST["val_ph"]);  
     $val_ce= mysqli_real_escape_string($conexion, $_POST["val_ce"]);  
     $val_cice   = mysqli_real_escape_string($conexion, $_POST["val_cice"]);  
     $val_salinidad   = mysqli_real_escape_string($conexion, $_POST["val_salinidad"]);  
    
$sql1 = "SELECT * FROM vars_significativas_cultivo  WHERE id_cultivo = '".$id_cultivo."'";
$resultado= $conexion->query($sql1);
$fila = mysqli_num_rows($resultado);
    if($fila>0){
        echo "<span class='red-text'>Este cultivo ya tiene variables del suelo asignadas</span>"; 
    }else{
    
        $sql = "INSERT INTO vars_significativas_cultivo(id_cultivo,textura,ph,ce,cice,salinidad) VALUES ('".$id_cultivo."','".$val_textura."', '".$val_ph."','".$val_ce."', '".$val_cice."', '".$val_salinidad."')";
        
        if(mysqli_query($conexion, $sql)) {  
            echo "<span class='green-text'>Operación exitosa</span>"; 
          } else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);    
        }  
    }

     } 


 ?>
 

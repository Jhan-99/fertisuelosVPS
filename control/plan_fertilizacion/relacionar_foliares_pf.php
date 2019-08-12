 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["cod_pf"], $_POST["id_anafoliar"]))      
 {  
    $cod_pf = mysqli_real_escape_string($conexion, $_POST["cod_pf"]);  
    $val_fol= mysqli_real_escape_string($conexion, $_POST["id_anafoliar"]);  

	$sql1 = "SELECT * FROM  anas_fol_pfertil  WHERE id_cabecera_fol = '".$val_fol."' AND id_p_fertil = '".$cod_pf."'";
 	$resultado = $conexion->query($sql1);
	$fila = mysqli_num_rows($resultado);
    if($fila>0){
           echo"No se puede relacionar dos veces";  
    }else{
    $sql = "INSERT INTO anas_fol_pfertil(id_cabecera_fol,id_p_fertil) VALUES ('".$val_fol."','".$cod_pf."')";  
        if(mysqli_query($conexion, $sql)) {  
               echo "Asignación correcta";  
          } else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);    
        }  
    }

     }  


	if(isset($_POST["cod_pf"], $_POST["id_anasuelo"]))      
 {  
    $cod_pf = mysqli_real_escape_string($conexion, $_POST["cod_pf"]);  
    $val_suel= mysqli_real_escape_string($conexion, $_POST["id_anasuelo"]);  

	$sql1 = "SELECT * FROM  anas_suel_pfertil  WHERE id_cabecera_suel = '".$val_suel."' AND id_p_fertil = '".$cod_pf."'";
 	$resultado = $conexion->query($sql1);
	$fila = mysqli_num_rows($resultado);
    if($fila>0){
        echo"No se puede relacionar dos veces";  
    }else{
    $sql = "INSERT INTO anas_suel_pfertil(id_cabecera_suel,id_p_fertil) VALUES ('".$val_suel."','".$cod_pf."')";  
        if(mysqli_query($conexion, $sql)) {  
               echo "Asignación correcta";  
          } else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);    
        }  
    }

     }  
 ?>


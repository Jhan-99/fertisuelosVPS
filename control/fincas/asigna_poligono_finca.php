 <?php  
 //insert.php asgina el mapa a la finca 
include('../../db/dbconnect.php');
if(isset($_POST["var_finca"],$_POST["iframe_finca"]))      
 {  
      $var_finca = mysqli_real_escape_string($conexion, $_POST["var_finca"]);  
      $identificador = mysqli_real_escape_string($conexion, $_POST["identificador"]);  
      $iframe_finca = mysqli_real_escape_string($conexion, $_POST["iframe_finca"]);  

    $sql = "INSERT INTO poligonos_shp(id_finca,identificador,url_poligono_arcgis) VALUES ('".$var_finca."','".$identificador."','".$iframe_finca."')";
        if(mysqli_query($conexion, $sql)) {  
               echo "Asignación correcta";  
          } else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);    
        }  
     }  
 ?>
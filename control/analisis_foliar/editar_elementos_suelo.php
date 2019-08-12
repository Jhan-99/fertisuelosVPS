 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["nitrogeno"]))  
 {  
      $codcab = mysqli_real_escape_string($conexion, $_POST["codcab"]);  
      $nitrogeno = mysqli_real_escape_string($conexion, $_POST["nitrogeno"]);  
      $fosforo = mysqli_real_escape_string($conexion, $_POST["fosforo"]);  
    
      //--------------//La interpretacion del análisis de suelo
      $inter_nitrogeno = mysqli_real_escape_string($conexion, $_POST["inter_nitrogeno"]);
      $inter_fosforo = mysqli_real_escape_string($conexion, $_POST["inter_fosforo"]);
            
    
          $sql = "UPDATE ana_suelo_elementos SET 
         
            (valor_resultado='".$nitrogeno."',metodo_extraccion='',interpretacion='$inter_nitrogeno',
            nombre_elemento='NITROGENO' WHERE cabecera_id = '$codcab'),
            
            (valor_resultado='".$fosforo."',metodo_extraccion='(Bray II - ppm',interpretacion='$inter_fosforo',nombre_elemento='FOSFORO' WHERE cabecera_id = '$codcab'),
            
                ";

    if (mysqli_multi_query($conexion, $sql)) {
        echo "Los elementos se han actalizado";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);

    
 }  
 
?>
 
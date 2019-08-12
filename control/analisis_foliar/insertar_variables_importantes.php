 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["ph"]))  
 {  
      $codcab = mysqli_real_escape_string($conexion, $_POST["codcab"]);  
      $ph = mysqli_real_escape_string($conexion, $_POST["ph"]);  
      $ce = mysqli_real_escape_string($conexion, $_POST["ce"]);  
      $ndvi = mysqli_real_escape_string($conexion, $_POST["ndvi"]);  
      $nitrogeno = mysqli_real_escape_string($conexion, $_POST["nitrogeno"]);  
      $estado_feno = mysqli_real_escape_string($conexion, $_POST["estado_feno"]);  
      $sat_hum = mysqli_real_escape_string($conexion, $_POST["sat_hum"]);  
      $clorofila = mysqli_real_escape_string($conexion, $_POST["clorofila"]);  
      //--------------//
 
      $sql = "INSERT INTO analisis_foliares(cabecera_id,Ph,C_E,ndvi,nitrogeno,clorofila,estado_feno,sat_hum) VALUES ('".$codcab."','".$ph."','".$ce."', '".$ndvi."', '".$nitrogeno."','".$clorofila."','".$estado_feno."','".$sat_hum."')";  
    
        if (mysqli_query($conexion, $sql)) {
     echo "<span class='green-text'>Operación exitosa</span> <a href='#' id='get_tab_for_element'>Continuar</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
            
 }  

 ?>

<script>
 $(document).ready(function(){
    $('.tabs').tabs();
    $('#get_tab_for_element').click(function(){
     $( "#el" ).removeClass( "disabled" );
    $('ul.tabs').tabs('select_tab', 'elementos');
    });
  });
       
</script>
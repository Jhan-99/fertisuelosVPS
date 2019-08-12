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

        $sql = "UPDATE analisis_foliares SET
        Ph='$ph',C_E='$ce',ndvi='$ndvi',
        nitrogeno='$nitrogeno',clorofila='$clorofila',estado_feno='$estado_feno',sat_hum='$sat_hum'
        WHERE cabecera_id = '$codcab'"; 
    
      if(mysqli_query($conexion, $sql))  
      {  
      echo "<span class='green-text'>Editado correctamente</span> <a href='#' id='get_tab_for_element'>Continuar</a>"; 
      }           
 }  

 ?>

<script>
 $(document).ready(function(){
    $('.tabs').tabs();
    $('#get_tab_for_element').click(function(){
   // $( "#el" ).removeClass( "disabled" );
    $('ul.tabs').tabs('select_tab', 'elementos');
    });
  });
       
</script>
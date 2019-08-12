 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["ph"]))  
 {  
      $codcab = mysqli_real_escape_string($conexion, $_POST["codcab"]);  
      $ph = mysqli_real_escape_string($conexion, $_POST["ph"]);  
      $ce = mysqli_real_escape_string($conexion, $_POST["ce"]);  
      $cice = mysqli_real_escape_string($conexion, $_POST["cice"]);  
      $salinidad = mysqli_real_escape_string($conexion, $_POST["salinidad"]);  
      $textura = mysqli_real_escape_string($conexion, $_POST["textura"]);  
      //--------------//

        $sql = "UPDATE analisis_suelos SET
        Ph='$ph',C_E='$ce',C_I_C_E='$cice',
        salinidad='$salinidad',Textura='$textura'
        WHERE cabecera_id = '$codcab'"; 
    
      if(mysqli_query($conexion, $sql))  
      {  
      echo "<span class='green-text'>Editado correctamente</span> <a href='#' id='get_tab_for_element_vi'>Continuar</a>"; 
      }           
 }  

 ?>

<script>
 $(document).ready(function(){
    $('.tabs').tabs();
    $('#get_tab_for_element_vi').click(function(){
     $( "#el" ).removeClass( "disabled" );
    $('ul.tabs').tabs('select_tab', 'elementos');
    });
  });
       
</script>
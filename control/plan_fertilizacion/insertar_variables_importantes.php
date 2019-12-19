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
 
      $sql = "INSERT INTO analisis_suelos(cabecera_id,Ph,C_E,C_I_C_E,salinidad,Textura) VALUES ('".$codcab."','".$ph."','".$ce."', '".$cice."', '".$salinidad."','".$textura."')";  
    
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
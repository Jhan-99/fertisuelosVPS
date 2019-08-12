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
      $val_textura = mysqli_real_escape_string($conexion, $_POST["val_textura"]);  
      $densidad_aparente = mysqli_real_escape_string($conexion, $_POST["densidad_aparente"]);  
      //--------------//
 
      $sql = "INSERT INTO analisis_suelos(cabecera_id,Ph,C_E,C_I_C_E,salinidad,Textura,val_textura,densidad) VALUES ('".$codcab."','".$ph."','".$ce."', '".$cice."', '".$salinidad."','".$textura."','".$val_textura."','".$densidad_aparente."')";  
    
        if (mysqli_query($conexion, $sql)) {
     echo "<span class='green-text'>Operación exitosa</span> <a href='#' id='get_tab_for_element'>Continuar</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
            
 }  

if(isset($_POST["clima"]))  {  
    
    $tipo_clima = mysqli_real_escape_string($conexion, $_POST["clima"]);  
    $cabecera = mysqli_real_escape_string($conexion, $_POST["cabecera"]);  
    $co_o_mo = mysqli_real_escape_string($conexion, $_POST["co_o_mo"]);  
    
     $sql = "UPDATE analisis_suelos SET tipo_clima='$tipo_clima', C_O_M_O_valor='$co_o_mo' WHERE cabecera_id = '$cabecera'";  
    
       if (mysqli_query($conexion, $sql)) {
            
     echo "<span class='green-text'>Se ha editado</span>";
    } else {
        echo "<span class='red-text'>Error:</span>" . $sql . "<br>" . mysqli_error($conexion);
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
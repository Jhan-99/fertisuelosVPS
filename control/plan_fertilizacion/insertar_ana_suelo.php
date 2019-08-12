 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["Nombre_programa"]))  
 {  
      $codcab = mysqli_real_escape_string($conexion, $_POST["codcab"]);  
      $Nombre_programa = mysqli_real_escape_string($conexion, $_POST["Nombre_programa"]);  
      $Propietario = mysqli_real_escape_string($conexion, $_POST["Propietario"]);  
      $Asistente_tecnico = mysqli_real_escape_string($conexion, $_POST["Asistente_tecnico"]);  
      $Fecha_muestreo = mysqli_real_escape_string($conexion, $_POST["Fecha_muestreo"]);  
      $Fecha_recepcion = mysqli_real_escape_string($conexion, $_POST["Fecha_recepcion"]);  
      $id_cultivo = mysqli_real_escape_string($conexion, $_POST["id_cultivo"]);  
      //--------------//
      $Departamento = mysqli_real_escape_string($conexion, $_POST["Departamento"]);  
      $Municipio = mysqli_real_escape_string($conexion, $_POST["Municipio"]);  
      $Finca = mysqli_real_escape_string($conexion, $_POST["Finca"]);  
      $sql = "INSERT INTO cabecera_suelo(id_cabecera,Nombre_programa,Propietario,Asistente_tecnico,Fecha_muestreo,Fecha_recepcion,Cultivo_id,Departamento,Municipio,Finca) VALUES ('".$codcab."','".$Nombre_programa."','".$Propietario."', '".$Asistente_tecnico."', '".$Fecha_muestreo."'
      ,'".$Fecha_recepcion."','".$id_cultivo."','".$Departamento."','".$Municipio."','".$Finca."')";  
    
    
    if (mysqli_query($conexion, $sql)) {
        echo "<span class='green-text'>Se ha guardado el análisis</span> 
        <a href='#' class='get_tab_for_var'>Continuar</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
 }  


    
 ?>

<script>
 $(document).ready(function(){
        $('.tabs').tabs();
        $(document).on('click', '.get_tab_for_var', function(){   
        $('#vars_s').removeClass('disabled');
        $('ul.tabs').tabs('select_tab', 'vars_sign');
    });
     
  });     
</script>


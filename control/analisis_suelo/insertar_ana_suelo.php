 <?php  
 //Permite insertar un análisis de suelo
include('../../db/dbconnect.php');
if(isset($_POST["Nombre_programa"]))  
 {  
      $codcab = mysqli_real_escape_string($conexion, $_POST["codcab"]);  
      $Nombre_programa = mysqli_real_escape_string($conexion, $_POST["Nombre_programa"]);  
      $No_zona= mysqli_real_escape_string($conexion, $_POST["No_zona"]);  
      $Propietario = mysqli_real_escape_string($conexion, $_POST["Propietario"]);  
      $Asistente_tecnico = mysqli_real_escape_string($conexion, $_POST["Asistente_tecnico"]);  
      $Fecha_muestreo = mysqli_real_escape_string($conexion, $_POST["Fecha_muestreo"]);  
      $Fecha_recepcion = mysqli_real_escape_string($conexion, $_POST["Fecha_recepcion"]);  
      $id_siembra = mysqli_real_escape_string($conexion, $_POST["id_siembra"]);  
      //--------------//
      $Departamento = mysqli_real_escape_string($conexion, $_POST["Departamento"]);  
      $Municipio = mysqli_real_escape_string($conexion, $_POST["Municipio"]);  
      $Finca = mysqli_real_escape_string($conexion, $_POST["Finca"]);  
      $sql = "INSERT INTO cabecera_suelo(id_cabecera,Nombre_programa,No_zona,Propietario,Asistente_tecnico,Fecha_muestreo,Fecha_recepcion,Siembra_id,Departamento,Municipio,Finca) VALUES ('".$codcab."','".$Nombre_programa."','".$No_zona."','".$Propietario."', '".$Asistente_tecnico."', '".$Fecha_muestreo."'
      ,'".$Fecha_recepcion."','".$id_siembra."','".$Departamento."','".$Municipio."','".$Finca."')";  
    
    
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


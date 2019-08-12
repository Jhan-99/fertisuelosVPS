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
      $Momento_muestreo = mysqli_real_escape_string($conexion, $_POST["Momento_muestreo"]);  
      $id_siembra = mysqli_real_escape_string($conexion, $_POST["id_siembra"]);  
      //--------------//
      $Departamento = mysqli_real_escape_string($conexion, $_POST["Departamento"]);  
      $Municipio = mysqli_real_escape_string($conexion, $_POST["Municipio"]);  
      $Finca = mysqli_real_escape_string($conexion, $_POST["Finca"]);  
    
      $sql = "UPDATE cabecera_foliar SET Nombre_programa='$Nombre_programa',Propietario='$Propietario',Asistente_tecnico='$Asistente_tecnico', Fecha_muestreo='$Fecha_muestreo',Fecha_recepcion='$Fecha_recepcion',Momento_muestreo='$Momento_muestreo',
      Siembra_id='$id_siembra',Departamento='$Departamento',Municipio='$Municipio',Finca='$Finca'
      WHERE id_cabecera = '$codcab'";  
    
      if(mysqli_query($conexion, $sql))  
      {  
        echo "<span class='green-text'>Se ha editado el análisis</span> <a href='#' id='get_tab_for_var'>Continuar</a>"; 
  
      }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);  
      }  
 }  

 
    
 ?>

<script>
 $(document).ready(function(){
    $('.tabs').tabs();
    $('#get_tab_for_var').click(function(){
   // $( "#vars" ).removeClass( "disabled" );
    $('ul.tabs').tabs('select_tab', 'vars_sign');
    });
  });     
</script>
 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["Nombre_programa"]))  
 {  
      $codcab = mysqli_real_escape_string($conexion, $_POST["codcab"]);  
      $Nombre_programa = mysqli_real_escape_string($conexion, $_POST["Nombre_programa"]);  
      $No_zona = mysqli_real_escape_string($conexion, $_POST["No_zona"]);  
      $Propietario = mysqli_real_escape_string($conexion, $_POST["Propietario"]);  
      $Asistente_tecnico = mysqli_real_escape_string($conexion, $_POST["Asistente_tecnico"]);  
      $Fecha_muestreo = mysqli_real_escape_string($conexion, $_POST["Fecha_muestreo"]);  
      $Fecha_recepcion = mysqli_real_escape_string($conexion, $_POST["Fecha_recepcion"]);  
      $id_siembra = mysqli_real_escape_string($conexion, $_POST["id_siembra"]);  
      //--------------//
      $Departamento = mysqli_real_escape_string($conexion, $_POST["Departamento"]);  
      $Municipio = mysqli_real_escape_string($conexion, $_POST["Municipio"]);  
      $Finca = mysqli_real_escape_string($conexion, $_POST["Finca"]);  
    
      $sql = "UPDATE cabecera_suelo SET Nombre_programa='$Nombre_programa',No_zona='$No_zona',Propietario='$Propietario',Asistente_tecnico='$Asistente_tecnico',
      Fecha_muestreo='$Fecha_muestreo',Fecha_recepcion='$Fecha_recepcion',Siembra_id='$id_siembra',
      Departamento='$Departamento',Municipio='$Municipio',Finca='$Finca'
      WHERE id_cabecera = '$codcab'";  
    
      if(mysqli_query($conexion, $sql))  
      {  
        echo "<span class='green-text'>Operación exitosa</span> <a href='#' id='get_tab_for_var_e'>Continuar</a>"; 
  
      }  
 }  

 
    
 ?>

<script>
 $(document).ready(function(){
        $('.tabs').tabs();
        $(document).on('click', '#get_tab_for_var_e', function(){   
        $('#vars_s').removeClass('disabled');
        $('ul.tabs').tabs('select_tab', 'vars_sign');
    });
     
  });     
</script>

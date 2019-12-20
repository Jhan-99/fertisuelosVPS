 <?php  
 //permite traer los análisis relacionados a la siembra 

 if(isset($_POST["id_foliar"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT u.id_cabecera, u.Nombre_programa, u.Fecha_muestreo, u.Municipio, u.Propietario, u.Siembra_id FROM 
	  cabecera_foliar u
      LEFT JOIN siembras t  ON  u.Siembra_id = t.id_siembra WHERE t.id_siembra = '".$_POST["id_foliar"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
	  $fila = mysqli_num_rows($result);
	  if($fila>0){
	  $output = '<option value="" disabled selected>Escoge una análisis foliar</option>'; 
      while($row = mysqli_fetch_array($result))  
      { 
        $output .= '
		<option value="'.$row["id_cabecera"].'">'.$row["Nombre_programa"].' - '.$row["Fecha_muestreo"].' '.$row["Municipio"].'</option>';        
      }  
      echo $output;  
		  }else{
		  
		  echo '<option value="" disabled selected>Escoge una análisis foliar</option>';
	  }
 }  

if(isset($_POST["id_suelo"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT u.id_cabecera, u.Nombre_programa, Fecha_muestreo, u.Finca, u.Propietario, u.Siembra_id FROM 
	  cabecera_suelo u
      LEFT JOIN siembras t  ON  u.Siembra_id = t.id_siembra WHERE t.id_siembra = '".$_POST["id_suelo"]."'";  
      
      $result = mysqli_query($conexion, $query);  
	  $fila = mysqli_num_rows($result);
	  if($fila>0){ 
	  $output = '<option value="" disabled selected>Escoge una análisis de suelo</option>'; 
      while($row = mysqli_fetch_array($result))  
      {  
        $output .= '
		<option value="'.$row["id_cabecera"].'">'.$row["Nombre_programa"].' - '.$row["Fecha_muestreo"].' '.$row["Finca"].'</option>';      
      }  
     
      echo $output;   
		  }else{
		  echo "No hay análisis de suelo relacionados con su siembra";
	  }
 }  
 ?>
<script>
    $(document).ready(function() {
       $('.collapsible').collapsible();   
       $('.tooltipped').tooltip({delay: 50});
    });
</script>
 


 
 
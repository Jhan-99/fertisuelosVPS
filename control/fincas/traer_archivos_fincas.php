 <?php  
    //PERMITE  TRAER LOS ARCHIVOS DE LA FINCA PARA GESTIORNALOS,CAMBIARLOS ETC
 if(isset($_POST["val_fincaf"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT u.id_finca,u.descripcion_archivo,archivo_finca,id_archivo FROM archivos_finca u
                LEFT JOIN fincas t  ON  u.id_finca = t.id_finca WHERE t.id_finca = '".$_POST["val_fincaf"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
      while($row = mysqli_fetch_array($result))  
      { 
         $output .= ' 
          <tr>
            <td><p  class="blue-text">'.$row["archivo_finca"].'</p></td>
            <td><a href="../../control/fincas/'.$row["archivo_finca"].'" download="'.$row["archivo_finca"].'">Descargar</a></td>
            <td><a href="#" class="red-text elimin_archivo_f" id="'.$row["id_archivo"].'">X</td>
          </tr>';   
      }  
      echo $output;  
     
 }  
 ?>

<script>
    $(document).ready(function() {
       $('.collapsible').collapsible();   
       $('.tooltipped').tooltip({delay: 50});
    });
</script>
 
 
 

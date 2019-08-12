 <?php  
 if(isset($_POST["val_finca"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT u.Nombre_siembra, u.Estado_siembra, u.Descripcion_siembra, u.id_siembra FROM siembras u
                LEFT JOIN siembras_finca t  ON  u.id_siembra = t.id_siembra WHERE t.id_finca = '".$_POST["val_finca"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
      while($row = mysqli_fetch_array($result))  
      { 
                $output .= '    
                 <tr>  
        <td>
        <a href="#" data-position="right" data-delay="50" data-tooltip="Eliminar esta siembra:" name="unsign_cultivo" value="" id="'.$row["id_siembra"].'" class="tooltipped waves-effect waves-light eliminar_siembras"><i class="material-icons red-text center">delete_forever</i></a>
        </td>    
        <td class="">'.$row["Nombre_siembra"].'</td>    
        <td class="">'.$row["Estado_siembra"].'</td>   
        <td class="">'.$row["Descripcion_siembra"].'</td>    
        </tr>
           ';  
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
 
 
 

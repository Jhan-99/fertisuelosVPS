 <?php  
//PERMITE OBTENER LOS CULTIVOS QUE ESTÁN RELACIONADOS A UNA SIEMBRA
 if(isset($_POST["val_siembra"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT u.Nombre_cultivo, u.Variedad_cultivo, u.Descripcion_cultivo,image, u.id_cultivo FROM cultivos u
                LEFT JOIN cultivos_siembra t  ON  u.id_cultivo = t.id_cultivo WHERE t.id_siembra = '".$_POST["val_siembra"]."' "; 
      
      $result = mysqli_query($conexion, $query);  
      while($row = mysqli_fetch_array($result))  
      { 
                $output .= '    
                 <tr>  
        <td>
        <a href="#" data-position="right" data-delay="50" data-tooltip="Eliminar este cultivo:" name="unsign_cultivo" value="" id="'.$row["id_cultivo"].'" class="tooltipped waves-effect waves-light eliminar_cultivos"><i class="material-icons red-text center">delete_forever</i></a>
        </td>   
        <td><img src="../../control/cultivos/fotos_cultivos/'.$row["image"].'" class="width="50" height="35" /></td>
        <td class="">'.$row["Nombre_cultivo"].'</td>    
        <td class="">'.$row["Variedad_cultivo"].'</td>   
        <td class="">'.$row["Descripcion_cultivo"].'</td>    
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
 
 
 

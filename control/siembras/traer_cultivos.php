 <?php  
//PERMITE TRAER LOS CULTIVOS 
 if(isset($_POST["var_request"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT id_cultivo,Nombre_cultivo,Variedad_cultivo,Descripcion_cultivo,image FROM cultivos WHERE id_cultivo = id_cultivo"; 
      
      $result = mysqli_query($conexion, $query);  
 
      while($row = mysqli_fetch_array($result))  
      { 
           $output .= '
        <tr>  
        <td>
        <a href="#" data-position="right" data-delay="50" data-tooltip="Relacionar este cultivo:" name="asign_cultivo" value="" id="'.$row["id_cultivo"].'" class="tooltipped waves-effect waves-light asignar_cultivos"><i class="material-icons blue-text center">done</i></a>
        </td> 
        <td><img src="../../control/cultivos/fotos_cultivos/'.$row["image"].'" class="circle" width="50" height="35" /></td>
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
        $('.tooltipped').tooltip({delay: 50});
    });
</script>
 
 
 

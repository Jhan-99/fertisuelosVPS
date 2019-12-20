 <?php  
//PERMITE TRAER LAS SIEMBRAS PARA PODER RELACIONARLAS A LA FINCA
 if(isset($_POST["var_request"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT id_siembra,Nombre_siembra,Estado_siembra,Descripcion_siembra FROM siembras WHERE id_siembra = id_siembra"; 
      $result = mysqli_query($conexion, $query);  
 
      while($row = mysqli_fetch_array($result))  
      { 
           $output .= '
                <tr>  
        <td>
        <a href="#" data-position="right" data-delay="50" data-tooltip="Relacionar esta siembra:" name="asign_cultivo" value="" id="'.$row["id_siembra"].'" class="tooltipped waves-effect waves-light asignar_siembras"><i class="material-icons blue-text center">arrow_forward</i></a>
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
        $('.tooltipped').tooltip({delay: 50});
    });
</script>
 
 
 

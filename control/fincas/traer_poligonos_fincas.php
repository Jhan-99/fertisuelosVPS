 <?php  
//PERMITE TRAER LOS POLIGONOS RELACIONADOS CON LA FINCA
 if(isset($_POST["val_finca"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT u.url_poligono_arcgis,u.id_finca,u.identificador,u.id_files FROM poligonos_shp u
                LEFT JOIN fincas t  ON  u.id_finca = t.id_finca WHERE t.id_finca = '".$_POST["val_finca"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
      while($row = mysqli_fetch_array($result))  
      { 
         $output .= ' 
          <tr>
            <td><p  class="identifica_pol blue-text" id="'.$row["url_poligono_arcgis"].'">'.$row["identificador"].'</p></td>
            <td><a href="'.$row["url_poligono_arcgis"].'" target="_blank" class="waves-effect waves-light"><i class="material-icons right">open_in_new</i></a>
            </td>
            <td><a href="#" class="red-text elimin_poligon_f" id="'.$row["id_files"].'">X</td>
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
 
 
 

 <?php  
 if(isset($_POST["id_cultivo"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT u.id_req, u.nombre_req, u.descripcion_req, u.valor_req, u.id_cultivo FROM req_nutricionales_cultivo u
                LEFT JOIN cultivos t  ON  u.id_cultivo = t.id_cultivo WHERE t.id_cultivo = '".$_POST["id_cultivo"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
      $output .= '
                         <table class="highlight striped"><br>
                             <thead>
                              <tr>
                                  <th style="">NUTRIENTE</th>
                                  <th style="width:100px;">VALOR</th>
                                  <th style="">DESCRIPCIÓN</th>
                                  <th style="">CONTROL</th>
                              </tr>
                             </thead> 
                               <tbody>
                             ';
      while($row = mysqli_fetch_array($result))  
      { 
                $output .= '
                                <tr>    
                                <td class="">'.$row["nombre_req"].'</td>    
                                <td class=""><input id="val_req" name="val_req" type ="text" value="'.$row["valor_req"].'" placeholder="Valor"></td>   
                                <td class=""><input id="descrip_req" name="descrip_req" type="text" value="'.$row["descripcion_req"].'" placeholder="Descripción"></td>    
                                <td width="60px">
                                <a class="edit_req" id="'.$row["id_req"].'" href="#"><i class="material-icons black-text">save</i></a>
                                </td>
                                </tr>
                        ';      
          
      }  
$output .=' </tbody> </table>';
 
     
      echo $output;   
 }  
 ?>
<script>
    $(document).ready(function() {
       $('.collapsible').collapsible();   
       $('.tooltipped').tooltip({delay: 50});
    });
</script>
 
 
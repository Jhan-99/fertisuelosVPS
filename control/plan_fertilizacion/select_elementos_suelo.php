 <?php  
 if(isset($_POST["val_cabecera_elementos"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT a.id_ana_elementos, a.valor_resultado, a.interpretacion, a.nombre_elemento FROM ana_suelo_elementos a
                LEFT JOIN cabecera_suelo c  ON  a.cabecera_id = c.id_cabecera WHERE c.id_cabecera= '".$_POST["val_cabecera_elementos"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
      $output.='<h6 class="center green-text">Elementos para este análisis de suelo.</h6>';
       $output .= ' 
               <table>
                    <thead>
                    <tr>
                      <th>ELEMENTO</th>
                      <th>INTERPRETACION</th>
                      <th>VALOR</th>
                      <th>CONTROL</th>
                    </tr>
                    </thead><tbody>
                    '; 
     
      while($row = mysqli_fetch_array($result))  
      { 
                $output .= '  
                        <tr>
                        <td><span class="">'.$row["nombre_elemento"].'</span></td>
                        <td><span class="">'.$row["interpretacion"].'</span></td>
                        <td width="150px"><input name="" id="'.$row["nombre_elemento"].'" type="text" value="'.$row["valor_resultado"].'" ></td>
                        <td width="60px">
                        <a class="edita_campo" href="#"><i class="material-icons grey-text">mode_edit</i></a> 
                        <a class="guarda_elemento" id="'.$row["id_ana_elementos"].'" href="#"><i class="material-icons black-text">save</i></a>
                        </td>
                        </tr>
           ';  
 
      }  
 
      $output .= '  
           </tbody>
           </table> 
      '; 
     
      echo $output;  
     
 }  
 ?>

<script>
    $(document).ready(function() {
       $('.collapsible').collapsible();   
       $('.tooltipped').tooltip({delay: 50});
    });
  
</script>
 
 
 

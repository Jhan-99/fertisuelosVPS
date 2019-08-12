 <?php  
 if(isset($_POST["val_cabecera_elementos"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT a.valor_resultado, a.interpretacion, a.nombre_elemento,id_ana_elementos FROM ana_foliar_elementos a
                LEFT JOIN cabecera_foliar c  ON  a.cabecera_id = c.id_cabecera WHERE c.id_cabecera= '".$_POST["val_cabecera_elementos"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
      $output.='<div class="container" style="width:70%">';
      $output.='<h6 class="center green-text">Elementos para este análisis de suelo.</h6>';
       $output .= ' 
               <table class="responsive-table">
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
                        <td><span class="col s3">'.$row["nombre_elemento"].'</span></td>
                        <td><span id="INTER_'.$row["nombre_elemento"].'" class="col s3">'.$row["interpretacion"].'</span></td>
                        <td width="150px">
                        <input class="col s3" name="'.$row["nombre_elemento"].'" id="'.$row["nombre_elemento"].'" type="text" value="'.$row["valor_resultado"].'"></td>
                        <td class="col s3" width="60px">
                        <a class="edita_campo" href="#"><i class="material-icons grey-text">mode_edit</i></a> 
                        <a class="editar_elemento" id="'.$row["id_ana_elementos"].'" href="#"><i class="material-icons black-text">save</i></a>
                        </td>
                        </tr>
                        ';  
    }  
 
      $output .= '  
           </tbody>
           </table>';       
        $output .= '
        <span class="blue-text" id="editando_elements"></span> <br>
        
                   <div class="chart-container" style="position: relative;">
                      <canvas id="elements_chart" width="800px" height="200px"></canvas>
                    </div>
                    
        <a id="graf_elements" class="waves-effect waves-light red-text right">Actualizar Gráfico</a>
        '; 
        $output .= '</div>'; 
     
      echo $output;  
     
 }  
 ?>

<script>
    $(document).ready(function() {
       $('.collapsible').collapsible();   
       $('.tooltipped').tooltip({delay: 50});
    });
  

</script>
 
  <script type="text/javascript" language="javascript" src="../../model/m.analisis_foliar/estimacion_anafoliar_get.js"></script>
 

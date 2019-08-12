 <?php  
 //load_data.php  
 include('../../db/dbconnect.php');                 
 $output = '';  
 if(isset($_POST["id_cultivo"]))  
 {  
      if($_POST["id_cultivo"] != '')  
      {  
           $sql = "SELECT * FROM cultivos WHERE id_cultivo = '".$_POST["id_cultivo"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM cultivos";  
      }  
      $result = mysqli_query($conexion, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<input type="hidden" name="id_cultivo" id="id_cultivo" value="'.$row["id_cultivo"].'">';  
           $output .= '<input type="hidden" name="nombre_cul" id="nombre_cul" value="'.$row["Nombre_cultivo"].' '.$row["Variedad_cultivo"].'">';  
           $output .= '
           <div class="col s12 m12 l2"><br>
            <img src="../../control/cultivos/fotos_cultivos/'.$row["image"].'" class="" width="100%" height="100px"/>
            </div>';
          
           $output .= '
           <div class="input-field col s12 m12 l3"><br>
            <input type="text" name="Variedad_cultivo" id="Variedad_cultivo" value="'.$row["Variedad_cultivo"].'" readonly>
            <label for="Nombre_cultivo" class="active">Variead</label>
            </div>';
            $output .= '
           <div class="input-field col s12 m12 l5"><br>
            <input type="text" name="Descripcion_cultivo" id="Descripcion_cultivo" value="'.$row["Descripcion_cultivo"].'" readonly>
            <label for="Descripcion_cultivo" class="active">Descripcion Cultivo</label>
            </div>';         
           $output .= '
           <div class="input-field col s12 m12 l2"><br>
            <input type="text" name="cod_cultivo" id="cod_cultivo" value="'.$row["cod_cultivo"].'" readonly>
            <label for="Descripcion_cultivo" class="active">Código</label>
            </div>';

      }  
      echo $output;  
 }  
 ?>  
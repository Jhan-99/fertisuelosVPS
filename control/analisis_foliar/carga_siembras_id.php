 <?php  
 //load_data.php  
 include('../../db/dbconnect.php');                 
 $output = '';  
 if(isset($_POST["id_siembra"]))  
 {  
      if($_POST["id_siembra"] != '')  
      {  
           $sql = "SELECT * FROM siembras WHERE id_siembra = '".$_POST["id_siembra"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM siembras";  
      }  
      $result = mysqli_query($conexion, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<input type="hidden" name="id_siembra" id="id_siembra" value="'.$row["id_siembra"].'">';  
           $output .= '
           <div class="input-field col s12 m12 l3">
            <input type="text" name="Descripcion_siembra" id="Variedad_cultivo" value="'.$row["Descripcion_siembra"].'" readonly>
            <label for="Descripcion_siembra" class="active">Descripcion siembra</label>
            </div>';
            $output .= '
           <div class="input-field col s12 m12 l5">
            <input type="text" name="Lote" id="Lote" value="'.$row["Lote"].'" readonly>
            <label for="Lote" class="active">Lote</label>
            </div>';

      }  
      echo $output;  
 }  
 ?>  
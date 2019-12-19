 <?php  
 //load_data.php  
 include('../../db/dbconnect.php');                 
 $output = '';  
 if(isset($_POST["id_finca"]))  
 {  
      if($_POST["id_finca"] != '')  
      {  
           $sql = "SELECT * FROM fincas WHERE id_finca = '".$_POST["id_finca"]."'";  
      }  
     else  
      {  
           $sql = "SELECT * FROM fincas";  
      }
      $result = mysqli_query($conexion, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<input type="hidden" name="id_finca" id="id_finca" value="'.$row["id_finca"].'">';  
           $output .= '
         <input type="text" name="Descripcion_finca" id="Descripcion_finca" value="'.$row["Descripcion_finca"].'" 
            readonly>
            <label class="active" for="Descripcion_finca">Descripcion de la finca</label>
        ';
 

      }  
      echo $output;  
 }  
 ?>  
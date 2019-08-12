 <?php  
 include('../../db/dbconnect.php');                 
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM personas WHERE Nombre_persona LIKE '%".$_POST["query"]."%' LIMIT 4;";  
      $result = mysqli_query($conexion, $query);  
      $output = '<ul class="list_personas">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
         $output .= '<option value="'.$row["id_persona"].'" class="personas">'.$row["Nombre_persona"].'</option>';  
           }  
      }  
      else  
      {  
           $output .= '<li>No se encontraron personas</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  
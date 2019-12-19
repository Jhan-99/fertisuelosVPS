 <?php  
//:inicio: busca los propietarios de las fincas para asignarlos al analisis de suelos actual, teniendo en cuenta que se le está aplicando el presente analisis a su finca 
 include('../../db/dbconnect.php');                 
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM user_details WHERE CustomerName LIKE '%".$_POST["query"]."%' LIMIT 4;";  
      $result = mysqli_query($conexion, $query);  
      $output = '<ul class="list_personas">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<h5 class="personas blue-text">'.$row["CustomerName"].'</h5>';  
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
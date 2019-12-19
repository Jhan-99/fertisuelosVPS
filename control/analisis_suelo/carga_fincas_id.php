 <?php  
 //Permite cargar las fincas para posteriormente asignarlas al análisis de suelo que se está realizano

 include('../../db/dbconnect.php'); //-> conexión a la base de datos
 $output = '';  
 if(isset($_POST["id_finca"]))  //-> identificador o id de la finca 
 {  
     //:inicio:Realiza la consulta a la base de datos en la tabla fincas
      if($_POST["id_finca"] != '')  
      {  
           $sql = "SELECT * FROM fincas WHERE id_finca = '".$_POST["id_finca"]."'";  
      }  
     else  
      {  
           $sql = "SELECT * FROM fincas";  
      }
     //:fin:
      $result = mysqli_query($conexion, $sql);  
     //:inicio: Operador while que nos permite mostrar a información detallada de la finca
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<input type="hidden" name="id_finca" id="id_finca" value="'.$row["id_finca"].'">';  
           $output .= '
         <input type="text" name="Descripcion_finca" id="Descripcion_finca" value="'.$row["Descripcion_finca"].'" 
            readonly>
            <label class="active" for="Descripcion_finca">Descripcion de la finca</label>
        ';
 
      }  
     //:fin:
     
     //:renderizar los datos a la plantilla:
      echo $output; 
     //:
 }  
 ?>  
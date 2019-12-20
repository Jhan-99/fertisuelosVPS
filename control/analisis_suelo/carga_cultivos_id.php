 <?php  
 //Permite cargar los cultivos por el id, para luego ser asginados al análisis de suelo que se esté realizando
 include('../../db/dbconnect.php');                 
 $output = '';  
 if(isset($_POST["id_cultivo"]))  //-> se refiere al id del cultivo
 {  
     //:inicio: realiza la consulta a la base de datos para obtener el cultivo
      if($_POST["id_cultivo"] != '')  
      {  
           $sql = "SELECT * FROM cultivos WHERE id_cultivo = '".$_POST["id_cultivo"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM cultivos";  
      }  
     //:fin:
      $result = mysqli_query($conexion, $sql);  
     //:inicio: operador while que nos muetra de manera explicita la información del cultivo como la variedad, el nombre y la descripción de este
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<input type="hidden" name="id_cultivo" id="id_cultivo" value="'.$row["id_cultivo"].'">';  
           $output .= '
           <div class="input-field col s12 m12 l3">
            <input type="text" name="Variedad_cultivo" id="Variedad_cultivo" value="'.$row["Variedad_cultivo"].'" readonly>
            <label for="Nombre_cultivo" class="active">Variead</label>
            </div>';
            $output .= '
           <div class="input-field col s12 m12 l5">
            <input type="text" name="Descripcion_cultivo" id="Descripcion_cultivo" value="'.$row["Descripcion_cultivo"].'" readonly>
            <label for="Descripcion_cultivo" class="active">Descripcion Cultivo</label>
            </div>';

      }
     //:fin:
     
     //:renderizar los datos a la plantilla:
      echo $output;  
     //:
 }  

 ?>  
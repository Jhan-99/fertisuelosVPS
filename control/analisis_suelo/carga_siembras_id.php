 <?php  
 //Nos permite cargar la siembras desde la base de datos 

 include('../../db/dbconnect.php'); //-> Incluir la conexión a la base de datos
 $output = '';  
 if(isset($_POST["id_siembra"]))  //->  es el id de la siembra a consultar
 {  
     //:inicio:Realiza la consulta a la base de datos para saber si la siembra existe
      if($_POST["id_siembra"] != '')  
      {  
           $sql = "SELECT * FROM siembras WHERE id_siembra = '".$_POST["id_siembra"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM siembras";  
      }  
     //:fin:
     
      $result = mysqli_query($conexion, $sql);  //-> resultado de la consulta
     
     //:inicio:operador while que nos permite mostrar la información de la siembra
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<input type="hidden" name="id_siembra" id="id_siembra" value="'.$row["id_siembra"].'">';  
           $output .= '
           <div class="input-field col s12 m12 l3">
            <input type="text" name="Descripcion_siembra" id="Variedad_cultivo" value="'.$row["Descripcion_siembra"].'" readonly>
            <label for="Descripcion_siembra" class="active">Descripcion siembra</label>
            </div>';
            $output .= '
           <div class="input-field col s12 m12 l3">
            <input type="text" name="Lote" id="Lote" value="'.$row["Lote"].'" readonly>
            <label for="Lote" class="active">Lote</label>
            </div>';        
		  
		   $output .= '
           <div class="input-field col s12 m12 l2">
            <input type="text" name="N_plantas" id="N_plantas" value="'.$row["N_plantas_siembra"].'" >
            <label for="N_plantas" class="active">No. plantas</label>
            </div>';

      }  
     //:fin:
     
     //:renderizar los datos a la plantilla:
      echo $output;  
     //:
 } 
 

 
 if(isset($_POST["codgo_cult"]))  // esta variable me la envía el archivo anterior con el id del cultivo
 {  
     //:inicio: al cargar la siembra esta estructura de código realiza una consulta a la base de datos para cargar los requerimientos nutricionales del cultivo
      $salida = '';  
      include('../../db/dbconnect.php');        
	 
      $query = "SELECT u.id_req, u.nombre_req, u.descripcion_req, u.valor_req, u.etiqueta, u.id_cultivo FROM req_nutricionales_cultivo u
      LEFT JOIN cultivos t  ON  u.id_cultivo = t.id_cultivo WHERE t.id_cultivo = '".$_POST["codgo_cult"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
      while($row = mysqli_fetch_array($result))  
      { 
		 $salida .= '
		 <input type="text" value="'.$row["valor_req"].'" id="REQ_'.$row["nombre_req"].'">';      
      }  
     //:fin:
     
     //:renderizar los datos a la plantilla:
      echo $salida;   
     //:
 } 


 ?>  
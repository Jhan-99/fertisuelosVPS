 <?php  
//Este archivo me permite obtener los detalles de la novedad de acuerdo a su identificador 
 if(isset($_POST["id_novedad"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT * FROM novedades u LEFT JOIN siembras t  ON  u.siembra_id = t.id_siembra WHERE u.id = '".$_POST["id_novedad"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
     //ciclo que muestra la información de la novedad en la vista del usuario
      while($row = mysqli_fetch_array($result))  
      { 
         $output .= ' 
         <ul>
            <li><b>Siembra: </b>'.$row["Nombre_siembra"].'</li>
            <li><b>Camellón: </b>'.$row["camellon_nov"].'</li>
            <li><b>Tipo: </b>'.$row["tipnov_nov"].'</li>
            <li><b>Fecha: </b>'.$row["fecha_nov"].'</li>
            <li><b>Tiempo: </b>'.$row["tiempo_nov"].'</li>
            <li><b>Costo producción: </b>'.$row["costopro_nov"].'</li>
            <li><b>Costo mano de obra: </b>'.$row["costoman_nov"].'</li>
            <li><b>Operario: </b>'.$row["operario_nov"].'</li>
            <li><b>Estado: </b>'.$row["estado_nov"].'</li>
            <li><b>Producto: </b>'.$row["producto_id"].'</li>
            <li><b>Dosis: </b>'.$row["dosis_nov"].'</li>
            <li><b>Categoría tóxica: </b>'.$row["cattoxica_nov"].'</li>
         </ul>
           ';   
      }  
      echo $output;  
     
 }  
 ?>

 
 
 
 

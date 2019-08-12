 <?php  
 //load_data.php  
 include('../../db/dbconnect.php');                 
 $output = '';  
 if(isset($_POST["id_fer"]))  
 {  
      if($_POST["id_fer"] != '')  
      {  
           $sql = "SELECT * FROM fertilizantes WHERE id_fertilizante = '".$_POST["id_fer"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM fertilizantes";  
      }  
      $result = mysqli_query($conexion, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<input type="hidden" name="id_fer" id="id_fer" value="'.$row["id_fertilizante"].'">';  
           $output .= '
		   	<div class="row">
			<div class="container">
			<div class="col s12 m6 l6">
			     <p><b>Nombre: </b>'.$row["Nombre_fertilizante"].'</p>	
     			<p><b>Tipo: </b>'.$row["Tipo_fertilizante"].'</p>	
     			<p><b>Estado: </b>'.$row["Estado_fertilizante"].'</p>	
     			<p><b>Fabricante: </b>'.$row["Fabricante_fertilizante"].'</p>	
     			<p><b>Descripción: </b>'.$row["Descripcion_fertilizante"].'</p>	
				
			</div>		
			
		<div class="col s12 m6 l6">
			    <p><b>Compo Garant: </b>'.$row["Composicion_garant"].'</p>	
     			<p><b>Compo General: </b>'.$row["Composicion_fertilizante"].'</p>	
     			<p><b>Costo: </b>'.$row["Valor_fertilizante"].'</p>	
     			<p><b>Código: </b>'.$row["Codigo_fertilizante"].'</p>	
     			<p><b>Status: </b>'.$row["Status_fertilizante"].'</p>
				
			</div>
			
			</div>	
			</div>
				';
          
      }  
      echo $output;  
 }  
 ?>  
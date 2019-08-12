<?php  
    include('../../db/dbconnect.php');                                                                
if(isset($_POST["no_zona"]))  
 { 
 $output = '';
 $sql = "SELECT * FROM matriz_datos_nitrogeno WHERE Zona = '".$_POST["no_zona"]."' ORDER BY id DESC";  
 $result = mysqli_query($conexion, $sql);  
 $output .= '  
      <div class="">  
      <table id="datos_anasuelos" class="responsive-table display highlight bordered striped matriz_nitro" cellspacing="0">                   <tr style="font-size:12px">  
                     <th>Id</th>  
                     <th>Fecha</th>  
                     <th>coor_x</th>  
                     <th>coor_y</th>  
                     <th>Zona</th>  
                     <th>N_Placa_Muestral</th>  
                     <th>N_Planta</th>  
                     <th>Etpa_fenolo</th>  
                     <th>cod_Fenologica</th>  
                     <th>N_Frutos</th>  
                     <th>Clorofila</th>  
                     <th>NDVI</th>  
                     <th>Temp_Max</th>  
                     <th>Temp_Min</th>  
                     <th>Promedio_Temperatura</th>  
                     <th>Humedad_Relativa_Maxima</th>  
                     <th>Humedad_Relativa_Minima</th>  
                     <th>Promedio_Humedad_Relativa</th>  
                     <th>Hrscalor_acumuladas_dp</th>  
                     <th>Dias_Transcurridos_dp</th>  
                     <th>porcentaje_Nitro_lab</th>  
                     <th>Nitro_g_kg_lab</th>  
                     <th>Eliminar</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows >10000)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM matriz_datos_nitrogeno LIMIT $delete_records";
		  mysqli_query($conexion, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr style="font-size:11px">  
                     <td>'.$row["id"].'</td>  
                     <td class="Fecha" data-id1="'.$row["id"].'" contenteditable>'.$row["Fecha"].'</td>  
                     
                     <td class="coordenada_x" data-id2="'.$row["id"].'" contenteditable>'.$row["coordenada_x"].'</td>  
                     
                     <td class="coordenada_y" data-id3="'.$row["id"].'" contenteditable>'.$row["coordenada_y"].'</td>  
                     
                     <td class="Zona" data-id4="'.$row["id"].'" contenteditable>'.$row["Zona"].'</td>  
                     
                     <td class="N_Placa_Muestral" data-id5="'.$row["id"].'" contenteditable>'.$row["N_Placa_Muestral"].'</td>  
                     
                     <td class="N_Planta" data-id6="'.$row["id"].'" contenteditable>'.$row["N_Planta"].'</td>  
                     
                     <td class="Etapa_Fenologica" data-id7="'.$row["id"].'" contenteditable>'.$row["Etapa_Fenologica"].'</td>  
                     <td class="cod_Fenologica" data-id8="'.$row["id"].'" contenteditable>'.$row["cod_Fenologica"].'</td>  
                     <td class="N_de_Frutos" data-id9="'.$row["id"].'" contenteditable>'.$row["N_de_Frutos"].'</td>  
                     
                     <td class="Clorofila_Spad" data-id10="'.$row["id"].'" contenteditable>'.$row["Clorofila_Spad"].'</td>  
                     <td class="NDVI_GreenSeker" data-id11="'.$row["id"].'" contenteditable>'.$row["NDVI_GreenSeker"].'</td>  
                     
                     <td class="Temperatura_Maxima" data-id12="'.$row["id"].'" contenteditable>'.$row["Temperatura_Maxima"].'</td>  
                     
                     <td class="Temperatura_Minima" data-id13="'.$row["id"].'" contenteditable>'.$row["Temperatura_Minima"].'</td>  
                     
                     <td class="Promedio_Temperatura" data-id14="'.$row["id"].'" contenteditable>'.$row["Promedio_Temperatura"].'</td>              
                     
                     <td class="Humedad_Relativa_Maxima" data-id15="'.$row["id"].'" contenteditable>'.$row["Humedad_Relativa_Maxima"].'</td>        
                     
                     <td class="Humedad_Relativa_Minima" data-id16="'.$row["id"].'" contenteditable>'.$row["Humedad_Relativa_Minima"].'</td>             
                     
                     <td class="Promedio_Humedad_Relativa" data-id17="'.$row["id"].'" contenteditable>'.$row["Promedio_Humedad_Relativa"].'</td>      
                     
                     <td class="Hrscalor_acumuladas_dp" data-id18="'.$row["id"].'" contenteditable>'.$row["Hrscalor_acumuladas_dp"].'</td>              
                     
                     <td class="Dias_Transcurridos_dp" data-id19="'.$row["id"].'" contenteditable>'.$row["Dias_Transcurridos_dp"].'</td>                      
                     
                     <td class="porcentaje_Nitro_lab" data-id20="'.$row["id"].'" contenteditable>'.$row["porcentaje_Nitro_lab"].'</td> 
                     
                     <td class="Nitro_g_kg_lab" data-id21="'.$row["id"].'" contenteditable>'.$row["Nitro_g_kg_lab"].'</td>  
                     
                     <td><button type="button" name="delete_btn" data-id50="'.$row["id"].'" class="btn red btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="Fecha" contenteditable></td>  
                <td id="coordenada_x" contenteditable></td>  
                <td id="coordenada_y" contenteditable></td>  
                <td id="Zona" contenteditable></td>  
                <td id="N_Placa_Muestral" contenteditable></td>  
                <td id="N_Planta" contenteditable></td>  
                <td id="Etapa_Fenologica" contenteditable></td>  
                <td id="cod_Fenologica" contenteditable></td>  
                <td id="N_de_Frutos" contenteditable></td>  
                <td id="Clorofila_Spad" contenteditable></td>  
                <td id="NDVI_GreenSeker" contenteditable></td>  
                <td id="Temperatura_Maxima" contenteditable></td>  
                <td id="Temperatura_Minima" contenteditable></td>  
                <td id="Promedio_Temperatura" contenteditable></td>  
                <td id="Humedad_Relativa_Maxima" contenteditable></td>  
                <td id="Humedad_Relativa_Minima" contenteditable></td>  
                <td id="Promedio_Humedad_Relativa" contenteditable></td>  
                <td id="Hrscalor_acumuladas_dp" contenteditable></td>  
                <td id="Dias_Transcurridos_dp" contenteditable></td>  
                <td id="porcentaje_Nitro_lab" contenteditable></td>  
                <td id="Nitro_g_kg_lab" contenteditable></td>  
  
                <td><button type="button" name="btn_add" id="btn_add" class="btn green">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="Fecha" contenteditable></td>  
					<td id="coordenada_x" contenteditable></td>  
					<td id="coordenada_y" contenteditable></td>  
					<td id="Zona" contenteditable></td>  
					<td id="N_Placa_Muestral" contenteditable></td>  
					<td id="N_Planta" contenteditable></td>  
					<td id="Etapa_Fenologica" contenteditable></td>  
					<td id="cod_Fenologica" contenteditable></td>  
					<td id="N_de_Frutos" contenteditable></td>  
					<td id="Clorofila_Spad" contenteditable></td>  
					<td id="NDVI_GreenSeker" contenteditable></td>  
					<td id="Temperatura_Maxima" contenteditable></td>  
					<td id="Temperatura_Minima" contenteditable></td>  
					<td id="Promedio_Temperatura" contenteditable></td>  
					<td id="Humedad_Relativa_Maxima" contenteditable></td>  
					<td id="Humedad_Relativa_Minima" contenteditable></td>  
					<td id="Promedio_Humedad_Relativa" contenteditable></td>  
					<td id="Hrscalor_acumuladas_dp" contenteditable></td>  
					<td id="Dias_Transcurridos_dp" contenteditable></td>  
					<td id="porcentaje_Nitro_lab" contenteditable></td>  
					<td id="Nitro_g_kg_lab" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn green">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
    }
 ?>
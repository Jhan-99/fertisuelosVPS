 <?php  
 
 include('../../db/dbconnect.php');
 $output = '';  
 if(isset($_POST["dato"]))  
 { 
  $sql = "SELECT * FROM ana_suelo_elementos WHERE cabecera_id='".$_POST["dato"]."' ORDER BY id_ana_elementos DESC";  
 $result = mysqli_query($conexion, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="highlight">  
                <tr>  
                     <th style="display:none;" width="10%">Id</th>  
                     <th width="40%">Valor</th>  
                     <th width="40%">Elemento</th>  
                     <th width="40%">Interpretacion</th>  
                     <th width="40%">Unidad</th>  
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
 
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
       <td style="display:none;">'.$row["id_ana_elementos"].'</td>  
       <td class="valor_resultado" data-id1="'.$row["id_ana_elementos"].'" contenteditable>'.$row["valor_resultado"].'</td>  
        <td class="nombre_elemento" data-id2="'.$row["id_ana_elementos"].'"contenteditable>'.$row["nombre_elemento"].'</td>  
       <td class="interpretacion" data-id4="'.$row["id_ana_elementos"].'" contenteditable>'.$row["interpretacion"].'</td>  
        <td class="metodo_extraccion" data-id5="'.$row["id_ana_elementos"].'" contenteditable>'.$row["metodo_extraccion"].'</td>
         <td><button type="button" name="delete_btn" data-id3="'.$row["id_ana_elementos"].'" class="btn red btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td style="display:none;"></td>  
                <td id="valor_resultado" contenteditable></td>  
                <td id="nombre_elemento" contenteditable></td>  
                <td id="interpretacion" contenteditable></td>  
                <td id="metodo_extraccion" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td style="display:none;"></td>  
					<td id="valor_resultado" contenteditable></td>  
					<td id="nombre_elemento" contenteditable></td>  
					<td id="interpretacion" contenteditable></td>  
					<td id="metodo_extraccion" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn green">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 }

 ?>
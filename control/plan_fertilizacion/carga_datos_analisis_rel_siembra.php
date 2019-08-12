 <?php  
// con este código llamamos los datos básicos del análisis foliar
 if(isset($_POST["cabecera_foliar_datos"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                                                
      $query = "SELECT a.Nombre_programa,  a.Propietario, a.Fecha_muestreo, a.Fecha_recepcion, a.Departamento, a.Municipio, a.Finca, a.id_cabecera FROM cabecera_foliar a
	  
      WHERE a.id_cabecera= '".$_POST["cabecera_foliar_datos"]."'"; 
      // imprimir el gráfico para que cargue los elementos 
	 	$output .= '
				<div class="chart-container" style="position: relative;">
				  <canvas id="elements_chart_foliar" width="900" height="250"></canvas><br>
				 </div>
		';
      $result = mysqli_query($conexion, $query);  
	  $fila = mysqli_num_rows($result);
	  if($fila>0){
      while($row = mysqli_fetch_array($result)) 
      { 
      $output .= '
	  <div class="row">
	 <div class="col s12 m6 l6">
		<label>Nombre análisis</label>
	  	<input type="text" id="F_'.$row["id_cabecera"].'" value="'.$row["Nombre_programa"].'">
		</div>	  	
		
	<div class="col s12 m6 l6">
		<label>Propietario</label>
	  	<input type="text"  value="'.$row["Propietario"].'">
		</div>		
	 
	  <div class="col s12 m6 l3">
		<label>Fecha muestreo</label>
	  	<input type="text"  value="'.$row["Fecha_muestreo"].'">
		</div>	  
	 <div class="col s12 m6 l3">
		<label>Fecha recepcion</label>
	  	<input type="text"  value="'.$row["Fecha_recepcion"].'">
		</div>	
	<div class="col s12 m6 l2">
		<label>Departamento</label>
	  	<input type="text"  value="'.$row["Departamento"].'">
		</div>	
	<div class="col s12 m6 l2">
		<label>Municipio</label>
	  	<input type="text"  value="'.$row["Municipio"].'">
		</div>	
	<div class="col s12 m6 l2">
		<label>Finca</label>
	  	<input type="text"  value="'.$row["Finca"].'">
		</div>
		
	  </div>
	  
	  ';        
      } 
      echo $output;  
		  }else{
		  
		  echo "Error al cargar los datos de la cabecera";
	  }
 } 


// con este código llamamos los datos de los elementos
 if(isset($_POST["cabecera_foliar"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT a.valor_resultado, a.interpretacion, a.nombre_elemento,id_ana_elementos FROM ana_foliar_elementos a
                LEFT JOIN cabecera_foliar c  ON  a.cabecera_id = c.id_cabecera WHERE c.id_cabecera= '".$_POST["cabecera_foliar"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
	  $fila = mysqli_num_rows($result);
	  if($fila>0){
      while($row = mysqli_fetch_array($result)) 
      { 
      $output .= '<input type="text" id="F_'.$row["nombre_elemento"].'" value="'.$row["valor_resultado"].'"> ';        
      } 
      echo $output;  
		  }else{
		  
		  echo "No hay análisis foliares relacionados a su siembra";
	  }
 }  


// con este código llamamos los datos básicos del análisis de suelo
 if(isset($_POST["cabecera_suelo_datos"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                                                
      $query = "SELECT a.Nombre_programa,  a.Propietario, a.Fecha_muestreo, a.Fecha_recepcion, a.Departamento, No_zona, a.Municipio, a.Finca, a.id_cabecera FROM cabecera_suelo a
	  
      WHERE a.id_cabecera= '".$_POST["cabecera_suelo_datos"]."'"; 
      // imprimir el gráfico para que cargue los elementos 
	 	$output .= '
		 <div class="chart-container" style="position: relative;">
		  <canvas id="elements_chart_suelo" width="900" height="250"></canvas><br>
		  </div>	
		';		 	
 		 	
		 $output .= '
            <div class="row">
        <div class="col s12 m12 l12">
			 <div class="card-panel">
			<span><b>Nitrógeno</b> &#40;Bray II - ppm&#41;</span>
			<input disabled readonly  type="text" id="nitro" name="nitro">
                <span class="teal-text chip" id="inter_nitrogeno">Est:</span>
                <span class="chip red-text" id="nitro_total">N.Total</span>
                <span class="chip orange-text" id="nitro_dispon">N.Disp</span>
                <span class="chip purple-text" id="nitro_suelo_ppm">N.ppm</span>
                <span class="chip green-text" id="nitro_suelo">N.Suelo</span>
                <span class="chip black-text" id="nitro_aprovechable">N.Apro</span>
                <span class="chip blue-text" id="n_necesidad">NF</span>
                <span class="chip black-text" id="cant_aplicar_planta">Cant. Apli x planta: </span>
                <span class="black-text" id="n_mensaje"></span>
			 </div>
			</div>
            <div>
            <div class="row">
			
			<div class="col s12 m5 l3">
			 <div class="card-panel">
			<span><b>Fosforo</b> &#40;Bray II - ppm&#41;</span>
			<input disabled readonly  type="text" id="fosforo" name="fosforo">
                   <span class="cyan-text"id="inter_fosforo">Est:</span><br>
                   <span class="red-text"id="p_suelo">P.Suelo:</span><br>
                   <span class="green-text"id="p_asimilable">P.Asimi:</span><br>
                   <span class="amber-text"id="p_aprovechable">P.Apro:</span><br>
                   <span class="teal-text"id="p_necesidad">NF.P:</span><br>
                   <span class="red-text" id="cantidad_xplanta_p"></span><br>
                   <span style="font-size:10px" class="teal white-text"id="p_mensaje"></span>
			 </div>
			</div>
			
				<div class="col s12 m5 l3">
					  <div class="card-panel">
						  <span><b>Calcio</b> &#40;cmol kg&#41;</span>
						  <input disabled readonly type="text" id="calcio" name="calcio">
						  <span class="cyan-text" id="inter_calcio"></span><br>
						  <span class="red-text" id="ca_suelo"></span><br>
						  <span class="green-text" id="ca_aprovechable"></span><br>
						  <span class="amber-text" id="ca_necesidad"></span><br>
                          <span class="red-text" id="cantidad_xplanta_ca"></span><br>
						  <span style="font-size:10px" class="teal white-text" id="ca_mensaje"></span><br>
					</div>
				</div>
			
			<div class="col s12 m5 l3">
				  <div class="card-panel">
					  <span><b>Magnesio</b> &#40;cmol kg&#41;</span>
					  <input disabled readonly type="text" id="magnecio" name="magnecio">
					  <span class="cyan-text" id="inter_magnecio"></span><br>
					  <span class="red-text" id="mg_suelo"></span><br>
					  <span class="green-text" id="mg_aprovechable"></span><br>
					  <span class="teal-text" id="mg_necesidad"></span><br>
                      <span class="red-text" id="cantidad_xplanta_mg"></span><br>
					  <span style="font-size:10px" class="teal white-text" id="mg_mensaje"></span><br>
				  </div>
				</div>	
				
			 <div class="col s12 m5 l3">
				  <div class="card-panel">
					  <span><b>Potasio</b> &#40;cmol kg&#41;</span>
					  <input disabled readonly type="text" id="potasio" name="potasio">
					  <span id="inter_potasio"></span><br>
					  <span class="red-text" id="k_suelo"></span><br>
					  <span class="green-text" id="k_asimilable"></span><br>
					  <span class="teal-text" id="k_aprovechable"></span><br>
					  <span class="purple-text" id="k_necesidad"></span><br>
                      <span class="red-text" id="cantidad_xplanta_k"></span><br>
					  <span style="font-size:10px" class="teal white-text" id="k_mensaje"></span><br>
				  </div>
				</div>
				</div>
                <div class="row"> 
				<div class="col s12 m5 l3">
				 <div class="card-panel">
				  <span><b>Sodio</b> &#40;cmol kg&#41;</span>
				  <input disabled readonly type="text" id="sodio" name="sodio">
				  	<span class="teal-text" id="inter_sodio"></span><br>
				  	<span class="purple-text"id="na_suelo"></span>
				 	</div>
				</div>
				
				<div class="col s12 m5 l3">
				  <div class="card-panel">
					 <span><b>Azufre</b> &#40;ppm&#41;</span>
					 <input disabled readonly type="text" id="azufre" name="azufre">
                     <td><span class="orange-text"  id="inter_azufre"></span><br>
                     <td><span class="green-text"  id="s_suelo"></span><br>
                     <td><span class="red-text"  id="s_aprovechable"></span><br>
                     <td><span class="black-text" id="s_necesidad"></span>
				  	</div>


					</div>	
					<div class="col s12 m5 l3">
					  <div class="card-panel">
						  <span><b>Manganeso</b> &#40;ppm&#41;</span>
						  <input disabled readonly type="text" id="manganeso" name="manganeso">
                           <span class="blue-text" id="inter_manganeso"></span><br>
                           <span  class="orange-text" id="mn_suelo"></span><br>
                           <span  class="green-text"  id="mn_aprovechable"></span><br>
                           <span  class="red-text" id="mn_necesidad"></span><br>
                           <span  class="black-text" id="mn_mensaje"></span>
					  	</div>
						</div>
						
				<div class="col s12 m5 l3">
					  <div class="card-panel">
						 <span><b>Boro</b> &#40;ppm&#41;</span>
						 <input disabled readonly type="text" id="boro" name="boro">
                         <span class="cyan-text" id="inter_boro"></span><br>
                         <span  class="orange-text" id="b_suelo"></span><br>
                         <span  class="green-text" id="b_aprovechable"></span><br>
                         <span  class="teal-text" id="b_necesidad"></span><br>
                         <span class="red-text" id="cantidad_xplanta_b"></span><br>
						 <span style="font-size:10px" class="teal white-text" id="b_mensaje"></span>
					  	</div>
						</div><br>
						</div>
                        <div class="row">
							<div class="col s12 m5 l3">
							 <div class="card-panel">
							  <span><b>Cobre</b> &#40;ppm&#41;</span>
							  <input disabled readonly type="text" id="cobre" name="cobre">
                               <span class="cyan-text" id="inter_cobre"></span><br>
                               <span class="teal-text" id="cu_suelo"></span><br>
                               <span class="green-text" id="cu_aprovechable"></span><br>
                               <span class="red-text" id="cu_necesidad"></span><br>
                               <span class="red-text" id="cu_mensaje"></span>
							 	</div>
							</div>
							
					<div class="col s12 m5 l3">
				  <div class="card-panel">
					  <span><b>Zn</b> &#40;ppm&#41;</span>
					  <input disabled readonly type="text" id="zinc" name="zinc">
                      <td><span class="orange-text" id="inter_zinc"></span><br>
                      <td><span class="blue-text" id="zn_suelo"></span><br>
                      <td><span class="red-text" id="zn_aprovechable"></span><br>
                      <span class="green-text" id="zn_necesidad"></span><br>
                      <span class="red-text" id="cantidad_xplanta_zn"></span><br>
					  <span style="font-size:10px" class="teal white-text" id="zn_mensaje"></span>

				  	</div>
					</div>	
										
				<div class="col s12 m5 l3">
					  <div class="card-panel">
						  <span><b>Hierro</b> &#40;ppm&#41;</span>
						  <input disabled readonly type="text" id="hierro" name="hierro">
                          <span class="orange-text" id="inter_hierro"></span><br>
                          <span class="yellow-text" id="fe_suelo"></span><br>
                          <span class="blue-text" id="fe_aprovechable"></span><br>
                          <span class="red-text" id="fe_necesidad"></span><br>
                          <span class="green-text" id="fe_mensaje"></span><br>
					  	</div>
						</div>
						
										
			</div>	
		';		 
	 
 
      $result = mysqli_query($conexion, $query);  
	  $fila = mysqli_num_rows($result);
	  if($fila>0){
      while($row = mysqli_fetch_array($result)) 
      { 
      $output .= '
	  <div class="row">
	 <div class="col s12 m6 l6">
		<label>Nombre análisis</label>
	  	<input disabled readonly  type="text" id="F_'.$row["id_cabecera"].'" value="'.$row["Nombre_programa"].'">
		</div>	  	
		
	<div class="col s12 m6 l4">
		<label>Propietario</label>
	  	<input disabled readonly  type="text"  value="'.$row["Propietario"].'">
		</div>	
        
     <div class="col s12 m6 l2">
		<label>No. Zona</label>
	  	<input id="No_zona" disabled readonly  type="text"  value="'.$row["No_zona"].'">
		</div>		
	 
	  <div class="col s12 m6 l3">
		<label>Fecha muestreo</label>
	  	<input disabled readonly  type="text"  value="'.$row["Fecha_muestreo"].'">
		</div>	  
	 <div class="col s12 m6 l3">
		<label>Fecha recepcion</label>
	  	<input disabled readonly  type="text"  value="'.$row["Fecha_recepcion"].'">
		</div>	
	<div class="col s12 m6 l2">
		<label>Departamento</label>
	  	<input disabled readonly  type="text"  value="'.$row["Departamento"].'">
		</div>	
	<div class="col s12 m6 l2">
		<label>Municipio</label>
	  	<input disabled readonly  type="text"  value="'.$row["Municipio"].'">
		</div>	
	<div class="col s12 m6 l2">
		<label>Finca</label>
	  	<input disabled readonly  type="text"  value="'.$row["Finca"].'">
		</div>
		
	  </div>
	  
	  ';        
      } 
      echo $output;  
		  }else{
		  
		  echo "Error al cargar los datos de la cabecera";
	  }
 } 
//con este código cargo los datos de los elementos del suelo
if(isset($_POST["cabecera_suelo"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT a.valor_resultado, a.interpretacion, a.nombre_elemento,id_ana_elementos FROM ana_suelo_elementos a
                LEFT JOIN cabecera_suelo c  ON  a.cabecera_id = c.id_cabecera WHERE c.id_cabecera= '".$_POST["cabecera_suelo"]."'"; 
      
      $result = mysqli_query($conexion, $query);  
	  $fila = mysqli_num_rows($result);
	  if($fila>0){
      while($row = mysqli_fetch_array($result)) 
      { 
      $output .= '<input type="text" id="S_'.$row["nombre_elemento"].'" value="'.$row["valor_resultado"].'"> ';        
      } 
      echo $output;  
		  }else{
		  
		  echo "No hay análisis de suelos relacionados a su siembra";
	  }
 } 

//con este código cargo los datos de las variables del suelo
if(isset($_POST["cabecera_suelo_varsuelo"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT a.Textura,a.val_textura,densidad,tipo_clima,C_O_M_O_valor, a.Ph, a.C_E,C_I_C_E FROM analisis_suelos a
                LEFT JOIN cabecera_suelo c  ON  a.cabecera_id = c.id_cabecera WHERE c.id_cabecera= '".$_POST["cabecera_suelo_varsuelo"]."'"; 
      
    $result = mysqli_query($conexion, $query);  
	$fila = mysqli_num_rows($result);
	$output .= '<h6 class="grey-text center">Variables significativas para este análisis de suelo</h6><br>';
	  if($fila>0){
      while($row = mysqli_fetch_array($result)) 
      { 
      $output .= '
	  <div class="row">  	
		
	<div class="col s12 m6 l2">
		<label>Textura</label>
	  	<input disabled readonly  type="text" id="textura" name="'.$row["val_textura"].'"  value="'.$row["Textura"].'">
		</div>		
	 
	  <div class="col s12 m6 l2">
		<label>Ph</label>
	  	<input disabled readonly  type="text"  value="'.$row["Ph"].'">
		</div>	  
	 <div class="col s12 m6 l2">
		<label>C.E</label>
	  	<input disabled readonly  type="text"  value="'.$row["C_E"].'">
		</div>	
	<div class="col s12 m6 l2">
		<label>C.I.C.E</label>
	  	<input disabled readonly  type="text"  value="'.$row["C_I_C_E"].'">
		</div>
    <div class="col s12 m6 l2">
		<label>Densidad (g/cc)</label>
	  	<input disabled readonly  id="densidad_aparn" name="densidad_aparn" type="text"  value="'.$row["densidad"].'">
		</div>	
        
        <div class="col s12 m6 l1">
		<label>Clima</label>
	  	<input disabled readonly  id="tipo_clima" name="tipo_clima" type="text"  value="'.$row["tipo_clima"].'">
		</div>	     
    <div class="col s12 m6 l1">
		<label>MO</label>
	  	<input disabled readonly  id="co_o_mo" name="co_o_mo" type="text"  value="'.$row["C_O_M_O_valor"].'">
		</div>	
	  </div>
	  
	  
	  ';        
      } 
      echo $output;  
		  }else{
		  
		  echo "No se pudo cargar las variables del suelo	";
	  }
 }  

   
 ?>
<script>
   $(document).ready(function() {
       $('.collapsible').collapsible();   
       $('.tooltipped').tooltip({delay: 50});
    });
</script>
 
<script src="../../model/m.plan_fertilizacion/estimacion_analisis_suel_fol.js"></script>
 
 
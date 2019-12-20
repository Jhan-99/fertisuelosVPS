<meta charset="utf-8">
<html lang="es">
<?php  
    
//Este archivo permite exportar a excel todas las novedades
include('../../db/dbconnect.php');

$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM novedades u LEFT JOIN siembras t  ON  u.siembra_id = t.id_siembra";
 $result = mysqli_query($conexion, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   
<style>
 
 .col-md-12 {
    width: 100%;
} 

/*.box {
    position: relative;
    border-radius: 3px;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}*/
div img {
  position: absolute;
  top: -30px; 
  left: 50px;
}

.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}

.box-header.with-border {
    border-bottom: 1px solid #000;;
}


.box-header .box-title {
	display: inline-block;
	font-size: 24px;
	margin: 0;
	line-height: 1;
}

.box-title2 {
	display: inline-block;
	font-size: 15px;
	margin: 0;
	line-height: 1;
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	line-height: 9px;
	
}

.box-title3 {
	display: inline-block;
	font-size: 20px;
	margin: 0;
	line-height: 1;
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	
}

.box-body {
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px;
	padding: 10px;
	font-size: 10px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}

.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #000;
    padding: 10px;
    background-color: #fff;
}

.table-bordered {
    border: 1px solid #000;
}


.table {
	width: 100%;
	max-width: 100%;
	margin-bottom: 20px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size: 9px;
	border:#000;
	
}

table {
    background-color: transparent;
		font:100% Arial, Helvetica, sans-serif; 
			border:#000;

}
table{width:100%;border-collapse:collapse;margin:1em 0; border:#000;
}
th, td{text-align:left;padding:.6em;border:1px solid #000;}
th{
	color: #000;
	background-color:#CCC;
	background-image: url(tr_back.gif);
	background-repeat: repeat-x;
}
/*td{background:#e5f1f4;}*/

 .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #000;
}


.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
	}

.bg-red {
    background-color: #dd4b39 !important;
	background:#CCC;
}

 #header2 {position:relative;} 
</style>
        <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title3" align="center">Reporte de Fincas - <?=  $date; ?></h3>
                  <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title2" align="center">Servicio Nacional de Aprendizaje</h3> 
                  <h3 class="box-title2" align="left"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Sena_Colombia_logo.svg/784px-Sena_Colombia_logo.svg.png" width="90" height="90"></h3> 
                  <p><h3 class="box-title2"  align="center">Centro de Gestión Agroempresarial del Oriente </h3></p>
                  <p><h3 class="box-title3"  align="center">REGISTRO DIARIO DE FINCAS</h3></p>
                    </div>
                <div class="container"></div></div>    
                      
                </div>
        </div>
    </div>
    </div>
    
<table class="table table-bordered">
<tbody>
<tr>
<th>FINCA</th>
<td>Villa Luz</td>
<th>UBICACIÓN</th>
<td>Vereda la amistad Municipio de Bolivar</td>
<th>CULTIVO Y VARIEDAD</th>
<td>MORA CASTILLA</td>
</tr>
<tr>
<th>PROPIETARIO</th>
<td>Centro de Gestión Agroempresarial del Oriente, SENA VÉLEZ</td>
<th>ASESOR TÉCNICO</th>
<td>LAURA CRISTINA</td>
</tr>
<tr>
<th>No. PLANTAS</th>
<td>364</td>
<th>DENSIDAD DE SIEMBRA</th>
<td>5m x 3m</td>
<th>AREA SEMBRADA</th>
<td>Media Hectarea</td>
</tr>
</tbody>
</table>

  
   <table class="table" bordered="1" style="border:1pt solid black;">  
        <tr style="border:1pt solid black;"><h4>REGISTRO DIARIO DE LABORES</h4></tr>
                  <thead>
                  <tr>
                  <br>
        <th style="border:1pt solid black;">Nombre siembra</th>
		<th style="border:1pt solid black;">Camellón</th>
		<th style="border:1pt solid black;">Tipo</th>
		<th style="border:1pt solid black;">Fecha novedad</th>
		<th style="border:1pt solid black;">Tiempo</th>
		<th style="border:1pt solid black;">Costo</th>
		<th style="border:1pt solid black;">Costo ManoObra</th>
		<th style="border:1pt solid black;">Operario nov</th>
		<th style="border:1pt solid black;">Estado nov</th>
		<th style="border:1pt solid black;">Producto</th>
		<th style="border:1pt solid black;">Dosis nov</th>
		<th style="border:1pt solid black;">Categoría tóxica</th>
                    </tr>
                  </thead>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
            <tr>  
            <td style="border:1pt solid black;">'.$row["Nombre_siembra"].'</td>
			<td style="border:1pt solid black;">'.$row["camellon_nov"].'</td>
			<td style="border:1pt solid black;">'.$row["tipnov_nov"].'</td>
			<td style="border:1pt solid black;">'.$row["fecha_nov"].'</td>
			<td style="border:1pt solid black;">'.$row["tiempo_nov"].'</td>
			<td style="border:1pt solid black;">'.$row["costopro_nov"].'</td>
			<td style="border:1pt solid black;">'.$row["costoman_nov"].'</td>
			<td style="border:1pt solid black;">'.$row["operario_nov"].'</td>
			<td style="border:1pt solid black;">'.$row["estado_nov"].'</td>
			<td style="border:1pt solid black;">'.$row["producto_id"].'</td>
			<td style="border:1pt solid black;">'.$row["dosis_nov"].'</td>
			<td style="border:1pt solid black;">'.$row["cattoxica_nov"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  //$filename = "Novedades.xls". date('d-m-Y');
  header('Content-Disposition: attachment; filename=Novedades.xls') ;
  echo $output;
 }
}
?>
</html>
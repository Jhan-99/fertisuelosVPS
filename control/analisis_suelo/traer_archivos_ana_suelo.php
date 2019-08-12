<?php
include('../../db/dbconnect_pdo.php');
$id_ana_carga =   $_POST['id_ana_carga'];
$query = "SELECT * FROM archivos_ana_suelo WHERE id_cabecera = $id_ana_carga; ORDER BY id_archivo DESC";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$number_of_rows = $statement->rowCount();
$output = '';
$output .= '
 <table id="" class="table bordered striped">
  <tr>
   <th>#</th>
   <th>Nombre</th>
   <th>Descrpción</th>
   <th>Archivo</th>
   <th>Control</th>
  </tr>
';
if($number_of_rows > 0)
{
 $count = 0;
 foreach($result as $row)
 {
  $count ++; 
  $output .= '
  <tr id="data_archivos">
   <td>'.$count.'</td>
   <td class="blue-text">'.$row["nombre_archivo"].'</td>
   <td>'.$row["descripcion_archivo"].'</td>
   <td><a href="../../control/analisis_suelo/files/'.$row["nombre_archivo"].'" download="'.$row["nombre_archivo"].'">Descargar</a></td>
    <td><a href="#"  name="view" id="'.$row["id_archivo"].'" class="tooltipped edit" data-position="left" data-delay="50" data-tooltip="Agregar archivos:"><i class="material-icons black-text center">mode_edit</i></a>
    
    <a href="#"  name="view" id="'.$row["id_archivo"].'" data-nombre_archivo="'.$row["nombre_archivo"].'" class="tooltipped delete_file" data-position="left" data-delay="50" data-tooltip="Agregar archivos:"><i class="material-icons red-text center">delete</i></a>
    </td>

  </tr>
  ';
 }
}
else
{
 $output .= '
  <tr>
   <td colspan="6" align="center">No hay archivos relacionados con este análisis.</td>
  </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
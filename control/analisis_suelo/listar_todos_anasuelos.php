  <?php
include('../../db/dbconnect_pdo.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM cabecera_suelo ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE Nombre_programa LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR Propietario LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR Asistente_tecnico LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR Fecha_muestreo LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR Fecha_recepcion LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id_cabecera DESC ';
}
if($_POST["length"] != -1)
{
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 
 $sub_array = array();
 
 $sub_array[] = $row["Nombre_programa"];
 $sub_array[] = $row["Propietario"];
 $sub_array[] = $row["Asistente_tecnico"];
 $sub_array[] = $row["Fecha_muestreo"];
 $sub_array[] = $row["Fecha_recepcion"];
 $sub_array[] = '<a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de:            '.$row["Nombre_programa"].'"name="update" value="" id="'.$row["id_cabecera"].'" class="tooltipped waves-effect waves-light black-text update"><i class="material-icons black-text center">mode_edit</i></a>';
    
$sub_array[] = '
<a href="#" name="'.$row["Nombre_programa"].'" id="'.$row["id_cabecera"].'" class="tooltipped ver_vars_ana" data-position="left" data-delay="50" data-tooltip="Ver resultados"><i class="material-icons green-text center">remove_red_eye</i></a>

<a href="#" name="view" id="'.$row["id_cabecera"].'" class="tooltipped subir_archivo" data-position="left" data-delay="50" data-tooltip="Subir archivos"><i class="material-icons blue-text center">backup</i></a>
'; 
    
 $sub_array[] = '<a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de:            '.$row["Nombre_programa"].'"name="delete" value="" id="'.$row["id_cabecera"].'" class="tooltipped waves-effect waves-light delete"><i class="material-icons red-text center">delete</i></a>';
   
 $data[] = $sub_array;
}
$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records(),
 "data"    => $data
);
echo json_encode($output);
?>
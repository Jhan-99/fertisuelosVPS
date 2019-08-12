<?php
include('../../db/dbconnect_pdo.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM siembras ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE Nombre_siembra LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR N_plantas_siembra LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR Descripcion_siembra LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR Estado_siembra LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id_siembra DESC ';
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
 
 $sub_array[] = $row["Nombre_siembra"];
 $sub_array[] = $row["N_plantas_siembra"];
 $sub_array[] = $row["Descripcion_siembra"];
 $sub_array[] = $row["Estado_siembra"];
 $sub_array[] = '<a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de:            '.$row["Nombre_siembra"].'"name="update" value="" id="'.$row["id_siembra"].'" class="tooltipped waves-effect waves-light black-text update"><i class="material-icons black-text center">mode_edit</i></a>';
    
$sub_array[] = '
<a href="#" name="view" id="'.$row["id_siembra"].'" class="tooltipped select_c_asignar" data-position="left" data-delay="50" data-tooltip="Asignar cultivos"><i class="material-icons green-text center">assignment_turned_in</i></a>

<a href="#" name="view" id="'.$row["id_siembra"].'" class="tooltipped ver_c_asignados" data-position="left" data-delay="50" data-tooltip="Ver cultivos asignados"><i class="material-icons green-text center">remove_red_eye</i></a>'; 
    
 $sub_array[] = '<a href="#" data-position="left" data-delay="50" data-tooltip="Eliminar:            '.$row["Nombre_siembra"].'"name="delete" value="" id="'.$row["id_siembra"].'" class="tooltipped waves-effect waves-light delete"><i class="material-icons red-text center">delete</i></a>';
   
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
<?php
//PERMITE TRAER TODOS LOS CULTIVOS A TRAVÉS DEL ARCHIVO /function.php
include('../../db/dbconnect_pdo.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM cultivos ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE Nombre_cultivo LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR Variedad_cultivo LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR Superficie_cultivo LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR Metodo_cultivo LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR Descripcion_cultivo LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id_cultivo DESC ';
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
	$image = '';
	if($row["image"] != '')
	{
		$image = '<img src="../../control/cultivos/fotos_cultivos/'.$row["image"].'" class="img-thumbnail" width="50" height="35" />';
	}
	else
	{
		$image = '';
	}
	$sub_array = array();
	$sub_array[] = $image;
	$sub_array[] = $row["Nombre_cultivo"];
	$sub_array[] = $row["Variedad_cultivo"];
	$sub_array[] = $row["Superficie_cultivo"];
	$sub_array[] = $row["Metodo_cultivo"];
	$sub_array[] = $row["Descripcion_cultivo"];
    $sub_array[] = '<a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de:            '.$row["Nombre_cultivo"].'"name="update" value="" id="'.$row["id_cultivo"].'" class="tooltipped waves-effect waves-light black-text update"><i class="material-icons black-text center">mode_edit</i></a>
    
    <a href="#" data-position="left" data-delay="50" data-tooltip="Agregar requerimientos nutricionales a:            '.$row["Nombre_cultivo"].'"name="update" value="" id="'.$row["id_cultivo"].'" class="tooltipped waves-effect waves-light red-text add_requeriments"><i class="material-icons orange-text center">grain</i></a>';
        
    $sub_array[] = '
        <a href="#" data-position="left" data-delay="50" data-tooltip="Ver requerimientos nutricionales de: '.$row["Nombre_cultivo"].'" name="'.$row["Nombre_cultivo"].'" value="" id="'.$row["id_cultivo"].'" class="tooltipped waves-effect waves-light red-text ver_vars_cultivos"><i class="material-icons blue-text center">filter_list</i></a>
    ';
    
     $sub_array[] = '<a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de: '.$row["Nombre_cultivo"].'"name="delete" value="" id="'.$row["id_cultivo"].'" class="tooltipped waves-effect waves-light delete"><i class="material-icons red-text center">delete</i></a>';
    
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>

 
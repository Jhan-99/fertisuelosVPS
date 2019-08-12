  <?php
include('../../db/dbconnect_pdo.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM fertilizantes ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE Nombre_fertilizante LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR Tipo_fertilizante LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR Estado_fertilizante LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR Fabricante_fertilizante LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id_fertilizante DESC ';
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
 
 $sub_array[] = $row["Nombre_fertilizante"];
 $sub_array[] = $row["Tipo_fertilizante"];
 $sub_array[] = $row["Estado_fertilizante"];
 $sub_array[] = $row["Fabricante_fertilizante"];
	
 $sub_array[] = '<a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de:            '.$row["Nombre_fertilizante"].'"name="update" value="" id="'.$row["id_fertilizante"].'" class="tooltipped waves-effect waves-light black-text update"><i class="material-icons black-text center">mode_edit</i></a>';
    
 $sub_array[] = '<a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de:            '.$row["Nombre_fertilizante"].'"name="delete" value="" id="'.$row["id_fertilizante"].'" class="tooltipped waves-effect waves-light delete"><i class="material-icons red-text center">delete</i></a>';
   
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
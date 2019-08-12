  <?php
include('../../db/dbconnect_pdo.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM novedades ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE tipnov_nov LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR camellon_nov LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR fecha_nov LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR tiempo_nov LIKE "%'.$_POST["search"]["value"].'%"';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
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
 
 $sub_array[] = $row["tipnov_nov"];
 $sub_array[] = $row["camellon_nov"];
 $sub_array[] = $row["fecha_nov"];
 $sub_array[] = $row["tiempo_nov"];
 $sub_array[] = '<a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de:            '.$row["tipnov_nov"].'"name="update" value="" id="'.$row["id"].'" class="tooltipped waves-effect waves-light black-text update"><i class="material-icons black-text center">mode_edit</i></a>';

$sub_array[] = '
<a href="#" name="view" id="'.$row["id"].'" class="tooltipped ver_poligonos ver_novedad" data-position="left" data-delay="50" data-tooltip="Ver cultivos asignados"><i class="material-icons green-text center">remove_red_eye</i></a>';
    
 $sub_array[] = '<a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de:            '.$row["tipnov_nov"].'"name="delete" value="" id="'.$row["id"].'" class="tooltipped waves-effect waves-light delete"><i class="material-icons red-text center">delete</i></a>';
   
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

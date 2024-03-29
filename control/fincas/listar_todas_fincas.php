  <?php
//esta línea de código realiza la conexión a la base de datos a través de PDO
include('../../db/dbconnect_pdo.php');
include('function.php');
$query = '';
$output = array();
//esta linea de código consultas todas las fincas
$query .= "SELECT * FROM fincas ";
// :inicio: Esta estructura de código me permite realizar bsuquedas en la tabla de manera asincróna o en vivo  
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE Nombre_finca LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR Descripcion_finca LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR Departamento_finca LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR Municipio_finca LIKE "%'.$_POST["search"]["value"].'%"';
}
//:fin:

//:inicio: esta linea de código permite ordenar la información en la tabla
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id_finca DESC ';
}
if($_POST["length"] != -1)
{
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
//:fin:
//:inicio: estructura PDO que permite realizar na consulta a la tabla fincas y traermelas en un array y mostrarmelas en la tabla
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 
 $sub_array = array();
 
 $sub_array[] = $row["Nombre_finca"];
 $sub_array[] = $row["Descripcion_finca"];
 $sub_array[] = $row["Departamento_finca"];
 $sub_array[] = $row["Municipio_finca"];
 $sub_array[] = '<a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de:            '.$row["Nombre_finca"].'"name="update" value="" id="'.$row["id_finca"].'" class="tooltipped waves-effect waves-light black-text update"><i class="material-icons black-text center">mode_edit</i></a>';

$sub_array[] = '
<a href="#" name="view" id="'.$row["id_finca"].'" class="tooltipped siembra_add" data-position="left" data-delay="50" data-tooltip="Asignar siembras"><i class="material-icons grey-text center">add_circle</i></a>

<a href="#" name="view" id="'.$row["id_finca"].'" class="tooltipped ver_siem_asignadas" data-position="left" data-delay="50" data-tooltip="Ver siembras asignadas"><i class="material-icons grey-text center">remove_red_eye</i></a>

<a href="#" name="view" id="'.$row["id_finca"].'" class="tooltipped poligon_add" data-position="left" data-delay="50" data-tooltip="Asignar un mapa"><i class="material-icons green-text center">note_add</i></a>

<a href="#" name="view" id="'.$row["id_finca"].'" class="tooltipped ver_poligonos ver_archivos" data-position="left" data-delay="50" data-tooltip="Ver archivos"><i class="material-icons green-text center">remove_red_eye</i></a>';
    
 $sub_array[] = '<a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de:            '.$row["Nombre_finca"].'"name="delete" value="" id="'.$row["id_finca"].'" class="tooltipped waves-effect waves-light delete"><i class="material-icons red-text center">delete</i></a>';
   
 $data[] = $sub_array;
}
//:fin:
//:inicio: esta estructura de código retorna la información a la vista app/fincas/v.fincas.php en un array
$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records(),
 "data"    => $data
);
echo json_encode($output);
//:fin:
?>

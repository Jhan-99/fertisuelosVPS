   <?php
include('../../db/dbconnect_pdo.php');
include('function.php');
if(isset($_POST["id_cabecera"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM cabecera_foliar 
  WHERE id_cabecera = '".$_POST["id_cabecera"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["Nombre_programa"] = $row["Nombre_programa"];
  $output["Propietario"] = $row["Propietario"];
  $output["Asistente_tecnico"] = $row["Asistente_tecnico"];
  $output["Fecha_muestreo"] = $row["Fecha_muestreo"];
  $output["Fecha_recepcion"] = $row["Fecha_recepcion"];
  $output["Siembra_id"] = $row["Siembra_id"];
  $output["Departamento"] = $row["Departamento"];
  $output["Municipio"] = $row["Municipio"];
  $output["Finca"] = $row["Finca"];
 
 }
 echo json_encode($output);
}
?>
   
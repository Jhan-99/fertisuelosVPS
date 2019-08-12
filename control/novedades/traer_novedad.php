   <?php
include('../../db/dbconnect_pdo.php');
include('function.php');
if(isset($_POST["id_novedad"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM novedades 
  WHERE id = '".$_POST["id_novedad"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["tipnov_nov"] = $row["tipnov_nov"];
  $output["siembra_id"] = $row["siembra_id"];
  $output["camellon_nov"] = $row["camellon_nov"];
  $output["fecha_nov"] = $row["fecha_nov"];
  $output["tiempo_nov"] = $row["tiempo_nov"];
  $output["costopro_nov"] = $row["costopro_nov"];
  $output["costoman_nov"] = $row["costoman_nov"];
  $output["operario_nov"] = $row["operario_nov"];
  $output["estado_nov"] = $row["estado_nov"];
  $output["producto_id"] = $row["producto_id"];
  $output["dosis_nov"] = $row["dosis_nov"];
  $output["cattoxica_nov"] = $row["cattoxica_nov"];
 }
 echo json_encode($output);
}
?>
   
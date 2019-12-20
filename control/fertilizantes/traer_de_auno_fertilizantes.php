   <?php
//PERMITE TRAER DE MANERA INDIVIDUAL LOS FERTLIZANTES DE ACUERDO A SU IDENTIFICADOR
include('../../db/dbconnect_pdo.php');
include('function.php');
if(isset($_POST["id_fertilizante"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM fertilizantes 
  WHERE id_fertilizante = '".$_POST["id_fertilizante"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["Nombre_fertilizante"] = $row["Nombre_fertilizante"];
  $output["Tipo_fertilizante"] = $row["Tipo_fertilizante"];
  $output["Estado_fertilizante"] = $row["Estado_fertilizante"];
  $output["Fabricante_fertilizante"] = $row["Fabricante_fertilizante"];
  $output["Composicion_garant"] = $row["Composicion_garant"];
  $output["Composicion_fertilizante"] = $row["Composicion_fertilizante"];
  $output["Valor_fertilizante"] = $row["Valor_fertilizante"];
  $output["Status_fertilizante"] = $row["Status_fertilizante"];
 }
 echo json_encode($output);
}
?>
   
   <?php
//PERMITE SELECCIONAR UNA FINCA POR ID PARA PODER MODIFICARLA A TRAVÉS DEL ARCHIVO insert_update_panel_fincas
include('../../db/dbconnect_pdo.php');
include('function.php');
if(isset($_POST["id_finca"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM fincas 
  WHERE id_finca = '".$_POST["id_finca"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["Nombre_finca"] = $row["Nombre_finca"];
  $output["Descripcion_finca"] = $row["Descripcion_finca"];
  $output["Departamento_finca"] = $row["Departamento_finca"];
  $output["Municipio_finca"] = $row["Municipio_finca"];
  $output["Vereda_finca"] = $row["Vereda_finca"];
  $output["Latitud_finca"] = $row["Latitud_finca"];
  $output["Longitud_finca"] = $row["Longitud_finca"];
  $output["Viacc_finca"] = $row["Viacc_finca"];
  $output["Int_familia_finca"] = $row["Int_familia_finca"];
  $output["Jovenes_1518"] = $row["Jovenes_1518"];
  $output["Propietario"] = $row["Propietario"];
 }
 echo json_encode($output);
}
?>
   
   <?php
//:inicio: Permite traer analisis de suelos de manera individual en el panel de administración

include('../../db/dbconnect_pdo.php'); //incluir la cconsulta
include('function.php'); //incluir la función
if(isset($_POST["id_cabecera"]))
{
 $output = array();
  // :inicio: realiza la consulta hacia los analisis de suelos
 $statement = $connection->prepare(
  "SELECT * FROM cabecera_suelo 
  WHERE id_cabecera = '".$_POST["id_cabecera"]."' 
  LIMIT 1"
 );
//:fin:    
 $statement->execute();
 $result = $statement->fetchAll();
//:inicio:    analiza los resultados y me los recorre para entregarmelos en formato jason
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
    //:fin:

    //retorna los resultaodos solicitados y me los devuele en un array de jason
 echo json_encode($output);
}
?>
   
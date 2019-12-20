   <?php

//PERMITE TRAER DE MANERA INDIVIDUAL LOS ELEMENTOS DEL SUELO PARA PODER EDITARLOS A TRAVÉS DEL ARCHIVO insert_update_panel.php

include('../../db/dbconnect_pdo.php');
include('function.php');
if(isset($_POST["id_elemento"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM elementos 
  WHERE id_elemento = '".$_POST["id_elemento"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["Nombre_elemento"] = $row["Nombre_elemento"];
  $output["Descripcion_elemento"] = $row["Descripcion_elemento"];
  $output["Categoria_elemento"] = $row["Categoria_elemento"];
 }
 echo json_encode($output);
}
?>
   
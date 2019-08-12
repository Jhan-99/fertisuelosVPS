
<?php
//Eliminar

include('../../db/dbconnect_pdo.php');

if(isset($_POST["id_archivo"]))
{
 $file_path = 'files/' . $_POST["nombre_archivo"];
 if(unlink($file_path))
 {
  $query = "DELETE FROM archivos_ana_suelo WHERE id_archivo = '".$_POST["id_archivo"]."'";
  $statement = $connection->prepare($query);
  $statement->execute();
 }
}

?>

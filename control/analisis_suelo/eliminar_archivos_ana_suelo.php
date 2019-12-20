
<?php
//Eliminar los archivos del analisis de suelo

include('../../db/dbconnect_pdo.php'); //-> incluir la conexión a la base de datos

if(isset($_POST["id_archivo"])) //-> id del archivo  a eliminar
{
 $file_path = 'files/' . $_POST["nombre_archivo"]; //-> ruta del archivo
//:inicio:    si lo borrar del directorio entonces borre el registro de la base de datos
 if(unlink($file_path))
 {
  $query = "DELETE FROM archivos_ana_suelo WHERE id_archivo = '".$_POST["id_archivo"]."'";
  $statement = $connection->prepare($query);
  $statement->execute();
 }
//:fin:
}

?>

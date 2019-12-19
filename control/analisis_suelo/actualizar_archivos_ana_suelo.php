<?php
//Permite actualizar los archivos o documentos subidos para el analisis de suelo

include('../../db/dbconnect_pdo.php');

if(isset($_POST["id_archivo"])) // se refiere al "id" del archivo
{
    
 //:inicio: obtiene el antiguo nombre del  archivo , analisa si es correcto y lo sube
 $old_name = get_old_file_name($connection, $_POST["id_archivo"]);
 $file_array = explode(".", $old_name);
 $file_extension = end($file_array);
 $new_name = $_POST["nombre_archivo"] . '.' . $file_extension;
 $query = '';
 //:fin:
    
//:inicio: si todo está bien actualiza el archivo con su nuevo nombre
if($old_name != $new_name)
 {
  $old_path = 'files/' . $old_name;
  $new_path = 'files/' . $new_name;
  if(rename($old_path, $new_path))
  { 
   $query = "
   UPDATE archivos_ana_suelo 
   SET nombre_archivo = '".$new_name."', descripcion_archivo = '".$_POST["descripcion_archivo"]."' 
   WHERE id_archivo = '".$_POST["id_archivo"]."'
   ";
  }
 }
 else
 {
  $query = "
   UPDATE archivos_ana_suelo 
   SET descripcion_archivo = '".$_POST["descripcion_archivo"]."' 
   WHERE id_archivo = '".$_POST["id_archivo"]."'
   ";
 }
 
 $statement = $connection->prepare($query);
 $statement->execute();
}
//:fin:

//:inicio: esta función obtiene el nombre del archivo de acuerdo a su identificador, para poder ser actualizado
function get_old_file_name($connection, $id_archivo)
{
 $query = "
 SELECT nombre_archivo FROM archivos_ana_suelo WHERE id_archivo = '".$id_archivo."'
 ";
 $statement = $connection->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["nombre_archivo"];
 }
}
//:fin:

?>
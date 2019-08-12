<?php
//update.php

include('../../db/dbconnect_pdo.php');

if(isset($_POST["id_archivo"]))
{
 $old_name = get_old_file_name($connection, $_POST["id_archivo"]);
 $file_array = explode(".", $old_name);
 $file_extension = end($file_array);
 $new_name = $_POST["nombre_archivo"] . '.' . $file_extension;
 $query = '';
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

?>
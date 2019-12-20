<?php
//Permite subir archivos al análisis de suelo ya creado

include('../../db/dbconnect_pdo.php'); // incluir la conexión
if(count($_FILES["file"]["name"]) > 0)
{
 //$output = '';
 sleep(3);
//  Anaálisa si los archivos están correctos en cuanto a sus formatos y tamaños
 for($count=0; $count<count($_FILES["file"]["name"]); $count++)
 {
  $file_name = $_FILES["file"]["name"][$count];
  $id_ana = $_POST["id_ana"];
  $tmp_name = $_FILES["file"]['tmp_name'][$count];
  $file_array = explode(".", $file_name);
  $file_extension = end($file_array);
// cuando se sube el archivo automaticamente le asigna un nombre aleatorio 
  if(file_already_uploaded($file_name, $connection))
  {
   $file_name = $file_array[0] . '-'. rand() . '.' . $file_extension;
  }
     
  $location = 'files/' . $file_name; //ubicacion o directorio donde quedan los archivos dentro de control/analis_suelos/files/
     
    //     mueve los archivos al directrio asignado e inserta el registro en la base de datos
  if(move_uploaded_file($tmp_name, $location))
  {
   $query = "
   INSERT INTO archivos_ana_suelo (nombre_archivo, descripcion_archivo, id_cabecera) 
   VALUES ('".$file_name."', '', '$id_ana')
   ";
   $statement = $connection->prepare($query);
   $statement->execute();
  }
 }
}

//esta funcion consulta si el archivo ya se ha subido para evitar redundancias
function file_already_uploaded($file_name, $connection)
{
 $query = "SELECT * FROM archivos_ana_suelo WHERE nombre_archivo = '".$file_name."'";
 $statement = $connection->prepare($query);
 $statement->execute();
 $number_of_rows = $statement->rowCount();
 if($number_of_rows > 0)
 {
  return true;
 }
 else
 {
  return false;
 }
}

?>

<?php

include('../../db/dbconnect_pdo.php');
if(isset($_POST["id_files"]))
{
 $statement = $connection->prepare(
  "DELETE FROM poligonos_shp WHERE id_files = :id_files");
 $result = $statement->execute(
  array(
   ':id_files' => $_POST["id_files"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Enlace eliminado';
 }
}


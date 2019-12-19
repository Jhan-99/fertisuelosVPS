<?php
// Permite eliminar una novedad 

include('../../db/dbconnect_pdo.php');
include("function.php");

if(isset($_POST["id_novedad"]))
{
 
 $statement = $connection->prepare(
  "DELETE FROM novedades WHERE id = :id_novedad"
 );
 $result = $statement->execute(
  array(
   ':id_novedad' => $_POST["id_novedad"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Novedad eliminado';
 }
}



?>
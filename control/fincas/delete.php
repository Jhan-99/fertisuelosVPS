<?php
//ELIMINA UNA FINCA
include('../../db/dbconnect_pdo.php');
include("function.php");

if(isset($_POST["id_finca"]))
{
 
 $statement = $connection->prepare(
  "DELETE FROM fincas WHERE id_finca = :id_finca"
 );
 $result = $statement->execute(
  array(
   ':id_finca' => $_POST["id_finca"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Elemento eliminado';
 }
}



?>
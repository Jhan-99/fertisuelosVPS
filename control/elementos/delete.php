<?php
include('../../db/dbconnect_pdo.php');
include("function.php");

if(isset($_POST["id_elemento"]))
{
 
 $statement = $connection->prepare(
  "DELETE FROM elementos WHERE id_elemento = :id_elemento"
 );
 $result = $statement->execute(
  array(
   ':id_elemento' => $_POST["id_elemento"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Elemento eliminado';
 }
}



?>
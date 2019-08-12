<?php
//eliminar.php
include('../../db/dbconnect_pdo.php');
include("function.php");

if(isset($_POST["id_fertilizante"]))
{
 
 $statement = $connection->prepare(
  "DELETE FROM fertilizantes WHERE id_fertilizante = :id_fertilizante"
 );
 $result = $statement->execute(
  array(
   ':id_fertilizante' => $_POST["id_fertilizante"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Elemento eliminado';
 }
}



?>
<?php

include('../../db/dbconnect_pdo.php');
include("function.php");

if(isset($_POST["id_cabecera"]))
{
 
 $statement = $connection->prepare(
  "DELETE FROM cabecera_suelo WHERE id_cabecera = :id_cabecera"
 );
 $result = $statement->execute(
  array(
   ':id_cabecera' => $_POST["id_cabecera"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Analisis eliminado';
 }
}



?>
<?php
//:inicio: Este archivo permite eliminar un análisis de suelo de acuerdo a su id

include('../../db/dbconnect_pdo.php'); //incluir la conexión a la base de datos
include("function.php");

if(isset($_POST["id_cabecera"])) //-> es el id del analisis de suelo
{
 
//:inicio: prepara la declaración para ejecutar la consulta y eliminar el análisis de suelo
 $statement = $connection->prepare(
  "DELETE FROM cabecera_suelo WHERE id_cabecera = :id_cabecera"
 );
 $result = $statement->execute(
  array(
   ':id_cabecera' => $_POST["id_cabecera"]
  )
 );
//:fin:    
 
//:inicio:  si el resultado es satisfactorio , mostrar mensaje de exito
 if(!empty($result))
 {
  echo 'Analisis eliminado';
 }
//:fin:    
}



?>
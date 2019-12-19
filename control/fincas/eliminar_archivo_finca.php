<?php
//ELIMINA LOS ARCHIVOS QUE SE LE HAN SUBIDO A LA FINCA
include('../../db/dbconnect_pdo.php');
include("function.php");
if(isset($_POST["id_archivo"]))
{
	$finca_archivo = get_file_name($_POST["id_archivo"]);
	if($finca_archivo != '')
	{
		unlink("" . $finca_archivo);
	}
	$statement = $connection->prepare(
  "DELETE FROM archivos_finca WHERE id_archivo = :id_archivo");
	$result = $statement->execute(
		array(
			':id_archivo'	=>	$_POST["id_archivo"]
		)
	);
	
	if(!empty($result))
	{
	  echo 'Archivo eliminado';

	}
}



?>
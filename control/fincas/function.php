<?php
 
//ESTA FUNCION PERMITE OBTENER EL NOMBRE DE LOS ARCHIVOS RELACIONADOS CON LA FINCA Y DESPUÉS OBTENER TODAS LAS FINCAS PARA LISTARLAS EN LA VISTA
function get_file_name($id_archivo)
{
	include('../../db/dbconnect_pdo.php');
	$statement = $connection->prepare("SELECT archivo_finca FROM archivos_finca WHERE id_archivo = '$id_archivo'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["archivo_finca"];
	}
}

 
function get_total_all_records()
{
 include('../../db/dbconnect_pdo.php');
 $statement = $connection->prepare("SELECT * FROM fincas");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>
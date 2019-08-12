<?php

include('../../db/dbconnect_pdo.php');
include("function.php");

if(isset($_POST["id_siembra"]))
{
	$statement = $connection->prepare(
		"DELETE FROM siembras WHERE id_siembra = :id_siembra"
	);
	$result = $statement->execute(
		array(
			':id_siembra'	=>	$_POST["id_siembra"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Dato eliminado';
	}
}



?>
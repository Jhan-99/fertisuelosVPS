<?php
//PERMITE ELIMINAR LOS CULTIVOS
 include('../../db/dbconnect_pdo.php');
include("function.php");

if(isset($_POST["cultivo_id"]))
{
	$image = get_image_name($_POST["cultivo_id"]);
	if($image != '')
	{
		unlink("fotos_cultivos/" . $image);
	}
	$statement = $connection->prepare(
		"DELETE FROM cultivos WHERE id_cultivo = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["cultivo_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Cultivo eliminado';
	}
}



?>
<?php
//PERMITE TRAER DE MANERA INDIVIDUAL LOS CULTIVOS
 include('../../db/dbconnect_pdo.php');
include('function.php');
if(isset($_POST["cultivo_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM cultivos 
		WHERE id_cultivo = '".$_POST["cultivo_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll(); 

	foreach($result as $row)
	{
		$output["cod_cultivo"] = $row["cod_cultivo"];
		$output["Nombre_cultivo"] = $row["Nombre_cultivo"];
		$output["Variedad_cultivo"] = $row["Variedad_cultivo"];
		$output["Superficie_cultivo"] = $row["Superficie_cultivo"];
		$output["Metodo_cultivo"] = $row["Metodo_cultivo"];
		$output["Descripcion_cultivo"] = $row["Descripcion_cultivo"];
		if($row["image"] != '')
		{
			$output['user_image'] = '<img src="../../control/cultivos/fotos_cultivos/'.$row["image"].'" class="circle" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
		}
		else
		{
			$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		}
	}
	echo json_encode($output);
}
?>
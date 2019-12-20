<?php
//PERMITE INSERTAR O ACTUALIZAR LOS CULTIVOS
 include('../../db/dbconnect_pdo.php');
include('function.php');
if(isset($_POST["operacion"]))
{
	if($_POST["operacion"] == "Agregar")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $connection->prepare("
			INSERT INTO cultivos (cod_cultivo,Nombre_cultivo, Variedad_cultivo,Superficie_cultivo,Metodo_cultivo,Descripcion_cultivo, image) 
			VALUES (:cod_cultivo,:Nombre_cultivo, :Variedad_cultivo,:Superficie_cultivo,:Metodo_cultivo,:Descripcion_cultivo, :image)
		");
		$result = $statement->execute(
			array(
				':cod_cultivo'	=>	$_POST["cod_cultivo"],
				':Nombre_cultivo'	=>	$_POST["Nombre_cultivo"],
				':Variedad_cultivo'	=>	$_POST["Variedad_cultivo"],
				':Superficie_cultivo'	=>	$_POST["Superficie_cultivo"],
				':Metodo_cultivo'	=>	$_POST["Metodo_cultivo"],
				':Descripcion_cultivo'	=>	$_POST["Descripcion_cultivo"],
				':image'		=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Cultivo insertado';
		}
	}
	if($_POST["operacion"] == "Editar")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_user_image"];
		}
		$statement = $connection->prepare(
			"UPDATE cultivos 
			SET cod_cultivo = :cod_cultivo,Nombre_cultivo = :Nombre_cultivo, Variedad_cultivo = :Variedad_cultivo,Superficie_cultivo = :Superficie_cultivo,Metodo_cultivo = :Metodo_cultivo,Descripcion_cultivo = :Descripcion_cultivo, image = :image  
			WHERE id_cultivo = :id
			"
		);
		$result = $statement->execute(
			array(
				':cod_cultivo'	=>	$_POST["cod_cultivo"],
				':Nombre_cultivo'	=>	$_POST["Nombre_cultivo"],
				':Variedad_cultivo'	=>	$_POST["Variedad_cultivo"],
				':Superficie_cultivo'	=>	$_POST["Superficie_cultivo"],
				':Metodo_cultivo'	=>	$_POST["Metodo_cultivo"],
				':Descripcion_cultivo'	=>	$_POST["Descripcion_cultivo"],
				':image'		=>	$image,
				':id'			=>	$_POST["cultivo_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Cultivo Editado';
		}
	}
}

?>
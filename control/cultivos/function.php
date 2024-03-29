<?php
//FUNCION QUE PERMITE SUBIRLE UNA IMAGEN AL CULTIVO 
function upload_image()
{
	if(isset($_FILES["user_image"]))
	{
		$extension = explode('.', $_FILES['user_image']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = './fotos_cultivos/' . $new_name;
		move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
		return $new_name;
	}
}
//FUNCION QUE PERMITE OBTENER LA IMAGEN DEL CULTIVO
function get_image_name($cultivo_id)
{
	 include('../../db/dbconnect_pdo.php');
	$statement = $connection->prepare("SELECT image FROM cultivos WHERE id_cultivo = '$cultivo_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["image"];
	}
}

//FUNCION QUE PERMITE OBTENER TODOS LOS CULTIVOS Y RETORNARLOS A LA VISTA
function get_total_all_records()
{
	 include('../../db/dbconnect_pdo.php');
	$statement = $connection->prepare("SELECT * FROM cultivos");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>
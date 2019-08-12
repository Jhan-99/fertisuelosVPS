<?php  
	    include('../../db/dbconnect.php');                                                                

	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE matriz_datos_nitrogeno SET ".$column_name."='".$text."' WHERE id='".$id."'";  
	if(mysqli_query($conexion, $sql))  
	{  
		echo 'Fila actualizada '. $id;  
	}  
 ?>
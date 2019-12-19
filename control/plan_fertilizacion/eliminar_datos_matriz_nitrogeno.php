<?php  
	    include('../../db/dbconnect.php');                                                                

	$sql = "DELETE FROM matriz_datos_nitrogeno WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($conexion, $sql))  
	{  
		echo 'Fila eliminada';  
	}  
 ?>
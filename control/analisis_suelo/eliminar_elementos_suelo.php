
<?php
//Eliminar

include('../../db/dbconnect.php');
if(isset($_POST["id"]))
{
	$sql = "DELETE FROM ana_suelo_elementos WHERE id_ana_elementos = '".$_POST["id"]."'";  
	if(mysqli_query($conexion, $sql))  
	{  
		echo 'Dato eliminado';  
	} 
}

?>

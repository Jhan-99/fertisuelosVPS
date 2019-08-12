<?php
include('../../db/dbconnect_pdo.php');
include('function.php');
if(isset($_POST["id_siembra"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM siembras 
		WHERE id_siembra = '".$_POST["id_siembra"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["Nombre_siembra"] = $row["Nombre_siembra"];
        $output["N_plantas_siembra"] = $row["N_plantas_siembra"];
        $output["Descripcion_siembra"] = $row["Descripcion_siembra"];
        $output["Estado_siembra"] = $row["Estado_siembra"];
        $output["Area_siembra"] = $row["Area_siembra"];
        $output["Fecha_siembra"] = $row["Fecha_siembra"];
        $output["Tiporiego_siembra"] = $row["Tiporiego_siembra"];
        $output["Fteagua_siembra"] = $row["Fteagua_siembra"];
        $output["Edad_siembra"] = $row["Edad_siembra"];
        $output["Distancia_siembra"] = $row["Distancia_siembra"];
        $output["Sanitario_siembra"] = $row["Sanitario_siembra"];
        $output["Propagacion_siembra"] = $row["Propagacion_siembra"];
        $output["Registro_siembra"] = $row["Registro_siembra"];
        $output["Suelo_siembra"] = $row["Suelo_siembra"];
        $output["Cultivo_siembra"] = $row["Cultivo_siembra"];

	}
	echo json_encode($output);
} 
?>

 
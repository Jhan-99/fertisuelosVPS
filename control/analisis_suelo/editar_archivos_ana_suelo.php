<?php
//Permite editar los archivos del análisis de suelo
include('../../db/dbconnect_pdo.php');

$query = "
SELECT * FROM archivos_ana_suelo 
WHERE id_archivo = '".$_POST["id_archivo"]."'
";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
 $file_array = explode(".", $row["nombre_archivo"]);
 $output['nombre_archivo'] = $file_array[0];
 $output['descripcion_archivo'] = $row["descripcion_archivo"];
}

echo json_encode($output);

?>

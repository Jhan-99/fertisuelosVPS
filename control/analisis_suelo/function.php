 <?php

 //esta funcion permite traerme todos los analisis de suelos ejecutandose desde, listar_todos_anasuelos.php

function get_total_all_records()
{
 include('../../db/dbconnect_pdo.php');
 $statement = $connection->prepare("SELECT * FROM cabecera_suelo");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>
   
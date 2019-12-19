 <?php
//FUNCION QUE PERMITE TRAER TODO LOS FERTILIZANTES REGISTRADOS
function get_total_all_records()
{
include('../../db/dbconnect_pdo.php');
 $statement = $connection->prepare("SELECT * FROM fincas");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}
?>
   
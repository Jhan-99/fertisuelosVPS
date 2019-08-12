 <?php

 

function get_total_all_records()
{
include('../../db/dbconnect_pdo.php');
 $statement = $connection->prepare("SELECT * FROM elementos");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>
   
<?php
 

 
function get_total_all_records()
{
 include('../../db/dbconnect_pdo.php');
 $statement = $connection->prepare("SELECT * FROM novedades");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>
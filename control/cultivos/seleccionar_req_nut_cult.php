<?php

//select.php

include('../../db/dbconnect_pdo.php');  
if(isset($_POST["id_cultivo"]))
{
 
$query = "SELECT * FROM  req_nutricionales_cultivo WHERE id_cultivo = '".$_POST["id_cultivo"]."' ORDER BY id_req DESC";

$statement = $connection->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }

 echo json_encode($data);
}
	
}
?>
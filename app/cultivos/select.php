<?php

//select.php

include('../../dbconnect_pdo.php');
if(isset($_POST["cultivo_id"]))
{
 
$query = "SELECT * FROM req_nutricionales_cultivo WHERE id_cultivo = '".$_POST["cultivo_id"]."' ORDER BY id_req DESC";

$statement = $connect->prepare($query);

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

<?php

//load.php

include('../../db/dbconnect_pdo.php');

$data = array();

$query = "SELECT * FROM programaciones ORDER BY id";

$statement = $connection->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);

?>

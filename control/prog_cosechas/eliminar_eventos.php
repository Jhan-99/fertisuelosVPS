
<?php

//delete.php

if(isset($_POST["id"]))
{
 include('../../db/dbconnect_pdo.php');
 $query = "
 DELETE from programaciones WHERE id=:id
 ";
 $statement = $connection->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>

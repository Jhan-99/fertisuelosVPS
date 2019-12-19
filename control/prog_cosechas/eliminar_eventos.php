
<?php

//Este archivo me permite eliminar eventos de la programación de cosechas en calendario

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

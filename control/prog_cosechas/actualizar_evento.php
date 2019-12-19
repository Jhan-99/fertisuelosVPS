
<?php

//Este archivo me permite actualizar un evento en la programación de cosechas

include('../../db/dbconnect_pdo.php');

if(isset($_POST["id"]))
{
 $query = "
 UPDATE programaciones 
 SET title=:title, start_event=:start_event, end_event=:end_event 
 WHERE id=:id
 ";
 $statement = $connection->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':id'   => $_POST['id']
  )
 );
}

?>

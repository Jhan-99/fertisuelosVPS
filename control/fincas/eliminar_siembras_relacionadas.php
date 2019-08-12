 <?php  

include('../../db/dbconnect_pdo.php');
 if(isset($_POST["val_s"],$_POST["id_finca_rel"]))  
{
 $statement = $connection->prepare(
  "DELETE FROM siembras_finca WHERE id_finca = :id_finca_rel AND id_siembra = :val_s");
 $result = $statement->execute(
  array(
   ':id_finca_rel' => $_POST["id_finca_rel"],
   ':val_s' => $_POST["val_s"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Se ha eliminado esta siembra';
 }
}


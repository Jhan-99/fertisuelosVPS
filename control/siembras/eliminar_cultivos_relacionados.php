 <?php  
 // PERMITE ELIMINAR CULTIVOS RELACIONADOS A LAS SIEMBRAS

include('../../db/dbconnect_pdo.php');
 if(isset($_POST["val_c"],$_POST["id_siembra_rel"]))  
{
 $statement = $connection->prepare(
  "DELETE FROM cultivos_siembra WHERE id_siembra = :id_siembra_rel AND id_cultivo = :val_c");
 $result = $statement->execute(
  array(
   ':id_siembra_rel' => $_POST["id_siembra_rel"],
   ':val_c' => $_POST["val_c"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Se ha eliminado este cultivo';
 }
}


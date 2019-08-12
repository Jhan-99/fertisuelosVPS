<?php

//multiple_update.php

include('../../db/dbconnect_pdo.php');  

if(isset($_POST['hidden_id']))
{
 $valor_req = $_POST['valor_req'];
 $descripcion_req = $_POST['descripcion_req'];
 $etiqueta = $_POST['etiqueta'];
 $nombre_req = $_POST['nombre_req'];
 $id_cultivo = $_POST['id_cultivo'];
 $id_req = $_POST['hidden_id'];
 for($count = 0; $count < count($id_req); $count++)
 {
  $data = array(
   ':valor_req'   => $valor_req[$count],
   ':descripcion_req'  => $descripcion_req[$count],
   ':etiqueta'  => $etiqueta[$count],
   ':nombre_req' => $nombre_req[$count],
   ':id_cultivo'   => $id_cultivo[$count],
   ':id_req'   => $id_req[$count]
  );
  $query = "
  UPDATE req_nutricionales_cultivo 
  SET valor_req = :valor_req, descripcion_req = :descripcion_req, etiqueta = :etiqueta, nombre_req = :nombre_req, id_cultivo = :id_cultivo 
  WHERE id_req = :id_req
  ";
  $statement = $connection->prepare($query);
  $statement->execute($data);
 }
}

?>

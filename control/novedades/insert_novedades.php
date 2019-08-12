      <?php
    include('../../db/dbconnect_pdo.php');
    include('function.php');
    if(isset($_POST["operacion"]))
    {
     if($_POST["operacion"] == "Agregar")
     {
      $statement = $connection->prepare("
       INSERT INTO novedades (tipnov_nov,
       siembra_id, camellon_nov, fecha_nov, tiempo_nov, costopro_nov, costoman_nov, operario_nov, estado_nov, producto_id, dosis_nov,
       cattoxica_nov) 
       VALUES (:tipnov_nov, :siembra_id, :camellon_nov, :fecha_nov, :tiempo_nov, :costopro_nov, :costoman_nov, :operario_nov, :estado_nov, :producto_id, :dosis_nov, :cattoxica_nov) 
       ");
      $result = $statement->execute(
       array(
        ':tipnov_nov' => $_POST["tipnov_nov"],
        ':siembra_id' => $_POST["siembra_id"],
        ':camellon_nov' => $_POST["camellon_nov"],
        ':fecha_nov' => $_POST["fecha_nov"],
        ':tiempo_nov' => $_POST["tiempo_nov"],
        ':costopro_nov' => $_POST["costopro_nov"],
        ':costoman_nov' => $_POST["costoman_nov"],
        ':operario_nov' => $_POST["operario_nov"],
        ':estado_nov' => $_POST["estado_nov"],
        ':producto_id' => $_POST["producto_id"],
        ':dosis_nov' => $_POST["dosis_nov"],
        ':cattoxica_nov' => $_POST["cattoxica_nov"],
       )
      );
      if(!empty($result))
      {
       echo 'Novedad Guardada';
      }else{
        error_reporting(E_ALL ^ E_NOTICE);
        echo 'No se ha podido guardar tu novedad, comprueba que todos los campos esten diligenciados';  
      }
     }
     if($_POST["operacion"] == "Editar")
     {
      $statement = $connection->prepare(
       "UPDATE novedades 
       SET tipnov_nov = :tipnov_nov, siembra_id = :siembra_id, camellon_nov = :camellon_nov, fecha_nov = :fecha_nov, tiempo_nov = :tiempo_nov, costopro_nov = :costopro_nov, costoman_nov = :costoman_nov, operario_nov = :operario_nov, estado_nov = :estado_nov, producto_id = :producto_id, dosis_nov = :dosis_nov, cattoxica_nov = :cattoxica_nov
       WHERE id = :id_novedad
       "
      );
      $result = $statement->execute(
       array(
        ':tipnov_nov' => $_POST["tipnov_nov"],
        ':siembra_id' => $_POST["siembra_id"],
        ':camellon_nov' => $_POST["camellon_nov"],
        ':fecha_nov' => $_POST["fecha_nov"],
        ':tiempo_nov' => $_POST["tiempo_nov"],
        ':costopro_nov' => $_POST["costopro_nov"],
        ':costoman_nov' => $_POST["costoman_nov"],
        ':operario_nov' => $_POST["operario_nov"],
        ':estado_nov' => $_POST["estado_nov"],
        ':producto_id' => $_POST["producto_id"],
        ':dosis_nov' => $_POST["dosis_nov"],
        ':cattoxica_nov' => $_POST["cattoxica_nov"],

        ':id_novedad'   => $_POST["id_novedad"]
       )
      );
      if(!empty($result))
      {
       echo 'Dato actualizado';
      }
     }
    }

    ?>
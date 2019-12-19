      <?php
    include('../../db/dbconnect_pdo.php');
    include('function.php');
    if(isset($_POST["operacion"]))
    {
     if($_POST["operacion"] == "Agregar")
     {

      $statement = $connection->prepare("
       INSERT INTO cabecera_foliar (Nombre_programa, Propietario, Asistente_tecnico,Fecha_muestreo,Fecha_recepcion,Momento_muestreo,Siembra_id) 
       
       VALUES (:Nombre_programa, :Propietario, :Asistente_tecnico, :Fecha_muestreo, :Fecha_recepcion,
       :Momento_muestreo, :Momento_muestreo,:Siembra_id, :Siembra_id)
      ");
      $result = $statement->execute(
       array(
        ':Nombre_programa' => $_POST["Nombre_programa"],
        ':Propietario' => $_POST["Propietario"],
        ':Asistente_tecnico' => $_POST["Asistente_tecnico"],
        ':Fecha_muestreo' => $_POST["Fecha_muestreo"],
        ':Fecha_recepcion' => $_POST["Fecha_recepcion"],
        ':Momento_muestreo' => $_POST["Momento_muestreo"],
        ':Siembra_id' => $_POST["Siembra_id"],
        ':Departamento' => $_POST["Departamento"],
        ':Municipio' => $_POST["Municipio"],
        ':Finca' => $_POST["Finca"],

       )
      );
      if(!empty($result))
      {
       echo 'Dato insertado';
      }
     }
     if($_POST["operacion"] == "Editar")
     {
      $statement = $connection->prepare(
       "UPDATE cabecera_foliar 
       SET Nombre_programa = :Nombre_programa, Propietario = :Propietario, Asistente_tecnico = :Asistente_tecnico, Fecha_muestreo = :Fecha_muestreo, Fecha_recepcion = :Fecha_recepcion, Momento_muestreo = :Momento_muestreo, Siembra_id = :Siembra_id,
       Departamento = :Departamento, Municipio = :Municipio, Finca = :Finca
       WHERE id_cabecera = :id_cabecera"
      );
      $result = $statement->execute(
       array(
        ':Nombre_programa' => $_POST["Nombre_programa"],
        ':Propietario' => $_POST["Propietario"],
        ':Asistente_tecnico' => $_POST["Asistente_tecnico"],
        ':Fecha_muestreo' => $_POST["Fecha_muestreo"],
        ':Fecha_recepcion' => $_POST["Fecha_recepcion"],
        ':Momento_muestreo' => $_POST["Momento_muestreo"],
        ':Siembra_id' => $_POST["Siembra_id"],
        ':Departamento' => $_POST["Departamento"],
        ':Municipio' => $_POST["Municipio"],
        ':Finca' => $_POST["Finca"],

        ':id_cabecera'   => $_POST["id_cabecera"]
       )
      );
      if(!empty($result))
      {
       echo 'Dato actualizado';
      }
     }
    }

    ?>
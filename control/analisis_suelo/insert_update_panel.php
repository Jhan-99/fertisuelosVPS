      <?php
    //este archivo me permite insertar o actualizar un analisis de suelo segun el valor de $_POST["operacion"] == "Agregar"

    include('../../db/dbconnect_pdo.php'); //->incluir la conexión a la base de datos
    include('function.php'); //-> inlcuir la función que obtiene los datos de los análisis de suelos
    if(isset($_POST["operacion"]))
    {
     if($_POST["operacion"] == "Agregar")
     {

      //:inicio:  declaración que inserta los datos del análisis de suelo
      $statement = $connection->prepare("
       INSERT INTO cabecera_suelo (Nombre_programa, Propietario, Asistente_tecnico) 
       VALUES (:Nombre_programa, :Propietario, :Asistente_tecnico, :Fecha_muestreo, :Fecha_recepcion,
       :Siembra_id, :Siembra_id)
      ");
        //:fin: 
      $result = $statement->execute(
       array(
        ':Nombre_programa' => $_POST["Nombre_programa"],
        ':Propietario' => $_POST["Propietario"],
        ':Asistente_tecnico' => $_POST["Asistente_tecnico"],
        ':Fecha_muestreo' => $_POST["Fecha_muestreo"],
        ':Fecha_recepcion' => $_POST["Fecha_recepcion"],
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
        //:inicio:  declaración que edita los datos del análisis de suelo
      $statement = $connection->prepare(
       "UPDATE cabecera_suelo 
       SET Nombre_programa = :Nombre_programa, Propietario = :Propietario, Asistente_tecnico = :Asistente_tecnico, Fecha_muestreo = :Fecha_muestreo, Fecha_recepcion = :Fecha_recepcion, Siembra_id = :Siembra_id,
       Departamento = :Departamento, Municipio = :Municipio, Finca = :Finca
       WHERE id_cabecera = :id_cabecera
       "
      );
        //:fin:
      $result = $statement->execute(
       array(
        ':Nombre_programa' => $_POST["Nombre_programa"],
        ':Propietario' => $_POST["Propietario"],
        ':Asistente_tecnico' => $_POST["Asistente_tecnico"],
        ':Fecha_muestreo' => $_POST["Fecha_muestreo"],
        ':Fecha_recepcion' => $_POST["Fecha_recepcion"],
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
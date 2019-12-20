      <?php
    // PERMITE INSERTAR O ACTUALIZAR AS SIEMBRAS SEGÚN EL VALOR DE $_POST["operacion"] == "Agregar Editar"
    include('../../db/dbconnect_pdo.php');
    include('function.php');
    if(isset($_POST["operacion"]))
    {
     if($_POST["operacion"] == "Agregar")
     {

      $statement = $connection->prepare("
       INSERT INTO siembras (Nombre_siembra, N_plantas_siembra, Descripcion_siembra, Estado_siembra, Area_siembra, Fecha_siembra, Tiporiego_siembra, Fteagua_siembra, Edad_siembra, Distancia_siembra, Sanitario_siembra, Propagacion_siembra, Registro_siembra, Suelo_siembra) 
       VALUES (:Nombre_siembra, :N_plantas_siembra, :Descripcion_siembra, :Estado_siembra, :Area_siembra, :Fecha_siembra, :Tiporiego_siembra, :Fteagua_siembra, :Edad_siembra, :Distancia_siembra, :Sanitario_siembra, :Propagacion_siembra, :Registro_siembra, :Suelo_siembra, :Cultivo_siembra) ");
      $result = $statement->execute(
       array(
        ':Nombre_siembra' => $_POST["Nombre_siembra"],
        ':N_plantas_siembra' => $_POST["N_plantas_siembra"],
        ':Descripcion_siembra' => $_POST["Descripcion_siembra"],
        ':Estado_siembra' => $_POST["Estado_siembra"],
        ':Area_siembra' => $_POST["Area_siembra"],
        ':Fecha_siembra' => $_POST["Fecha_siembra"],
        ':Tiporiego_siembra' => $_POST["Tiporiego_siembra"],
        ':Fteagua_siembra' => $_POST["Fteagua_siembra"],
        ':Edad_siembra' => $_POST["Edad_siembra"],
        ':Distancia_siembra' => $_POST["Distancia_siembra"],
        ':Sanitario_siembra' => $_POST["Sanitario_siembra"],
        ':Propagacion_siembra' => $_POST["Propagacion_siembra"],
        ':Registro_siembra' => $_POST["Registro_siembra"],
        ':Suelo_siembra' => $_POST["Suelo_siembra"],
        ':Cultivo_siembra' => $_POST["Cultivo_siembra"],

       )
      );
      if(!empty($result))
      {
       echo '¡Tu siembra se ha insertado!';
      }
     }
     if($_POST["operacion"] == "Editar")
     {
      $statement = $connection->prepare(
       "UPDATE siembras 
       SET Nombre_siembra = :Nombre_siembra, N_plantas_siembra = :N_plantas_siembra, Descripcion_siembra = :Descripcion_siembra, Estado_siembra = :Estado_siembra, Area_siembra = :Area_siembra, Fecha_siembra = :Fecha_siembra, Tiporiego_siembra = :Tiporiego_siembra, Fteagua_siembra = :Fteagua_siembra, Edad_siembra = :Edad_siembra, Distancia_siembra = :Distancia_siembra, Sanitario_siembra = :Sanitario_siembra, Propagacion_siembra = :Propagacion_siembra, Registro_siembra = :Registro_siembra, Suelo_siembra = :Suelo_siembra, Cultivo_siembra = :Cultivo_siembra
       WHERE id_siembra = :id_siembra
       "
      );
      $result = $statement->execute(
       array(
        ':Nombre_siembra' => $_POST["Nombre_siembra"],
        ':N_plantas_siembra' => $_POST["N_plantas_siembra"],
        ':Descripcion_siembra' => $_POST["Descripcion_siembra"],
        ':Estado_siembra' => $_POST["Estado_siembra"],
        ':Area_siembra' => $_POST["Area_siembra"],
        ':Fecha_siembra' => $_POST["Fecha_siembra"],
        ':Tiporiego_siembra' => $_POST["Tiporiego_siembra"],
        ':Fteagua_siembra' => $_POST["Fteagua_siembra"],
        ':Edad_siembra' => $_POST["Edad_siembra"],
        ':Distancia_siembra' => $_POST["Distancia_siembra"],
        ':Sanitario_siembra' => $_POST["Sanitario_siembra"],
        ':Propagacion_siembra' => $_POST["Propagacion_siembra"],
        ':Registro_siembra' => $_POST["Registro_siembra"],
        ':Suelo_siembra' => $_POST["Suelo_siembra"],
        ':Cultivo_siembra' => $_POST["Cultivo_siembra"],
           
        ':id_siembra'   => $_POST["id_siembra"]
       )
      );
      if(!empty($result))
      {
       echo '¡Has actualizado tu siembra!';
      }
     }
    }

    ?>
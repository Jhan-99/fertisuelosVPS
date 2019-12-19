      <?php
//PERMITE INSERTAR O ACTULIZAR LOS FERTILIZANTES SEGUN EL VALOR DE $_POST["operacion"] == "Agregar Editar"
    include('../../db/dbconnect_pdo.php');
    include('function.php');
    if(isset($_POST["operacion"]))
    {
     if($_POST["operacion"] == "Agregar")
     {

      $statement = $connection->prepare("
       INSERT INTO fertilizantes (Nombre_fertilizante, Tipo_fertilizante, Estado_fertilizante, Fabricante_fertilizante,Composicion_garant, Composicion_fertilizante, Valor_fertilizante, Status_fertilizante) 
       
       VALUES (:Nombre_fertilizante, :Tipo_fertilizante, :Estado_fertilizante, :Fabricante_fertilizante, :Composicion_garant, :Composicion_fertilizante, :Valor_fertilizante, :Status_fertilizante)
      ");
      $result = $statement->execute(
       array(
        ':Nombre_fertilizante' => $_POST["Nombre_fertilizante"],
        ':Tipo_fertilizante' => $_POST["Tipo_fertilizante"],
        ':Estado_fertilizante' => $_POST["Estado_fertilizante"],
        ':Fabricante_fertilizante' => $_POST["Fabricante_fertilizante"],
        ':Composicion_garant' => $_POST["Composicion_garant"],
        ':Composicion_fertilizante' => $_POST["Composicion_fertilizante"],
        ':Valor_fertilizante' => $_POST["Valor_fertilizante"],
        ':Status_fertilizante' => $_POST["Status_fertilizante"]
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
       "UPDATE fertilizantes 
       SET Nombre_fertilizante = :Nombre_fertilizante, Tipo_fertilizante = :Tipo_fertilizante, Estado_fertilizante = :Estado_fertilizante, Fabricante_fertilizante = :Fabricante_fertilizante,
	   Composicion_garant = :Composicion_garant, Composicion_fertilizante = :Composicion_fertilizante, Valor_fertilizante = :Valor_fertilizante, Status_fertilizante = :Status_fertilizante
       WHERE id_fertilizante = :id_fertilizante
       "
      );
      $result = $statement->execute(
       array(
        ':Nombre_fertilizante' => $_POST["Nombre_fertilizante"],
        ':Tipo_fertilizante' => $_POST["Tipo_fertilizante"],
        ':Estado_fertilizante' => $_POST["Estado_fertilizante"],
        ':Fabricante_fertilizante' => $_POST["Fabricante_fertilizante"],
        ':Composicion_garant' => $_POST["Composicion_garant"],
        ':Composicion_fertilizante' => $_POST["Composicion_fertilizante"],
        ':Valor_fertilizante' => $_POST["Valor_fertilizante"],
        ':Status_fertilizante' => $_POST["Status_fertilizante"],

        ':id_fertilizante'   => $_POST["id_fertilizante"]
       )
      );
      if(!empty($result))
      {
       echo 'Dato actualizado';
      }
     }
    }

    ?>
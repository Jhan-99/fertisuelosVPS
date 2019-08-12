      <?php
    include('db.php');
include('../../db/dbconnect_pdo.php');
    if(isset($_POST["operacion"]))
    {
     if($_POST["operacion"] == "Agregar")
     {

      $statement = $connection->prepare("
       INSERT INTO elementos (Nombre_elemento, Descripcion_elemento, Categoria_elemento) 
       VALUES (:Nombre_elemento, :Descripcion_elemento, :Categoria_elemento)
      ");
      $result = $statement->execute(
       array(
        ':Nombre_elemento' => $_POST["Nombre_elemento"],
        ':Descripcion_elemento' => $_POST["Descripcion_elemento"],
        ':Categoria_elemento' => $_POST["Categoria_elemento"],
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
       "UPDATE elementos 
       SET Nombre_elemento = :Nombre_elemento, Descripcion_elemento = :Descripcion_elemento, Categoria_elemento = :Categoria_elemento
       WHERE id_elemento = :id_elemento
       "
      );
      $result = $statement->execute(
       array(
        ':Nombre_elemento' => $_POST["Nombre_elemento"],
        ':Descripcion_elemento' => $_POST["Descripcion_elemento"],
        ':Categoria_elemento' => $_POST["Categoria_elemento"],

        ':id_elemento'   => $_POST["id_elemento"]
       )
      );
      if(!empty($result))
      {
       echo 'Dato actualizado';
      }
     }
    }

    ?>
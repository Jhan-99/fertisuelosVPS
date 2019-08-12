      <?php
    include('../../db/dbconnect_pdo.php');
    include('function.php');
    if(isset($_POST["operacion"]))
    {
     if($_POST["operacion"] == "Agregar")
     {

      $statement = $connection->prepare("
       INSERT INTO fincas (Nombre_finca, Descripcion_finca, Departamento_finca,Municipio_finca,Vereda_finca,Latitud_finca,Longitud_finca,Viacc_finca,Int_familia_finca,Jovenes_1518,
       Propietario) 
       VALUES (:Nombre_finca, :Descripcion_finca, :Departamento_finca, :Municipio_finca, :Vereda_finca, :Latitud_finca, :Longitud_finca, :Viacc_finca, :Int_familia_finca, :Jovenes_1518, :Propietario)
      ");
      $result = $statement->execute(
       array(
        ':Nombre_finca' => $_POST["Nombre_finca"],
        ':Descripcion_finca' => $_POST["Descripcion_finca"],
        ':Departamento_finca' => $_POST["Departamento_finca"],
        ':Municipio_finca' => $_POST["Municipio_finca"],
        ':Vereda_finca' => $_POST["Vereda_finca"],
        ':Latitud_finca' => $_POST["Latitud_finca"],
        ':Longitud_finca' => $_POST["Longitud_finca"],
        ':Viacc_finca' => $_POST["Viacc_finca"],
        ':Int_familia_finca' => $_POST["Int_familia_finca"],
        ':Jovenes_1518' => $_POST["Jovenes_1518"],
        ':Propietario' => $_POST["Propietario"],
       )
      );
      if(!empty($result))
      {
       echo 'Finca Guardada';
      }else{
        error_reporting(E_ALL ^ E_NOTICE);
        echo 'No se ha podido guardar tu finca, comprueba que todos los campos esten diligenciados';  
      }
     }
     if($_POST["operacion"] == "Editar")
     {
      $statement = $connection->prepare(
       "UPDATE fincas 
       SET Nombre_finca = :Nombre_finca, Descripcion_finca = :Descripcion_finca, Departamento_finca = :Departamento_finca, Municipio_finca = :Municipio_finca, Vereda_finca = :Vereda_finca, Latitud_finca = :Latitud_finca, Longitud_finca = :Longitud_finca, Viacc_finca = :Viacc_finca, Int_familia_finca = :Int_familia_finca, Jovenes_1518 = :Jovenes_1518, Propietario = :Propietario
       WHERE id_finca = :id_finca
       "
      );
      $result = $statement->execute(
       array(
        ':Nombre_finca' => $_POST["Nombre_finca"],
        ':Descripcion_finca' => $_POST["Descripcion_finca"],
        ':Departamento_finca' => $_POST["Departamento_finca"],
        ':Municipio_finca' => $_POST["Municipio_finca"],
        ':Vereda_finca' => $_POST["Vereda_finca"],
        ':Latitud_finca' => $_POST["Latitud_finca"],
        ':Longitud_finca' => $_POST["Longitud_finca"],
        ':Viacc_finca' => $_POST["Viacc_finca"],
        ':Int_familia_finca' => $_POST["Int_familia_finca"],
        ':Jovenes_1518' => $_POST["Jovenes_1518"],
        ':Propietario' => $_POST["Propietario"],

        ':id_finca'   => $_POST["id_finca"]
       )
      );
      if(!empty($result))
      {
       echo 'Dato actualizado';
      }
     }
    }

    ?>
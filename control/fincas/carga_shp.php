<?php
include('../../db/dbconnect.php');
$target_dir = "fincas_/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // $var_finca = "5";
        $id_finca = $_POST["id_finca"];
        $identificador = "Archivofinca001";

// Comprueba si existe el archivo 
if (file_exists($target_file)) {
    echo "Lo sentimos pero, Este archivo ya existe.";
    $uploadOk = 0;
}elseif($_FILES["file"]["size"] > 500000){
    // Cmprueba el tamaño del archivo 
    echo "Lo sentimos, Tu archivo es muy grande para subir.";
    $uploadOk = 0;    
}elseif ($imageFileType != "shp" && $imageFileType != "kml" && $imageFileType != "kmz"
&& $imageFileType != "zip" ){
    echo "Lo sentimos, Solo archivos SHP, KML, KMZ & ZIP.";
    $uploadOk = 0;
    
}elseif ($uploadOk == 0) {
 // Comprueba si $uploadOk Se establecio a por alguna error
 echo "Lo sentimos, Tu archivo no se pudo subir.";
// si todo esta bien, pues entonces toca subirlo    
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "El archivo ". basename( $_FILES["file"]["name"]). " Se ha subido.";
        $sql = "INSERT INTO archivos_finca(id_finca,descripcion_archivo,archivo_finca) VALUES ('".$id_finca."','".$identificador."','".$target_file."')";
        if(mysqli_query($conexion, $sql)) {  
               echo "Asignación correcta";  
          } else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);    
        } 
        
    } else {
        echo "Lo sentimos, Hubo un error subiendo el archivo.";
    }
}



?>
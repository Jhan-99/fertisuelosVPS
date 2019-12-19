<?php
//index.php
include('../../db/dbconnect.php');     
$departamento = '';
$query = "SELECT Departamento FROM depar_munic_finca GROUP BY Departamento ORDER BY Departamento ASC";
$result = mysqli_query($conexion, $query);
while($row = mysqli_fetch_array($result))
{
 $departamento .= '<option value="'.$row["Departamento"].'">'.$row["Departamento"].'</option>';
}

        //FUNCION PARA OBTTENER LOS DATOS DE LAS PERSONAS EN EL SELECT
                 function obtener_personas($conexion) {  
                  $output = '';  
                     
                  $sql = "SELECT * FROM personas ORDER BY id_persona DESC";  
                  $result = mysqli_query($conexion, $sql);  
                  $output .= '<option id="opt_vacio" value="Admin" disabled selected>Propietarios registrados</option>';  
                  while($row = mysqli_fetch_array($result))  
                  {  
                       $output .= '<option value="'.$row["id_persona"].'">'.$row["Nombre_persona"].'</option>';  
                  }  
                  return $output;  
             }  
             function obtener_carac_personas($conexion)  
             {  

             }

                 function obtener_siembras($conexion) {  
                  $output = '';  
                     
                  $sql = "SELECT * FROM siembras ORDER BY id_siembra DESC";  
                  $result = mysqli_query($conexion, $sql);  
                  //$output .= '<option id="opt_vacio" value="Admin" disabled selected>Siembras registradas</option>';  
                  while($row = mysqli_fetch_array($result))  
                  {  
                       $output .= '<option value="'.$row["id_siembra"].'">'.$row["Nombre_siembra"].'</option>';  
                  }  
                  return $output;  
             }              

        function obtener_fertilizantes($conexion) {  
                  $output = '';  
                     
                  $sql = "SELECT * FROM fertilizantes ORDER BY id_fertilizante DESC";  
                  $result = mysqli_query($conexion, $sql);  
                  while($row = mysqli_fetch_array($result))  
                  {  
                       $output .= '<option value="'.$row["id_fertilizante"].'">'.$row["Nombre_fertilizante"].'</option>';  
                  }  
                  return $output;  
             } 

?>
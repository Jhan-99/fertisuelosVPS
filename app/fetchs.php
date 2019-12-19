<?php 
include("../../db/dbconnect.php");
$query = "SELECT * FROM personas";
$result = mysqli_query($conexion, $query);

            $Departamento = '';
            $query = "SELECT Departamento_finca FROM fincas GROUP BY Departamento_finca ORDER BY Departamento_finca ASC";
            $result = mysqli_query($conexion, $query);
            while($row = mysqli_fetch_array($result))
            {
             $Departamento .= '<option value="'.$row["Departamento_finca"].'">'.$row["Departamento_finca"].'</option>';
            }
?>
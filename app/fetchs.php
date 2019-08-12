<?php 
include("../../db/dbconnect.php");
$query = "SELECT * FROM personas";
$result = mysqli_query($conexion, $query);
?>
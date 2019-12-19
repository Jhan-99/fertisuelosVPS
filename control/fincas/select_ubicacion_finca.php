<?php
//PERMITE SELECCIONAR EL DEPARTAMENTO, MUNICIPIO Y VEREDA PARA ASIGNARLOS COMO UBICACION A UNA FINCA
if(isset($_POST["action"]))
{
   include('../../db/dbconnect.php');
 $output = '';
 if($_POST["action"] == "Departamento_finca")
 {
  $query = "SELECT Municipio FROM depar_munic_finca WHERE Departamento = '".$_POST["query"]."' GROUP BY Municipio";
  $result = mysqli_query($conexion, $query);
  $output .= '<option value="">Municipio finca</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["Municipio"].'">'.$row["Municipio"].'</option>';
  }
 }
 if($_POST["action"] == "Municipio_finca")
 {
  $query = "SELECT Vereda_finca FROM depar_munic_finca WHERE Municipio = '".$_POST["query"]."'";
  $result = mysqli_query($conexion, $query);
  $output .= '<option value="">Vereda finca</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["Vereda_finca"].'">'.$row["Vereda_finca"].'</option>';
  }
 }
 echo $output;
}
?>
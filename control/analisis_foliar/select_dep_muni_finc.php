<?php
//fetch.php
if(isset($_POST["selec_control"]))
{
include('../../db/dbconnect.php');                                  
 $output = '';
 if($_POST["selec_control"] == "Departamento")
 {
  $query = "SELECT Municipio_finca FROM fincas WHERE Departamento_finca = '".$_POST["query"]."' GROUP BY Municipio_finca";
  $result = mysqli_query($conexion, $query);
  $output .= '<option value="">Seleccione Municipio</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["Municipio_finca"].'">'.$row[ "Municipio_finca"].'</option>';
  }
 }
 if($_POST["selec_control"] == "Municipio")
 {
  $query = "SELECT Nombre_finca,id_finca FROM fincas WHERE Municipio_finca  = '".$_POST["query"]."'";
  $result = mysqli_query($conexion, $query);
  $output .= '<option value="">Seleccione Finca</option>';
  while($row = mysqli_fetch_array($result)) 
  {
   $output .= '<option value="'.$row["id_finca"].'">'.$row["Nombre_finca"].'</option>';
  }
 } 
    
    

 echo $output;
}
?>
<?php
//Este archivo me permite seleccionar el departamento, el municipio y la finca para el anális de suelo

if(isset($_POST["selec_control"]))
{
include('../../db/dbconnect.php'); //incluir la conexión
    
 $output = '';
//:inicio:  estesegmento de código carga los departamentos y los agrupa por los municipios
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
//:fin:    
    
//:inicio: este segmento de código consulta los municipios de acuerdo al padre al que pertenecen que sería el departaento
 if($_POST["selec_control"] == "Municipio")
 {
  $query = "SELECT Nombre_finca,id_finca FROM fincas WHERE Municipio_finca  = '".$_POST["query"]."'";
  $result = mysqli_query($conexion, $query);
  $output .= '<option value="">Seleccione Finca</option>';
  while($row = mysqli_fetch_array($result)) 
  {
   $output .= '<option value="'.$row["Nombre_finca"].'">'.$row["Nombre_finca"].'</option>';
  }
 } 
  //:fin:  
    

 echo $output;
}
?>
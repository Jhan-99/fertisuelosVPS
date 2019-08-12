<?php
//fetch.php
include("../../db/dbconnect.php");
$query = "select * from programaciones A where A.end_event <= '2018-12-31' LIMIT  4;";                                             
$result = mysqli_query($conexion, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
  echo '<div class="fc-event light-blue accent-2">'.$row["title"].'<div class="fc-event cyan darken-1">'.$row["start_event"].'</div></div>
  ';
 }
}
?>
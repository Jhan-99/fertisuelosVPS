 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["id_cultivo"]))  
 {  
      $id_cultivo = mysqli_real_escape_string($conexion, $_POST["id_cultivo"]);  
      $r_nitrogeno = mysqli_real_escape_string($conexion, $_POST["r_nitrogeno"]);  
      $r_fosforo = mysqli_real_escape_string($conexion, $_POST["r_fosforo"]);  
      $r_potasio = mysqli_real_escape_string($conexion, $_POST["r_potasio"]);
      $r_magnesio = mysqli_real_escape_string($conexion, $_POST["r_magnesio"]);  
      $r_calcio = mysqli_real_escape_string($conexion, $_POST["r_calcio"]);  
      $r_azufre = mysqli_real_escape_string($conexion, $_POST["r_azufre"]);  
      $r_boro = mysqli_real_escape_string($conexion, $_POST["r_boro"]);  
      $r_zinc = mysqli_real_escape_string($conexion, $_POST["r_zinc"]);  
      $r_cobre = mysqli_real_escape_string($conexion, $_POST["r_cobre"]);  
      $r_hierro = mysqli_real_escape_string($conexion, $_POST["r_hierro"]);   
      //--------------//La interpretacion del análisis de suelo
      $desc_nitrogeno = mysqli_real_escape_string($conexion, $_POST["desc_nitrogeno"]);
      $desc_fosforo = mysqli_real_escape_string($conexion, $_POST["desc_fosforo"]);
      $desc_potasio = mysqli_real_escape_string($conexion, $_POST["desc_potasio"]);
      $desc_magnesio = mysqli_real_escape_string($conexion, $_POST["desc_magnesio"]);
      $desc_calcio = mysqli_real_escape_string($conexion, $_POST["desc_calcio"]);
      $desc_azufre = mysqli_real_escape_string($conexion, $_POST["desc_azufre"]);
      $desc_boro = mysqli_real_escape_string($conexion, $_POST["desc_boro"]);
      $desc_zinc = mysqli_real_escape_string($conexion, $_POST["desc_zinc"]);
      $desc_cobre = mysqli_real_escape_string($conexion, $_POST["desc_cobre"]);
      $desc_hierro = mysqli_real_escape_string($conexion, $_POST["desc_hierro"]);
            

    
    $sql1 = "SELECT * FROM req_nutricionales_cultivo  WHERE id_cultivo = '".$id_cultivo."'";
$resultado= $conexion->query($sql1);
$fila = mysqli_num_rows($resultado);
    if($fila>0){
        echo"<span class='red-text'>Este cultivo ya tiene asignado sus requerimientos nutricionales</span>";  
    }else{
  
            $sql = "INSERT INTO req_nutricionales_cultivo (id_cultivo,valor_req,descripcion_req,nombre_req,etiqueta) 
            VALUES
            ('".$id_cultivo."' , '".$r_nitrogeno."','$desc_nitrogeno','NITROGENO', 'teal'),
            ('".$id_cultivo."' , '".$r_fosforo."','$desc_fosforo','FOSFORO', 'cyan'),
            ('".$id_cultivo."' , '".$r_potasio."','$desc_potasio','POTASIO', 'orange'),
            ('".$id_cultivo."' , '".$r_magnesio."','$desc_magnesio','MAGNECIO', 'brown'),
            ('".$id_cultivo."' , '".$r_calcio."','$desc_calcio','CALCIO', 'red'),
            ('".$id_cultivo."' , '".$r_azufre."','$desc_azufre','AZUFRE', 'purple'),
            ('".$id_cultivo."' , '".$r_boro."','$desc_boro','BORO', 'red darken-4'),
            ('".$id_cultivo."' , '".$r_zinc."','$desc_zinc','ZINC', 'green darken-4'),
            ('".$id_cultivo."' , '".$r_cobre."','$desc_cobre','COBRE', 'orange accent-2'),
            ('".$id_cultivo."' , '".$r_hierro."','$desc_hierro','HIERRO', 'blue-grey darken-4')";
        
          if (mysqli_multi_query($conexion, $sql)) {
            echo"<span class='green-text'>Los requerimientos nutricionales se han guardado</span>";
 
    } else {
        echo "<span class='red-text'>ERROR</span>: " . $sql . "<br>" . "<span class='red-text'>'".mysqli_error($conexion)."'</span>";
    }
    mysqli_close($conexion);
        
    }
    
    



    
 }  

?>
<script>
 $(document).ready(function(){
        $('.tabs').tabs();
        $(document).on('click', '.get_tab_for_graf', function(){   
        $('#grafic').removeClass('disabled');
        $('ul.tabs').tabs('select_tab', 'grafico_analisis');
    });
     
  });     
</script>

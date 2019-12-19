 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["fosforo"]))  
 {  
      $codcab = mysqli_real_escape_string($conexion, $_POST["codcab"]);  
      $fosforo = mysqli_real_escape_string($conexion, $_POST["fosforo"]);  
      $calcio = mysqli_real_escape_string($conexion, $_POST["calcio"]);
      $magnecio = mysqli_real_escape_string($conexion, $_POST["magnecio"]);  
      $potasio = mysqli_real_escape_string($conexion, $_POST["potasio"]);  
      $cloro = mysqli_real_escape_string($conexion, $_POST["cloro"]);  
      $azufre = mysqli_real_escape_string($conexion, $_POST["azufre"]);  
      $manganeso = mysqli_real_escape_string($conexion, $_POST["manganeso"]);  
      $cobre = mysqli_real_escape_string($conexion, $_POST["cobre"]);  
      $zinc = mysqli_real_escape_string($conexion, $_POST["zinc"]);  
      $hierro = mysqli_real_escape_string($conexion, $_POST["hierro"]); 
      $molibdeno = mysqli_real_escape_string($conexion, $_POST["molibdeno"]); 
      //--------------//La interpretacion del análisis de suelo
      
      $inter_fosforo = mysqli_real_escape_string($conexion, $_POST["inter_fosforo"]);
      $inter_calcio = mysqli_real_escape_string($conexion, $_POST["inter_calcio"]);
      $inter_magnecio = mysqli_real_escape_string($conexion, $_POST["inter_magnecio"]);
      $inter_potasio = mysqli_real_escape_string($conexion, $_POST["inter_potasio"]);
      $inter_cloro = mysqli_real_escape_string($conexion, $_POST["inter_cloro"]);
      $inter_azufre = mysqli_real_escape_string($conexion, $_POST["inter_azufre"]);
      $inter_manganeso = mysqli_real_escape_string($conexion, $_POST["inter_manganeso"]);
      $inter_cobre = mysqli_real_escape_string($conexion, $_POST["inter_cobre"]);
      $inter_zinc = mysqli_real_escape_string($conexion, $_POST["inter_zinc"]);
      $inter_hierro = mysqli_real_escape_string($conexion, $_POST["inter_hierro"]);
      $inter_molibdeno = mysqli_real_escape_string($conexion, $_POST["inter_molibdeno"]);
            
          $sql = "INSERT INTO ana_foliar_elementos(cabecera_id,valor_resultado,metodo_extraccion,interpretacion,nombre_elemento) 
            VALUES
            ('".$codcab."' , '".$fosforo."','(Bray II - ppm','$inter_fosforo','FOSFORO'),
            ('".$codcab."' , '".$calcio."','cmol kg','$inter_calcio','CALCIO'),
            ('".$codcab."' , '".$magnecio."','cmol kg','$inter_magnecio','MAGNECIO'),
            ('".$codcab."' , '".$potasio."','cmol kg','$inter_potasio','POTASIO'),
            ('".$codcab."' , '".$cloro."','cmol kg','$inter_cloro','CLORO'),
            ('".$codcab."' , '".$azufre."','ppm','$inter_azufre','AZUFRE'),
            ('".$codcab."' , '".$manganeso."','ppm','$inter_manganeso','MANGANESO'),
            ('".$codcab."' , '".$cobre."','ppm','$inter_cobre','COBRE'),
            ('".$codcab."' , '".$zinc."','ppm','$inter_zinc','ZINC'),
            ('".$codcab."' , '".$molibdeno."','','$molibdeno','MOLIBDENO'),
            ('".$codcab."' , '".$hierro."','ppm','$hierro','HIERRO')";

    if (mysqli_multi_query($conexion, $sql)) {
            echo"<span class='green-text'>Los elementos se han guardado</span> 
        <a href='#' class='get_tab_for_graf'>Continuar</a>";
 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);

    
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

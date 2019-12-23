 <?php  
//cargar los reuerimientos nutricionales para el cultivo según el estado fenológico
 if(isset($_POST["est_fenologico"],$_POST["cod_siembra"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
      $query = "SELECT u.id_elemento, u.estado_feno, u.id_cultivo, u.N, u.P, u.K, u.Mg, u.Ca, u.Zn, u.Br, u.S FROM req_nutri_est_fenolo_cult u  WHERE id_cultivo = '".$_POST["cod_siembra"]."' AND estado_feno = '".$_POST["est_fenologico"]."' "; 
      
      $result = mysqli_query($conexion, $query);  

      while($row = mysqli_fetch_array($result))  
      { 
        $output .= '
            <div class="chip">NITROGENO: '.$row["N"].'<input style="display:none;" type="text" value="'.$row["N"].'" id="r_feno_nitro"></divn>
            <div class="chip">FOSFORO: '.$row["P"].' <input style="display:none;" type="text" value="'.$row["P"].'" id="r_feno_fosfo"></div>
            <div class="chip">POTASIO: '.$row["K"].'<input style="display:none;" type="text" value="'.$row["K"].'" id="r_feno_potas"></div>
            <div class="chip">MAGNESIO: '.$row["Mg"]. '<input style="display:none;" type="text" value="'.$row["Mg"].'" id="r_feno_magne"></div>
            <div class="chip">CALCIO: '.$row["Ca"].' <input style="display:none;" type="text" value="'.$row["Ca"].'" id="r_feno_calc"></div>
            <div class="chip">ZINC: '.$row["Zn"].' <input style="display:none;" type="text" value="'.$row["Zn"].'" id="r_feno_zinc"></div>
            <div class="chip">BORO: '.$row["Br"].' <input style="display:none;" type="text" value="'.$row["Br"].'" id="r_feno_bor"></div>
            <div class="chip">AZUFRE: '.$row["S"].' <input style="display:none;" type="text" value="'.$row["Br"].'" id="r_feno_bor"></div>
         ';      
      }  
      echo $output;   
 } 


 
 
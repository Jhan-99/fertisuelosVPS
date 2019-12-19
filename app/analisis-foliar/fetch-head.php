                <?php  
   
            mt_srand(mktime());
 
            include('../../db/dbconnect.php');                 
            //FUNCION PARA OBTENER EN DEPARATMENTO>MUNICIPIO>FINCA EN LOS SELECTS
            $Departamento = '';
            $query = "SELECT Departamento_finca FROM fincas GROUP BY Departamento_finca ORDER BY Departamento_finca ASC";
            $result = mysqli_query($conexion, $query);
            while($row = mysqli_fetch_array($result))
            {
             $Departamento .= '<option value="'.$row["Departamento_finca"].'">'.$row["Departamento_finca"].'</option>';
            }
            
            //FUNCION PARA OBTTENER LOS DATOS DE UN CULTIVO EN EL SELECT
                 function obtener_siembras($conexion) {  
                  $output = '';  
                  $sql = "SELECT * FROM siembras ORDER BY id_siembra DESC";  
                  $result = mysqli_query($conexion, $sql);  
                  while($row = mysqli_fetch_array($result))  
                  {  
                       $output .= '<option value="'.$row["id_siembra"].'">'.$row["Nombre_siembra"].'</option>';  
                  }  
                  return $output;  
             }  
             function obtener_carac_siembras($conexion)  
             {  

             }

            ?>
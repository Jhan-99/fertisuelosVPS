                <?php  
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
                 function obtener_cultivos($conexion) {  
                  $output = '';  
                  $sql = "SELECT * FROM cultivos ORDER BY id_cultivo DESC";  
                  $result = mysqli_query($conexion, $sql);  
                  while($row = mysqli_fetch_array($result))  
                  {  
                       $output .= '<option value="'.$row["id_cultivo"].'">'.$row["Nombre_cultivo"].'</option>';  
                  }  
                  return $output;  
             }  
             function obtener_carac_cultivo($conexion)  
             {  

             }

            ?>
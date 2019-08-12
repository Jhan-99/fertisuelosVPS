<?php  
      include('../../db/dbconnect.php');                                                                
$sql = "INSERT INTO matriz_datos_nitrogeno(
Fecha, coordenada_x,
coordenada_y,
Zona,
N_Placa_Muestral,
N_Planta,
Etapa_Fenologica,
cod_Fenologica,
N_de_Frutos,
Clorofila_Spad,
NDVI_GreenSeker,
Temperatura_Maxima,
Temperatura_Minima,
Promedio_Temperatura,
Humedad_Relativa_Maxima,
Humedad_Relativa_Minima,
Promedio_Humedad_Relativa,
Hrscalor_acumuladas_dp,
Dias_Transcurridos_dp,
porcentaje_Nitro_lab,
Nitro_g_kg_lab
) 
VALUES
('".$_POST["Fecha"]."', 
'".$_POST["coordenada_x"]."', 
'".$_POST["coordenada_y"]."', 
'".$_POST["Zona"]."', 
'".$_POST["N_Placa_Muestral"]."', 
'".$_POST["N_Planta"]."', 
'".$_POST["Etapa_Fenologica"]."', 
'".$_POST["cod_Fenologica"]."', 
'".$_POST["N_de_Frutos"]."',  
'".$_POST["Clorofila_Spad"]."',
'".$_POST["NDVI_GreenSeker"]."',
'".$_POST["Temperatura_Maxima"]."',  
'".$_POST["Temperatura_Minima"]."',  
'".$_POST["Promedio_Temperatura"]."',  
'".$_POST["Humedad_Relativa_Maxima"]."',  
'".$_POST["Humedad_Relativa_Minima"]."',  
'".$_POST["Promedio_Humedad_Relativa"]."',
'".$_POST["Hrscalor_acumuladas_dp"]."',
'".$_POST["Dias_Transcurridos_dp"]."',
'".$_POST["porcentaje_Nitro_lab"]."',
'".$_POST["Nitro_g_kg_lab"]."')";  


if(mysqli_query($conexion, $sql))  
{  
     echo 'Fila insertada';  
}  
 ?>
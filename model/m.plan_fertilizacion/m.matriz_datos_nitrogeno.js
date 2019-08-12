
$(document).ready(function(){  
    $(document).on('click', '#obj_img_espectral', function(){ 
    var no_zona = $("#No_zona").val();
        if (no_zona == ''){
        alert("Es obligatorio cargar un análisis de suelo para realizar el análisis multiespectral");    
        }else{
            
    function fetch_data()  
    {  
        $.ajax({  
            url:"../../control/plan_fertilizacion/select_matriz_nitrogeno.php",  
            method:"POST",
            data:{no_zona:no_zona},
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data(); 
            
        }

    });
    
  
    $(document).on('click', '#btn_add', function(){  
        var Fecha = $('#Fecha').text();  
        var coordenada_x = $('#coordenada_x').text();  
        var coordenada_y = $('#coordenada_y').text();  
        var Zona =         $('#Zona').text();  
        var N_Placa_Muestral = $('#N_Placa_Muestral').text();  
        var N_Planta = $('#N_Planta').text();  
        var Etapa_Fenologica = $('#Etapa_Fenologica').text();  
        var cod_Fenologica = $('#cod_Fenologica').text();  
        var N_de_Frutos = $('#N_de_Frutos').text();  
        var Clorofila_Spad = $('#Clorofila_Spad').text();  
        var NDVI_GreenSeker = $('#NDVI_GreenSeker').text();  
        var Temperatura_Maxima = $('#Temperatura_Maxima').text();  
        var Temperatura_Minima = $('#Temperatura_Minima').text();  
        var Promedio_Temperatura = $('#Promedio_Temperatura').text();  
        var Humedad_Relativa_Maxima = $('#Humedad_Relativa_Maxima').text();  
        var Humedad_Relativa_Minima = $('#Humedad_Relativa_Minima').text();  
        var Promedio_Humedad_Relativa = $('#Promedio_Humedad_Relativa').text();  
        var Hrscalor_acumuladas_dp = $('#Hrscalor_acumuladas_dp').text();  
        var Dias_Transcurridos_dp = $('#Dias_Transcurridos_dp').text();  
        var porcentaje_Nitro_lab = $('#porcentaje_Nitro_lab').text();  
        var Nitro_g_kg_lab = $('#Nitro_g_kg_lab').text();  
        if(Fecha == '')  
        {  
            alert("Introduce Fechas");  
            return false;  
        }  
        if(coordenada_x == '')  
        {  
            alert("Introduce la coordenada X");  
            return false;  
        }  
        $.ajax({  
            url:"../../control/plan_fertilizacion/insertar_matriz_nitrogeno.php",  
            method:"POST",  
            data:{Fecha:Fecha, coordenada_x:coordenada_x, coordenada_y:coordenada_y, Zona:Zona, N_Placa_Muestral:N_Placa_Muestral, N_Planta:N_Planta, Etapa_Fenologica:Etapa_Fenologica, cod_Fenologica:cod_Fenologica, N_de_Frutos:N_de_Frutos, Clorofila_Spad:Clorofila_Spad, NDVI_GreenSeker:NDVI_GreenSeker, Temperatura_Maxima:Temperatura_Maxima, Temperatura_Minima:Temperatura_Minima, Promedio_Temperatura:Promedio_Temperatura, Humedad_Relativa_Maxima:Humedad_Relativa_Maxima, Humedad_Relativa_Minima:Humedad_Relativa_Minima, Promedio_Humedad_Relativa:Promedio_Humedad_Relativa, Hrscalor_acumuladas_dp:Hrscalor_acumuladas_dp, Dias_Transcurridos_dp:Dias_Transcurridos_dp, porcentaje_Nitro_lab:porcentaje_Nitro_lab, Nitro_g_kg_lab:Nitro_g_kg_lab},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"../../control/plan_fertilizacion/editar_matriz_nitrogeno.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='green-text'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.Fecha', function(){  
        var id = $(this).data("id1");  
        var Fecha = $(this).text();  
        edit_data(id, Fecha, "Fecha");  
    });  
    $(document).on('blur', '.coordenada_x', function(){  
        var id = $(this).data("id2");  
        var coordenada_x = $(this).text();  
        edit_data(id,coordenada_x, "coordenada_x");  
    });   
$(document).on('blur', '.coordenada_y', function(){  
        var id = $(this).data("id3");  
        var coordenada_y = $(this).text();  
        edit_data(id,coordenada_y, "coordenada_y");  
    });  
    $(document).on('blur', '.Zona', function(){  
        var id = $(this).data("id4");  
        var Zona = $(this).text();  
        edit_data(id,Zona, "Zona");  
    });  
    $(document).on('blur', '.N_Placa_Muestral', function(){  
        var id = $(this).data("id5");  
        var N_Placa_Muestral = $(this).text();  
        edit_data(id,N_Placa_Muestral, "N_Placa_Muestral");  
    });  
    
    $(document).on('blur', '.N_Planta', function(){  
        var id = $(this).data("id6");  
        var N_Planta = $(this).text();  
        edit_data(id,N_Planta, "N_Planta");  
    });     
    
    $(document).on('blur', '.Etapa_Fenologica', function(){  
        var id = $(this).data("id7");  
        var Etapa_Fenologica = $(this).text();  
        edit_data(id,Etapa_Fenologica, "Etapa_Fenologica");  
    });  
    
    $(document).on('blur', '.cod_Fenologica', function(){  
        var id = $(this).data("id8");  
        var cod_Fenologica = $(this).text();  
        edit_data(id,cod_Fenologica, "cod_Fenologica");  
    });    
    
    $(document).on('blur', '.N_de_Frutos', function(){  
        var id = $(this).data("id9");  
        var N_de_Frutos = $(this).text();  
        edit_data(id,N_de_Frutos, "N_de_Frutos");  
    });    
    
    $(document).on('blur', '.Clorofila_Spad', function(){  
        var id = $(this).data("id10");  
        var Clorofila_Spad = $(this).text();  
        edit_data(id,Clorofila_Spad, "Clorofila_Spad");  
    });   
    
    $(document).on('blur', '.NDVI_GreenSeker', function(){  
        var id = $(this).data("id11");  
        var NDVI_GreenSeker = $(this).text();  
        edit_data(id,NDVI_GreenSeker, "NDVI_GreenSeker");  
    });  
    
    $(document).on('blur', '.Temperatura_Maxima', function(){  
        var id = $(this).data("id12");  
        var Temperatura_Maxima = $(this).text();  
        edit_data(id,Temperatura_Maxima, "Temperatura_Maxima");  
    });    
    
    $(document).on('blur', '.Temperatura_Minima', function(){  
        var id = $(this).data("id13");  
        var Temperatura_Minima = $(this).text();  
        edit_data(id,Temperatura_Minima, "Temperatura_Minima");  
    });     
    
    $(document).on('blur', '.Promedio_Temperatura', function(){  
        var id = $(this).data("id14");  
        var Promedio_Temperatura = $(this).text();  
        edit_data(id,Promedio_Temperatura, "Promedio_Temperatura");  
    });      
    
    $(document).on('blur', '.Humedad_Relativa_Maxima', function(){  
        var id = $(this).data("id15");  
        var Humedad_Relativa_Maxima = $(this).text();  
        edit_data(id,Humedad_Relativa_Maxima, "Humedad_Relativa_Maxima");  
    });   
    
    $(document).on('blur', '.Humedad_Relativa_Minima', function(){  
        var id = $(this).data("id16");  
        var Humedad_Relativa_Minima = $(this).text();  
        edit_data(id,Humedad_Relativa_Minima, "Humedad_Relativa_Minima");  
    });     
    
    $(document).on('blur', '.Promedio_Humedad_Relativa', function(){  
        var id = $(this).data("id17");  
        var Promedio_Humedad_Relativa = $(this).text();  
        edit_data(id,Promedio_Humedad_Relativa, "Promedio_Humedad_Relativa");  
    });     
    
    $(document).on('blur', '.Hrscalor_acumuladas_dp', function(){  
        var id = $(this).data("id18");  
        var Hrscalor_acumuladas_dp = $(this).text();  
        edit_data(id,Hrscalor_acumuladas_dp, "Hrscalor_acumuladas_dp");  
    });   
    
    $(document).on('blur', '.Dias_Transcurridos_dp', function(){  
        var id = $(this).data("id19");  
        var Dias_Transcurridos_dp = $(this).text();  
        edit_data(id,Dias_Transcurridos_dp, "Dias_Transcurridos_dp");  
    });   
    
    $(document).on('blur', '.porcentaje_Nitro_lab', function(){  
        var id = $(this).data("id20");  
        var porcentaje_Nitro_lab = $(this).text();  
        edit_data(id,porcentaje_Nitro_lab, "porcentaje_Nitro_lab");  
    });   
    
    $(document).on('blur', '.Nitro_g_kg_lab', function(){  
        var id = $(this).data("id21");  
        var Nitro_g_kg_lab = $(this).text();  
        edit_data(id,Nitro_g_kg_lab, "Nitro_g_kg_lab");  
    });  
    

    //eliminar
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id50");  
        if(confirm("Seguro de eliminar esta fila?"))  
        {  
            $.ajax({  
                url:"../../control/plan_fertilizacion/eliminar_datos_matriz_nitrogeno.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  

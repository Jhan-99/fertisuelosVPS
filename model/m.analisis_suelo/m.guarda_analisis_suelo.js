                 //ESTE CÓDIGO AGREGA LA CABECERA DEL ANALISIS DE SUELO => "INICIO"

            $(document).ready(function(){  
            //:inicio: Esta funcion recoge la información del análisis de suelo y la envía al archivo                    insertar_ana_suelo.php 
                
               $(document).on('click', '.g_cabecera', function(){
               var codcab = $('#codcab').val();  
               var Nombre_programa = $('#Nombre_programa').val();  
               var No_zona = $('#No_zona').val();  
               var Propietario = $('#Propietario').val();  
               var Asistente_tecnico = $('#Asistente_tecnico').val();  
               var Fecha_muestreo = $('#Fecha_muestreo').val();  
               var Fecha_recepcion = $('#Fecha_recepcion').val();  
               var id_siembra = $('#id_siembra').val();  
                //--------------------//
               var Siembra_id = $('#Siembra_id').val();  
               var Departamento = $('#Departamento').val();  
               var Municipio = $('#Municipio').val();  
               var Finca = $('#Finca').val();  
                    
            if(Nombre_programa =='' )  
            {  
           $('#msg_error_ana').html("Por favor escribe un nombre para este análisis");  
            }else if(Propietario == '')
            {
            $('#msg_error_ana').html("Campo propietario vacío");
            }else if (Asistente_tecnico == '')
            {
            $('#msg_error_ana').html("Selecciona un asistente técnico");
            }else if (Fecha_muestreo == '' || Fecha_recepcion == '')
            {
            $('#msg_error_ana').html("Por favor selecciona las fechas");    
            }else if (Siembra_id == ''|| id_siembra == '')
                {   
                $('#msg_error_ana').html("Por favor selecciona las un cultivo");    
                }else if(No_zona == ''){
                $('#msg_error_ana').html("Selecciona un número de zona");        
                    }   
               else  
               {  
                   $('#msg_error_ana').html('');  
                    $.ajax({  
                         url:"../../control/analisis_suelo/insertar_ana_suelo.php",  
                         method:"POST",  
                         data:{codcab:codcab,Nombre_programa:Nombre_programa,No_zona:No_zona,Propietario:Propietario,Asistente_tecnico:Asistente_tecnico,Fecha_muestreo:Fecha_muestreo,Fecha_recepcion:Fecha_recepcion,id_siembra:id_siembra,
                         Departamento:Departamento,Municipio:Municipio,Finca:Finca      
                         },  
                     success:function(data){  
                     //$("form").trigger("reset");  
                    $('#msg_exito_ana').fadeIn().html(data);  
                    $( "#cabecera_control" ).removeClass( "g_cabecera" ); //Elimino la clace que guarda mi cabecera
                    $( "#cabecera_control" ).addClass('edit_cabecera'); //Agrego la clace que editrá mi cabecera
                    $( "#cabecera_control" ).text('Editar'); // Le agrego un nombre a mi boton
                      setTimeout(function(){  
                     $('#msg_exito_ana').fadeOut("Slow");  
                          }, 100000);                                  

                         }  
                    });  
               }           

              
                    
          });
                //:inicio:
                
            //Jhan No olvidar, el parametro "Documento.click referenciando la clase del botón" [NO-OLVIDAR]
            //ESTA FUNCION ME PERMITE EDITAR LA CABECERA QUE YA GUARDÉ EN LA VISTA CREAR DEL ANÁLISIS DE SUELO{        
              $(document).on('click', '.edit_cabecera', function(){      
                  //alert ("Ya guardó y funciona el boton editar");
               var codcab = $('#codcab').val();  
               var Nombre_programa = $('#Nombre_programa').val();  
               var No_zona = $('#No_zona').val();  
               var Propietario = $('#Propietario').val();  
               var Asistente_tecnico = $('#Asistente_tecnico').val();  
               var Fecha_muestreo = $('#Fecha_muestreo').val();  
               var Fecha_recepcion = $('#Fecha_recepcion').val();  
               var id_siembra = $('#id_siembra').val(); 
                  //--------------------//
               var Siembra_id = $('#Siembra_id').val();  
               var Departamento = $('#Departamento').val();  
               var Municipio = $('#Municipio').val();  
               var Finca = $('#Finca').val(); 
                  
           if(Nombre_programa =='' )  
            {  
           $('#msg_error_ana').html("Por favor escribe un nombre para este análisis");  
            }else if(Propietario == '')
            {
            $('#msg_error_ana').html("Campo propietario vacío");
            }else if (Asistente_tecnico == '')
            {
            $('#msg_error_ana').html("Selecciona un asistente técnico");
            }else if (Fecha_muestreo == '' || Fecha_recepcion == '')
            {
            $('#msg_error_ana').html("Por selecciona las fechas");    
            }else if (Siembra_id == ''|| id_siembra == '')
                {   
                $('#msg_error_ana').html("Por selecciona las un cultivo");    
                }  else if (No_zona == ''){
                               $('#msg_error_ana').html("Por selecciona un bloque");             
                            }                                   
                else  
           {  
                $('#msg_error_ana').html('');   
                $.ajax({  
                url:"../../control/analisis_suelo/editar_cabecera.php",  
                method:"POST",  
                data:{codcab:codcab,Nombre_programa:Nombre_programa,No_zona:No_zona,Propietario:Propietario,Asistente_tecnico:Asistente_tecnico,Fecha_muestreo:Fecha_muestreo,Fecha_recepcion:Fecha_recepcion,id_siembra:id_siembra,
                Departamento:Departamento,Municipio:Municipio,Finca:Finca
                         },  
                     success:function(data){   
                          $('#msg_exito_ana').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#msg_exito_ana').fadeOut("Slow");  
                          },100000);  
                     }  
                });  
           }
                        
                        
                     }); 
            //:fin: ESTA FUNCION ME PERMITE EDITAR LA CABECERA QUE YA GUARDÉ }
                    
              //:INICIO:ESTE CÓDIGO GUARDA EL PASO DE LAS VARIABLES IMPORTANTES O MÁS SIGNIFICATIVAS EN EL CULTIVO => 
				$(document).on('click', '.g_vars_sign', function(){
               var codcab = $('#codcab').val();  
               var ph   = $('#ph').val();  
               var ce   = $('#ce').val();  
               var cice = $('#cice').val();  
               var salinidad = $('#salinidad').val();  
                //--------------------//
               var textura = $('#textura').val();
               var densidad_aparente = $('#densidad_aparn').val();
			   var val_textura = $('option:selected', "#textura").attr('t_suelo');
                    
               if(ph == '' || ce == ''|| cice == ''|| salinidad == '' || textura ==''|| val_textura ==''|| densidad_aparente =='')  
               {  
               $('#msg_error_paso2').html("Todos los campos son obligatorios");  
               }  
               else  
               {  
                   $('#msg_error_paso2').html('');  
                    $.ajax({  
                         url:"../../control/analisis_suelo/insertar_variables_importantes.php",  
                         method:"POST",  
                         data:{codcab:codcab,ph:ph,ce:ce,cice:cice,salinidad:salinidad,textura:textura,
							   val_textura:val_textura, densidad_aparente:densidad_aparente
                         },  
                         success:function(data){  
                              //$("form").trigger("reset");  
                             $('#msg_exito_paso2').fadeIn().html(data);
                             $('#variables_control').removeClass('g_vars_sign');
                             $('#variables_control').addClass('edita_variables');
                             $('#variables_control').text('Editar');  
                              setTimeout(function(){  
                                   $('#msg_exito_paso2').fadeOut("Slow");  
                              }, 100000);  
                         }  
                    });  
               }  
          }); 
                //:FIN:  
             
            //:INICIO:ESTE CODIGO EDITA LAS VARIABLES IMPORTANTES DEL ANALISIS DE SUELO{
            $(document).on('click', '.edita_variables', function(){ 
			   var id_cab_suelo = $('#codcab').val();  
               var ph   = $('#ph').val();  
               var ce   = $('#ce').val();  
               var cice = $('#cice').val();  
               var salinidad = $('#salinidad').val();  
                //--------------------//
               var textura = $('#textura').val();
               var densidad_aparente = $('#densidad_aparn').val();
			   var val_textura = $('option:selected', "#textura").attr('t_suelo');
			   if(ph == '' || ce == ''|| cice == ''|| salinidad == '' || textura ==''|| val_textura ==''|| densidad_aparente =='')  
               {  
               $('#msg_error_paso2').html("Todos los campos son obligatorios");  
               }  
               else  
               {  
                   $('#msg_error_paso2').html('');  
                    $.ajax({  
                         url:"../../control/analisis_suelo/editar_variables_importantes.php",  
                         method:"POST",  
                         data:{id_cab_suelo:id_cab_suelo,ph:ph,ce:ce,cice:cice,salinidad:salinidad,textura:textura,val_textura:val_textura,
                               densidad_aparente:densidad_aparente
                         },  
                         success:function(data){  
                              //$("form").trigger("reset");  
                             $('#msg_exito_paso2').fadeIn().html(data);
                              setTimeout(function(){  
                                   $('#msg_exito_paso2').fadeOut("Slow");  
                              }, 100000);  
                         }  
                    });  
               } 
                             
                });   		
            //:FIN:ES CODIGO EDITA LAS VARIABLES IMPORTANTES DEL ANALISIS DE SUELO }        
                
            //:INICIO: ESTE CÓDIGO GUARDA LOS ELEMENTOS DEL ANÁLISIS DE SUELO
               $(document).on('click', '.g_elementos', function(){ 
               var codcab = $('#codcab').val();  
               var nitrogeno   = $('#nitro').val();  
               var fosforo   = $('#fosforo').val();  
               var calcio = $('#calcio').val();  
               var magnecio = $('#magnecio').val();  
               var potasio = $('#potasio').val();  
               var sodio = $('#sodio').val();  
               var azufre = $('#azufre').val();  
               var boro = $('#boro').val();  
               var manganeso = $('#manganeso').val();  
               var cobre = $('#cobre').val();  
               var zinc = $('#zinc').val();  
               var hierro = $('#hierro').val();  
                //--------------------//Variables de interpretación del análisis de suelo.
               var inter_nitrogeno = $('#inter_nitrogeno').text(); 
               var inter_fosforo = $('#inter_fosforo').text(); 
               var inter_calcio = $('#inter_calcio').text();  
               var inter_magnecio = $('#inter_magnecio').text(); 
               var inter_potasio = $('#inter_potasio').text(); 
               var inter_sodio = $('#inter_sodio').text(); 
               var inter_azufre = $('#inter_azufre').text(); 
               var inter_boro = $('#inter_boro').text(); 
               var inter_manganeso = $('#inter_manganeso').text(); 
               var inter_cobre = $('#inter_cobre').text(); 
               var inter_zinc = $('#inter_zinc').text(); 
               var inter_hierro   = $('#inter_hierro').text();   
               if(nitrogeno == '' || fosforo == '')  
               {  
               $('#msg_error_elementos').html("Todos los campos son obligatorios");  
               }  
               else  
               {  
                   $('#msg_error_elementos').html('');  
                $.ajax({  
                 url:"../../control/analisis_suelo/insertar_elementos_suelo.php",  
                 method:"POST",  
                 data:{codcab:codcab,nitrogeno:nitrogeno,fosforo:fosforo,calcio:calcio,magnecio:magnecio,
                potasio:potasio,sodio:sodio,azufre:azufre,boro:boro,manganeso:manganeso,cobre:cobre,zinc:zinc,hierro:hierro,
                        inter_nitrogeno:inter_nitrogeno,
                        inter_fosforo:inter_fosforo,
                        inter_calcio:inter_calcio,
                        inter_magnecio:inter_magnecio,
                        inter_potasio:inter_potasio,
                        inter_sodio:inter_sodio,
                        inter_azufre:inter_azufre,
                        inter_boro:inter_boro,
                        inter_manganeso:inter_manganeso,
                        inter_cobre:inter_cobre,
                        inter_zinc:inter_zinc,
                        inter_hierro:inter_hierro           
                         },  
                         success:function(data){  
                              //$("form").trigger("reset");  
                             $('#msg_exito_elementos').fadeIn().html(data);  
                             $('#elementos_control').removeClass('g_elementos');
                             $('#elementos_control').addClass('edit_elementos');
                             $('#elementos_control').val('Editar');  
                             
                              setTimeout(function(){  
                                   $('#msg_exito_elementos').fadeOut("Slow");  
                              }, 100000);  
                         }  
                    });  
               }  
          }); 
            //:FIN:ESTE CÓDIGO GUARDA LOS ELEMENTOS DEL ANÁLISIS DE SUELO => ¡FIN!
                    
               $(document).on('click', '.edit_elementos', function(){ 
               var codcab = $('#codcab').val();  
               var nitrogeno   = $('#nitro').val();  
               var fosforo   = $('#fosforo').val();  
                //--------------------//Variables de interpretación del análisis de suelo.
               var inter_nitrogeno = $('#inter_nitrogeno').text(); 
               var inter_fosforo = $('#inter_fosforo').text();  
               if(nitrogeno == '' || fosforo == '')  
               {  
               $('#msg_error_elementos').html("Todos los campos son obligatorios");  
               }  
               else  
               {  
                   $('#msg_error_elementos').html('');  
                $.ajax({  
                 url:"../../control/analisis_suelo/editar_elementos_suelo.php",  
                 method:"POST",  
                 data:{codcab:codcab,nitrogeno:nitrogeno,fosforo:fosforo          
                         },  
                         success:function(data){  
                              //$("form").trigger("reset");  
                              $('#msg_exito_elementos').fadeIn().html(data);  
                              setTimeout(function(){  
                                   $('#msg_exito_elementos').fadeOut("Slow");  
                              }, 100000);  
                         }  
                    });  
               }
                });   
                    
                  }); //Cierre de la preparación del documento.
 
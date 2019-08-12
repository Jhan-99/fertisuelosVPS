                 //ESTE CÓDIGO AGREGA LA CABECERA DEL ANALISIS DE SUELO => "INICIO"
                $(document).ready(function(){  
               $(document).on('click', '.g_cabecera', function(){
               var codcab = $('#codcab').val();  
               var Nombre_programa = $('#Nombre_programa').val();  
               var Propietario = $('#Propietario').val();  
               var Asistente_tecnico = $('#Asistente_tecnico').val();  
               var Fecha_muestreo = $('#Fecha_muestreo').val();  
               var Fecha_recepcion = $('#Fecha_recepcion').val();  
               var Momento_muestreo = $('#Momento_muestreo').val();  
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
            }else if (Fecha_muestreo == '' || Fecha_recepcion == ''|| Momento_muestreo == '')
            {
            $('#msg_error_ana').html("Por selecciona las fechas");    
            }else if (Siembra_id == ''|| id_siembra == '')
            {   
                $('#msg_error_ana').html("Por favor selecciona  una  siembra");    
            }
                else if (Departamento == ''|| Municipio == ''|| Finca == '')
                {   
                $('#msg_error_ana').html("Por favor selecciona Departamento, Municipio y finca");    
                }   
               else  
               {  
                   $('#msg_error_ana').html('');  
                    $.ajax({  
                         url:"../../control/analisis_foliar/insertar_ana_foliar.php",  
                         method:"POST",  
                         data:{codcab:codcab,Nombre_programa:Nombre_programa,Propietario:Propietario,Asistente_tecnico:Asistente_tecnico,Fecha_muestreo:Fecha_muestreo,Fecha_recepcion:Fecha_recepcion,Momento_muestreo:Momento_muestreo,id_siembra:id_siembra,
                         Departamento:Departamento,Municipio:Municipio,Finca:Finca      
                         },  
                     success:function(data){  
                     //$("form").trigger("reset");  
                    $('#msg_exito_ana').fadeIn().html(data);  
                    $( "#cabecera_control" ).removeClass( "g_cabecera" ); //Elimino la clace que guarda mi cabecera
                    $( "#cabecera_control" ).addClass('edit_cabecera'); //Agrego la clace que editrá mi cabecera
                    $( "#cabecera_control" ).val('Editar'); // Le agrego un nombre a mi boton
                      setTimeout(function(){  
                     $('#msg_exito_ana').fadeOut("Slow");  
                          }, 100000);                                  

                         }  
                    });  
               }  
  
                    
          });//ESTE CÓDIGO AGREGA LA CABECERA DEL ANALISIS FOLIAR => "FIN"}
            //Jhan No olvidar, el parametro "Documento.click referenciando la clase del botón" [NO-OLVIDAR]
            //ESTA FUNCION ME PERMITE EDITAR LA CABECERA QUE YA GUARDÉ {        
              $(document).on('click', '.edit_cabecera', function(){      
                  //alert ("Ya guardó y funciona el boton editar");
               var codcab = $('#codcab').val();  
               var Nombre_programa = $('#Nombre_programa').val();  
               var Propietario = $('#Propietario').val();  
               var Asistente_tecnico = $('#Asistente_tecnico').val();  
               var Momento_muestreo = $('#Momento_muestreo').val();  
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
            }else if (Fecha_muestreo == '' || Fecha_recepcion == ''|| Momento_muestreo == '')
            {
            $('#msg_error_ana').html("Por selecciona las fechas");    
            }else if (Siembra_id == ''|| id_siembra == '')
            {   
             $('#msg_error_ana').html("Por favor selecciona  una  siembra");    
            }
            else if (Departamento == ''|| Municipio == ''|| Finca == '')
                {   
                $('#msg_error_ana').html("Por favor selecciona Departamento, Municipio y finca");    
                }   
               else  
               {  
                $('#msg_error_ana').html('');   
                $.ajax({  
                url:"../../control/analisis_foliar/editar_cabecera_foliar.php",  
                method:"POST",  
                data:{codcab:codcab,Nombre_programa:Nombre_programa,Propietario:Propietario,Asistente_tecnico:Asistente_tecnico,Momento_muestreo:Momento_muestreo,Fecha_muestreo:Fecha_muestreo,Fecha_recepcion:Fecha_recepcion,
                id_siembra:id_siembra,Departamento:Departamento,Municipio:Municipio,Finca:Finca
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

            //ESTA FUNCION ME PERMITE EDITAR LA CABECERA QUE YA GUARDÉ }
                    
              //ESTE CÓDIGO GUARDA EL PASO DE LAS VARIABLES IMPORTANTES => ¡INICIO!    
               $(document).on('click', '.g_vars_sign', function(){  
               var codcab = $('#codcab').val();  
               var ph   = $('#ph').val();  
               var ce   = $('#ce').val();  
               var ndvi = $('#ndvi').val();  
               var nitrogeno = $('#nitro').val();  
                //--------------------//
               var estado_feno = $('#estado_feno').val();
               var sat_hum = $('#sat_hum').val();
               var clorofila = $('#clorofila').val();
                    
               if(ph == '' || ce == ''|| ndvi == ''|| nitrogeno == '' || estado_feno ==''|| sat_hum ==''
                  || clorofila =='')  
               {  
               $('#msg_error_paso2').html("Debes completar todos los campos");  
               }  
               else  
               {  
                   $('#msg_error_paso2').html('');  
                    $.ajax({  
                         url:"../../control/analisis_foliar/insertar_variables_importantes.php",  
                         method:"POST",  
                         data:{codcab:codcab,ph:ph,ce:ce,ndvi:ndvi,nitrogeno:nitrogeno,estado_feno:estado_feno,
                               sat_hum:sat_hum,clorofila:clorofila
                         },  
                         success:function(data){  
                              //$("form").trigger("reset");  
                             $('#msg_exito_paso2').fadeIn().html(data);
                             $('#variables_control').removeClass('g_vars_sign');
                             $('#variables_control').addClass('edit_g_vars_sign');
                             $('#variables_control').val('Editar');  
                              setTimeout(function(){  
                              $('#msg_exito_paso2').fadeOut("Slow");  
                              }, 100000);  
                         }  
                    });  
               }  
          }); //ESTE CÓDIGO GUARDA EL PASO DE LAS VARIABLES IMPORTANTES DEL ANÁLISIS DE SUELO => ¡FIN!   
             
        //ESTE CODIGO EDITA LAS VARIABLES IMPORTANTES DEL ANALISIS DE SUELO{
            $(document).on('click', '.edit_g_vars_sign', function(){ 
               var codcab = $('#codcab').val();  
               var ph   = $('#ph').val();  
               var ce   = $('#ce').val();  
               var ndvi = $('#ndvi').val();  
               var nitrogeno = $('#nitro').val();  
                //--------------------//
               var estado_feno = $('#estado_feno').val();
               var sat_hum = $('#sat_hum').val();
               var clorofila = $('#clorofila').val();
        
               if(ph == '' || ce == ''|| ndvi == ''|| nitrogeno == '' || estado_feno ==''|| sat_hum ==''
                  || clorofila =='')  
               {  
               $('#msg_error_paso2').html("Todos los campos son obligatorios");  
               }  
               else  
               {   
                $('#msg_error_paso2').html('');  
                    $.ajax({  
                         url:"../../control/analisis_foliar/edita_variables_importantes.php",  
                         method:"POST",  
                         data:{codcab:codcab,ph:ph,ce:ce,ndvi:ndvi,nitrogeno:nitrogeno,nitrogeno:nitrogeno,
                               estado_feno:estado_feno,sat_hum:sat_hum,clorofila:clorofila
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
            //ES CODIGO EDITA LAS VARIABLES IMPORTANTES DEL ANALISIS DE SUELO }        
            //ESTE CÓDIGO GUARDA LOS ELEMENTOS DEL ANÁLISIS DE SUELO  => ¡INICIO!    
               $(document).on('click', '.g_elementos', function(){ 
               var codcab = $('#codcab').val();  
               var fosforo   = $('#fosforo').val();  
               var calcio = $('#calcio').val();  
               var magnecio = $('#magnecio').val();  
               var potasio = $('#potasio').val();  
               var cloro = $('#cloro').val();  
               var azufre = $('#azufre').val();  
               var boro = $('#boro').val();  
               var manganeso = $('#manganeso').val();  
               var cobre = $('#cobre').val();  
               var zinc = $('#zinc').val();  
               var hierro = $('#hierro').val();  
               var molibdeno = $('#molibdeno').val();  
                //--------------------//Variables de interpretación del análisis de suelo.
               var inter_fosforo = $('#inter_fosforo').text(); 
               var inter_calcio = $('#inter_calcio').text();  
               var inter_magnecio = $('#inter_magnecio').text(); 
               var inter_potasio = $('#inter_potasio').text(); 
               var inter_cloro = $('#inter_cloro').text(); 
               var inter_azufre = $('#inter_azufre').text(); 
               var inter_boro = $('#inter_boro').text(); 
               var inter_manganeso = $('#inter_manganeso').text(); 
               var inter_cobre = $('#inter_cobre').text(); 
               var inter_zinc = $('#inter_zinc').text(); 
               var inter_hierro   = $('#inter_hierro').text();   
               var inter_molibdeno   = $('#inter_molibdeno').text();   
               if(fosforo == '' || fosforo == '')  
               {  
               $('#msg_error_elementos').html("Todos los campos son obligatorios");  
               }  
               else  
               {  
                   $('#msg_error_elementos').html('');  
                $.ajax({  
                 url:"../../control/analisis_foliar/insertar_elementos_tejido.php",  
                 method:"POST",  
                 data:{codcab:codcab,fosforo:fosforo,calcio:calcio,magnecio:magnecio,
                 potasio:potasio,cloro:cloro,azufre:azufre,boro:boro,manganeso:manganeso,cobre:cobre,zinc:zinc,
                 hierro:hierro,molibdeno:molibdeno,
                        inter_fosforo:inter_fosforo,
                        inter_calcio:inter_calcio,
                        inter_magnecio:inter_magnecio,
                        inter_potasio:inter_potasio,
                        inter_cloro:inter_cloro,
                        inter_azufre:inter_azufre,
                        inter_boro:inter_boro,
                        inter_manganeso:inter_manganeso,
                        inter_cobre:inter_cobre,
                        inter_zinc:inter_zinc,
                        inter_hierro:inter_hierro,        
                        inter_molibdeno:inter_molibdeno           
                         },  
                         success:function(data){  
                              //$("form").trigger("reset");  
                             $('#msg_exito_elementos').fadeIn().html(data);  
                             $('#elementos_control').removeClass('g_elementos');
                             $('#elementos_control').addClass('vedit_elementos');
                             $('#elementos_control').val('Guardado...');  
                             
                              setTimeout(function(){  
                                   $('#msg_exito_elementos').fadeOut("Slow");  
                              }, 100000);  
                         }  
                    });  
               }  
          }); //ESTE CÓDIGO GUARDA LOS ELEMENTOS DEL ANÁLISIS DE SUELO => ¡FIN!
                    
               $(document).on('click', '.edit_elementos', function(){ 
               var codcab = $('#codcab').val();  
               var fosforo   = $('#fosforo').val();  
                //--------------------//Variables de interpretación del análisis de suelo.
               var inter_fosforo = $('#inter_fosforo').text();  
               if(fosforo == '')  
               {  
               $('#msg_error_elementos').html("Todos los campos son obligatorios");  
               }  
               else  
               {  
                   $('#msg_error_elementos').html('');  
                $.ajax({  
                 url:"../../control/analisis_suelo/editar_elementos_suelo.php",  
                 method:"POST",  
                 data:{codcab:codcab,fosforo:fosforo          
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
 
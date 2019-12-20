//!! IMPORTANTE [] ESTE DOCUMENTO ME CARGA LOS CULTIVOS, EL DEPARTAMENTO, EL MUNICIPIO, Y LAS FICAS
//!!IMPORTANTE ESTE DOCUMENTO ESTÁ SIENDO USADO POR EL ARCHIVO [VIEW>analisis_suelo.php] y por el archivo,
// [VIEW>analisis_suelo_get.php] 
//ESTE CÓDIGO CARGA LAS CARACTERISTICAS DE ALGUNA SIEMBRA SELECCIONADA [INICIO]{           
         $(document).ready(function(){  
             $(document).on('click', '.msg_textura', function(){
                $("#mensajes-modal").modal('open');
                 
                $(".mensajes-modal").html('<h5 class="chip">La textura del suelo:</h5><br> <p style="font-family: Courier, Monaco, monospace;">Es la combinación de particulas en diferentes tamaños como la arena, el limo y la arcilla. La textura tiene que ver con la facilidad de poder trabajar el suelo</p><br> <img src="../../images/texturas/composicion_promedio_suelo.png" width="450px" height="300px">');
                             
             });
            $(document).on('click', '.msg_ph', function(){
                $("#mensajes-modal").modal('open');
                 
                $(".mensajes-modal").html('<h5 class="chip">Escala de medición del pH</h5><br><p style="font-family: Courier, Monaco, monospace;">El pH se determina en una escala que va desde  <b>0 a 14</b>, pero para fines agrícolas solo se contempla del <b>3.5</b> al <b>9.0</b> con un punto central de 7.</p><br><img src="../../images/ph/phmedicion.png" width="450px" height="300px"> <br>ref: <a href="http://www.vidasanaclub.com/" target="_blank">www.vidasanaclub.com/</a>');
                             
             });
             
            $(document).on('click', '.msg_nutrientes', function(){
                $("#mensajes-modal").modal('open');
                 
                $(".mensajes-modal").html('<h5 style="font-family: Courier, Monaco, monospace;" class="">los nutrientes del suelo</h5><hr> <br> <table style="font-size:12px;"><tr><th>Nutriente</th><th>Función</th><th>Deficiencia</th><tr> <tr> <td><p class="chip">Nitrógeno</p></td> <td>Estimular el crecimiento , Favorecer la sintecis de la clorofila, aminoácidos y proteínas</td><td>Crecimiento atrofiado, color amarillo en hojas inferiores y tronco debil.</td></tr> <tr><td><p class="chip">Fosfóro</p></td><td>Estimular crecimiento de la raíz , formación de semillas y participa en  la fotosintesís y respiración.</td><td>Color purpúreo en hojas inferiores y tallo , manchas muertas en hojas y frtutos.</td></tr><tr><td><p class="chip">Potasio</p></td><td>Resistencia a enfermedades , fuerza al tallo y calidad a la semilla</td><td>Oscurecimiento del margen de las hojas inferiores, tallos débiles</td></tr><tr><td><p class="chip">Calcio</p></td><td>Colabora en la división celular y constituyente a las paredes celulares</td><td>Hojas terminales deformadas o muertas.</td></tr><tr><td><p class="chip">Magnesio</p></td><td>Componente de la clorófila de enzimas y vitaminas , e imcorporación de nutrientes</td><td>Amarilleo entre los nervios de las hojas inferiores (clorosis). </td></tr> <tr><td><p class="chip">Azufre</p></td><td>Esencial para la formación de aminoaciodos y vitaminas, aporta el color verde a las hojas.</td><td>Hojas superiores amarillas, crecimiento atrofiado .</td></tr><tr><td><p class="chip">Boro</p></td><td>Importante en la floración, formación de frutos y división celular.</td><td>Yemas terminales muertas; hojas superiores quebradizas con plegamiento.</td></tr><tr><td><p class="chip">Cobre</p></td><td>Componente de las enzimas; colabora en la síntesis de clorofila y en la respiración</td><td>Yemas terminales y hojas muertas.</td></tr><tr><td><p class="chip">Cloro</p></td><td>Crecimiento de las raíces y   de los brotes.</td><td>Marchitamiento , hojas cloroticas</td></tr><tr><td><p class="chip">Hierro</p></td><td>Catalizador en la formación de clorofila; componente de las enzimas.</td><td>Clorosis entre los nervios de las hojas superiores.</td></tr><tr><td><p class="chip">Manganeso</p></td><td>Participa en la síntesis de clorofila.</td><td>Color verde oscuro en los nervios de las hojas; clorosis entre los nervios.</td></tr><tr><td><p class="chip">Zinc</p></td><td>Esencial para la formación de auxina y almidón.</td><td>Clorosis entre los nervios de las hojas superiores.</td></tr></table> ');
                             
             });
             
             
             $('#textura').change(function(){  
                var textur = $('option:selected', "#textura").attr('v-minimized'); // captura       
                if (textur == 'Arenoso'){
                $("#forma_textura").html('<img src="../../images/texturas/arenoso.png" width="450px" height="300px">');
                }else if(textur == 'ArenosoFranco'){
                $("#forma_textura").html('<img src="../../images/texturas/arenoso_franco.png" width="450px" height="300px">');
                }
                else if (textur == 'FrancoArenoso')  {
                $("#forma_textura").html('<img src="../../images/texturas/franco_arenoso.png" width="450px" height="300px">');    
                
                }else if (textur == 'Franco'){
                $("#forma_textura").html('<img src="../../images/texturas/franco.png" width="450px" height="300px">');
                }
                else if (textur == 'FrancoLimoso'){
                $("#forma_textura").html('<img src="../../images/texturas/franco_limoso.png" width="450px" height="300px">');
                }
                 else if (textur == 'FrancoArcillosoArenoso' ){
                $("#forma_textura").html('<img src="../../images/texturas/franco_arcilloso_arenoso.png" width="450px" height="300px">');
                }
                else if (textur == 'FrancoArcilloso' ){
                $("#forma_textura").html('<img src="../../images/texturas/franco_arcilloso.png" width="450px" height="300px">');
                }
              else if (textur == 'FrancoArcilloLimoso' ){
                $("#forma_textura").html('<img src="../../images/texturas/franco_arcilloso_limoso.png" width="450px" height="300px">');
                }
             else if (textur == 'ArcilloArenoso' ){
                $("#forma_textura").html('<img src="../../images/texturas/arcilloso_arenoso.png" width="450px" height="300px">');
                }
            else if (textur == 'ArcilloLimoso' ){
                $("#forma_textura").html('<img src="../../images/texturas/arcilloso_limoso.png" width="450px" height="300px">');
                }
            else if (textur == 'Arcilloso' ){
                $("#forma_textura").html('<img src="../../images/texturas/arcilloso.png" width="450px" height="300px">');
                }
                      
                 
             });
             
          $('#Siembra_id').change(function(){  
               var id_siembra = $(this).val(); 
 			   var codgo_cult = $('option:selected', this).attr('codcult');  
			   
               $.ajax({  
                    url:"../../control/analisis_suelo/carga_siembras_id.php",  
                    method:"POST",  
                    data:{id_siembra:id_siembra},  
                    success:function(data){  
                    $('#mostrar_detsiembra').html(data);  
                    }  
               });               
			  $.ajax({  
                    url:"../../control/analisis_suelo/carga_siembras_id.php", //archivo que recibe la petición
                    method:"POST",  
                    data:{codgo_cult:codgo_cult}, //variable que permite hacer la consulta
                    success:function(nutricionales){  
					$('#carga_req_nutricionales_siembra').html(nutricionales);
						//mostrar requerimientos nutricionales siembra
                    }  
               });  
          });  

   
        //[FIN] }        

//ESTE CÓDIGO CARGA LAS CARACTERISTICAS DE ALGUNA FINCA SELECCIONADO [INICIO]{           
          $('#Finca').change(function(){  
               var id_finca = $(this).val();  
               $.ajax({  
                    url:"../../control/analisis_suelo/carga_fincas_id.php",  
                    method:"POST",  
                    data:{id_finca:id_finca},  
                    success:function(data){  
                    $('#mostrar_finca_descrip').html(data);  
                    }  
               });  
          });  
 
        //[FIN] }

    // ESTE CÓDIGO ME PERMITE SELECCIONAR DEPARTAMENTO>MUNICIPIO>FINCA {
 
     $('.selec_control').change(function(){
      if($(this).val() != '')
      {
       var selec_control = $(this).attr("id");
       var query = $(this).val();
       var result = '';
       if(selec_control == "Departamento")
       {
        result = 'Municipio';
       }
       else
       {
        result = 'Finca';
       }
       $.ajax({
        url:"../../control/analisis_suelo/select_dep_muni_finc.php",
        method:"POST",
        data:{selec_control:selec_control, query:query},
        success:function(data){
         $('#'+result).html(data);
        }
       })
      }
     });// ESTE CÓDIGO ME PERMITE SELECCIONAR DEPARTAMENTO>MUNICIPIO>FINCA }
         
     //ESTE CÓDIGO ME CARGA LA LISTA DE PROPIETARIOS EN EL CAMPO PROPIETARIOS [INICIO]{   
         $('#Buscar_Propietario').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"../../control/analisis_suelo/busca_propietarios.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#lista_propietarios').fadeIn();  
                          $('#lista_propietarios').html(data);  
                     }  
                });  
           }  
      });  
             $( "#Propietario" ).focus(function() {
                $('#busca_propietarios').modal('open');  
                $('#Buscar_Propietario').focus();  
                }); 
             
          $(document).on('click', '.personas', function(){  
          $('#Buscar_Propietario').val($(this).text());  
          $('#Propietario').val($(this).text());
          $('#busca_propietarios').modal('close');  
          $('#lbpropietarios').addClass('active');
          $('#lista_propietarios').fadeOut();  
      });       
 
    //ESTE CÓDIGO ME CARGA LA LISTA DE PROPIETARIOS EN EL CAMPO PROPIETARIOS [FIN]}   
             
 
         
    });// FIN DE  => (document).ready(function();  


    

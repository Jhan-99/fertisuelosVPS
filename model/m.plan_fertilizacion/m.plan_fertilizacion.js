//!! IMPORTANTE [] ESTE DOCUMENTO ES...
//!!IMPORTANTE ESTE DOCUMENTO ESTÁ SIENDO USADO POR EL ARCHIVO [VIEW>pf.php] 

//ESTE CÓDIGO CARGA LAS CARACTERISTICAS DE ALGUN CULTIVO SELECCIONADO [INICIO]{           
    $(document).ready(function(){ 
	// INICIO => LISTAR TODOS LOS FERTILIZANTES		 
		$(document).on('click', '.fertilizacion', function(){
				var listar = 0;
		            $.ajax({  
                     url:"../../control/plan_fertilizacion/pf-listar_todos_fertilizantes.php",  
                     method:"POST",  
                     data:{listar:listar},  
                     success:function(data){  
                     $('.todos_fertilizantes').html(data);                    
                     $('#fertilizers').removeClass('todos_fertilizantes');
                     }
					
                }); 
	
});
  // FIN => LISTAR TODOS LOS FERTILIZANTES		 
 
		//Carga los detalles de los fertilizantes [inicio]
    $(document).on('click', '.ver_detalles', function(){
          var id_fer = $(this).attr("id");
			if(id_fer != '')  
           {  
                $.ajax({  
                     url:"../../control/plan_fertilizacion/detalles_fertilizantes.php",  
                     method:"POST",  
                     data:{id_fer:id_fer},  
                     success:function(data){  
                        $('#detalle_fer').html(data);                    
                        $('#modal_detalle_fertilizante').modal('open');                    
                     }  
                });  
           }   
     
      });   
		
 
        
        //:inicio: esta funcion permite cargar todos los detalles de la siembra, el cultivo y susrequerimientos nutricionales después de seleccionarla
         $('#Siembra_id').change(function(){  
         var id_siembra = $(this).val(); 
         var nombre_siembra = $(this).html(); 
		 var nombre_siembra = $('option:selected', this).text(); //rrecoge el nombre de la siembra
		 var codgo_cult = $('option:selected', this).attr('codcult'); //rrecoge el codigoCULTIVO para los req nu..
		 var codgo_cult_inputs = $('option:selected', this).attr('codcult'); //rrecoge el codigoCULTIVO para los req nu..
		 $("#id_cul").val(codgo_cult);
               $.ajax({  
                 url:"../../control/plan_fertilizacion/carga_siembras_id.php",  
                 method:"POST",  
                 data:{id_siembra:id_siembra},  
                 success:function(data){  
                 $('#mostrar_detsiembra').html(data);  
                    }  
               });
			//cargar los requerimientos nutricionales cuando se elija una siembra en el select  
			if (codgo_cult == ''){
            alert("Por favor selecciona una siembra");
            }   
            else
            {
            $.ajax({  
			url:"../../control/plan_fertilizacion/traer_req_nutricionales_cultivo.php",  
            method:"POST",  
            data:{codgo_cult:codgo_cult},  
            success:function(data){   
             $('#req_nutricional_culti').html(data);         
             $('#titureqs').text("Requerimientos nutricionales para: "+ " "+ '"'+ nombre_siembra+'"');         
             $('.re_consoltxt').text("Requerimientos nutricionales para: "+ " "+ '"'+ nombre_siembra+'"');         
				 }  
                 });           
			
			$.ajax({  
			url:"../../control/plan_fertilizacion/traer_req_nutricionales_cultivo.php",  
            method:"POST",  
            data:{codgo_cult_inputs:codgo_cult_inputs},  
            success:function(data){   
             $('#req_nutricional_culti_inputs').html(data);         
				 }  
                 });
                $("#Siembra_id").removeClass('lime lighten-1');
			}
          });           			 
        //[FIN] }        
        //:fin:
			
        //:inicio: esta función permite mostrar la pestaña de configuración de análisis foliares
			$('#ana_foliar').change(function(){
			          var selection = $(this).val();    
					     switch(selection)
						 	{ 
		                  case 'Si':		
							$("#anfolobj").show( "slow" );
							break;
							case 'No':
						 	$("#anfolobj").hide("slow");
							break;
		   					}
				    }); 
        //:fin:
			 
        //:inicio: esta función permite mostrar la pestaña de configuración de análisis de suelo
			 	$('#ana_suelo').change(function(){
			          var selection = $(this).val();    
					     switch(selection)
						 	{ 
		                  case 'Si':		
							$("#ansuelobj").show( "slow" );
                            $("#ana_suelo").removeClass('lime lighten-1');
							break;
							case 'No':
						 	$("#ansuelobj").hide("slow");
                            $("#ana_suelo").addClass('lime lighten-1');
							break;
		   					}
				        }); 		  	 
        //:fin:
        
        //:inicio: esta función permite mostrar la pestaña de configuración de imágenes multiespectrales
				$('#img_espectral').change(function(){
			          var selection = $(this).val();    
					     switch(selection)
						 	{ 
		                  case 'Si':		
							$("#obj_img_espectral").show( "slow" );
							break;
							case 'No':
						 	$("#obj_img_espectral").hide("slow");
							break;
		   					}
			
				}); 
        //:fin:
        
			 //enviando la url de los poligonos de la base de datos por parametro al iframe de arcgis
            $(document).on('click', '.ver_mapa_momentos', function(){
                $("#mapa_momentos").modal("open");
                 var var_srcmapa1 = "http://arcgisonlinesena.maps.arcgis.com/apps/StoryMapBasic/index.html?appid=0bebc42ccf80414c82d5c6778f41728e";
                 $("#estado_mapa1").attr("src", var_srcmapa1); // el iframe que rrecoge la url del mapa y lo carga 
                 $("#ampliarmapa1").attr("href", var_srcmapa1); // el iframe que rrecoge la url del mapa y lo carga 
                     
                var var_srcmapa2 = "http://arcgisonlinesena.maps.arcgis.com/apps/Compare/index.html?appid=f50d505d1cf5411ba4e597fbf49c825c";
                 $("#estado_mapa2").attr("src", var_srcmapa2); // el iframe que rrecoge la url del mapa y lo carga   
                 $("#ampliarmapa2").attr("href", var_srcmapa2); // el iframe que rrecoge la url del mapa y lo carga 
                    
                var var_srcmapa3 = "http://arcgisonlinesena.maps.arcgis.com/apps/Compare/index.html?appid=7eee1a7abc4345f8b016c969774cee30";
                $("#estado_mapa3").attr("src", var_srcmapa3); // el iframe que rrecoge la url del mapa y lo carga 
                $("#ampliarmapa3").attr("href", var_srcmapa3); // el iframe que rrecoge la url del mapa y lo carga 
                     
                var var_srcmapa4 = "";
                 $("#estado_mapa4").attr("src", var_srcmapa4); // el iframe que rrecoge la url del mapa y lo carga
                 $("#ampliarmapa4").attr("href", var_srcmapa4); // el iframe que rrecoge la url del mapa y lo carga 
                 
                  });
        
            $(document).on('click', '#reloadmap1', function(){
            $("#estado_mapa1").attr("src", "http://arcgisonlinesena.maps.arcgis.com/apps/StoryMapBasic/index.html?appid=0bebc42ccf80414c82d5c6778f41728e");        
            });
            $(document).on('click', '#reloadmap2', function(){
            $("#estado_mapa2").attr("src", "http://arcgisonlinesena.maps.arcgis.com/apps/Compare/index.html?appid=f50d505d1cf5411ba4e597fbf49c825c");        
            });
            $(document).on('click', '#reloadmap3', function(){
            $("#estado_mapa3").attr("src", "http://arcgisonlinesena.maps.arcgis.com/apps/Compare/index.html?appid=7eee1a7abc4345f8b016c969774cee30");        
            });
        
		//:INICIO:CÓDIGO PARA CARGAR UNA ANÁLISIS SI EL USUARIO LO DECIDE EN LA PESTAÑA ANALISIS DE SUELO
			 $(document).on('click', '#anfolobj', function(){  
				var id_foliar = $("#Siembra_id").val();
			 	if (id_foliar == ''){
				alert('No ha seleccionado una siembra todavía.');
				$('.tabs').tabs();
        		$('ul.tabs').tabs('select_tab', 'dg');
				}else
					{
				 $.ajax({  
				 url:"../../control/plan_fertilizacion/traer_analisis_rel_siembra.php",  
                 method:"POST",  
                 data:{id_foliar:id_foliar},  
                 success:function(data){   
                 $('#anafoliardata').html('');         
                 $('#anafoliardata').append(data);         
				 }  
                    });  	
						
					}
				 
			 });				
        //:FIN:
        
			//:INICIO:asignar el análisis foliar al plan de fertilización
			$('.asing_anafol').change(function(){  	
 			var id_anafoliar = $(this).val();
 			var cod_pf = $("#cod_pf").val();
				 $.ajax({  
				 url:"../../control/plan_fertilizacion/relacionar_foliares_pf.php",  
                 method:"POST",  
                 data:{id_anafoliar:id_anafoliar, cod_pf:cod_pf},  
                 success:function(data){   
                 alert(data);	 
				 }  
                    });  
			 }); 
			//:FIN:
        
			//:INICIO: ESTE CÓDIGO CARGA LOS DETALLES DEL ANÁLISIS FOLIAR
			$('.ver_datos_anafols').change(function(){  	 
			var cabecera_foliar = $(this).val();
			var cabecera_foliar_datos = $(this).val();
				//primero traer los datos de la cabecera
				$.ajax({  
				 url:"../../control/plan_fertilizacion/carga_datos_analisis_rel_siembra.php",  
                 method:"POST",  
                 data:{cabecera_foliar_datos:cabecera_foliar_datos},  
                 success:function(data){   
                 $('#anafoliardetalles_cabecera').html('');
                 $('#anafoliardetalles_cabecera').append(data);
				 }
                    }); 	
				
				//segundo cargar los elementos del análisis foliar
				$.ajax({  
				 url:"../../control/plan_fertilizacion/carga_datos_analisis_rel_siembra.php",  
                 method:"POST",  
                 data:{cabecera_foliar:cabecera_foliar},  
                 success:function(data){   
                 $('#anafoliardetalles').html(data);
					var f_nitrogeno = 5;
					var f_fosforo = $("#F_FOSFORO").val();
					var f_potasio = $("#F_POTASIO").val();
					var f_magnesio = $("#F_MAGNESIO").val();
					var f_calcio = $("#F_CALCIO").val();
					var f_azufre = $("#F_AZUFRE").val();
					var f_boro = $("#F_BORO").val();
					var f_zinc = $("#F_ZINC").val();
					var f_cobre = $("#F_COBRE").val();
					var f_hierro = $("#F_HIERRO").val();
					 
				new Chart(document.getElementById("elements_chart_foliar"), {
				type: 'horizontalBar',
				data: {
				  labels: ["N", "P", "K", "Mg", "Ca", "S", "B", "Zn", "Cu", "Fe" ],
				  datasets: [
					{
					label: "Estimación (Nutrientes)",
					backgroundColor: ["#263238", "#ffab00","#1b5e20","#cddc39","#006064","#d50000", "#ffd600","#3e2723","#009688","#b71c1c"],
					data: [f_nitrogeno, f_fosforo, f_potasio, f_magnesio, f_calcio, f_azufre, f_boro, f_zinc, f_cobre, f_hierro]
					}
				  ]
				},
				options: {
				  legend: { display: false },
				  title: {
					display: true,
					text: 'Estimación de los nutrientes de este análisis foliar'
				  }
				}
			});	 
					 
					 
				 }
                    }); 
				
			});			
		    //:FIN:
        
			//:INICIO: ESTE CÓDIGO CARGA LOS DETALLES DEL ANÁLISIS DE SUELO
			$('.ver_datos_anasuels').change(function(){  	 
			var cabecera_suelo = $(this).val();
			var cabecera_suelo_datos = $(this).val();
			var cabecera_suelo_varsuelo = $(this).val();
				//primero cargar los datos básicos del análisis de suelo
				$.ajax({  
				 url:"../../control/plan_fertilizacion/carga_datos_analisis_rel_siembra.php",  
                 method:"POST",  
                 data:{cabecera_suelo_datos:cabecera_suelo_datos},  
                 success:function(data){   
                 $('#anasuelodetalles_cabecera').html(''); 
                 $('#anasuelodetalles_cabecera').append(data); 
					 
				 }
                    }); 		
				
				//segundo cargar los elementos y sus valores para el análisis de suelo
				$.ajax({  
				 url:"../../control/plan_fertilizacion/carga_datos_analisis_rel_siembra.php",  
                 method:"POST",  
                 data:{cabecera_suelo:cabecera_suelo},  
                 success:function(data){   
                 $('#anasuelodetalles').html(data);
					var s_nitrogeno = $("#S_NITROGENO").val();
					var s_fosforo = $("#S_FOSFORO").val();
					var s_potasio = $("#S_POTASIO").val();
					var s_magnesio = $("#S_MAGNESIO").val();
					var s_calcio = $("#S_CALCIO").val();
					var s_azufre = $("#S_AZUFRE").val();
					var s_boro = $("#S_BORO").val();
					var s_zinc = $("#S_ZINC").val();
					var s_cobre = $("#S_COBRE").val();
					var s_hierro = $("#S_HIERRO").val();
					 
				new Chart(document.getElementById("elements_chart_suelo"), {
				type: 'horizontalBar',
				data: {
				  labels: ["N", "P", "K", "Mg", "Ca", "S", "B", "Zn", "Cu", "Fe" ],
				  datasets: [
					{
					label: "Estimación (Nutrientes)",
					backgroundColor: ["#ff0000", "#ff4000","#ff8000","#ffbf00","#ffff00","#00ff80", "#00ffbf","#00bfff","#0040ff","#4000ff"],
					data: [s_nitrogeno, s_fosforo, s_potasio, s_magnesio, s_calcio, s_azufre, s_boro, s_zinc, s_cobre, s_hierro]
					}
				  ]
				},
				options: {
				  legend: { display: false },
				  title: {
					display: true,
					text: 'Estimación de los nutrientes de este análisis de suelo'
				  }
				}
			});	 
					 
				 }
                    });		
				
				//tercero cargar las variables del suelo y sus valores para el análisis de suelo
				$.ajax({  
				 url:"../../control/plan_fertilizacion/carga_datos_analisis_rel_siembra.php",  
                 method:"POST",  
                 data:{cabecera_suelo_varsuelo:cabecera_suelo_varsuelo},  
                 success:function(data){   
                 $('#anasuelodetalles_varsuelos').html(data);
				 }
                    }); 
				
			});

		
		    //:inicio:asignar el análisis de suelo al plan de fertilización
		    $('.asing_anasuel').change(function(){  	
 			var id_anasuelo = $(this).val();
 			var cod_pf = $("#cod_pf").val();
				
				 $.ajax({  
				 url:"../../control/plan_fertilizacion/relacionar_foliares_pf.php",  
                 method:"POST",  
                 data:{id_anasuelo:id_anasuelo, cod_pf:cod_pf},  
                 success:function(data){   
                // alert(data);	 
				 }  
                    });  
				 
			 });				
            //:fin:
        
			 //:INICIO: CÓDIGO PARA CARGAR UNA ANÁLISIS DE SUELO SI EL USUARIO LO DECIDE
			 $(document).on('click', '#ansuelobj', function(){  
				var id_suelo = $("#Siembra_id").val();
			 	if (id_suelo == ''){
				 $('.tabs').tabs();
				alert('No ha seleccionado una siembra todavía.');
			    $('ul.tabs').tabs('select_tab', 'dg');
				}else
					{
				 $.ajax({  
				 url:"../../control/plan_fertilizacion/traer_analisis_rel_siembra.php",  
                 method:"POST",  
                 data:{id_suelo:id_suelo},  
                 success:function(data){   
                 $('#anasuelodata').html('');         
                 $('#anasuelodata').append(data);         
				 }  
                    });  	
						
					}
				 
			 });
        
            //:INICIO:ESTE CÓDIGO PASA LAS VARIABLES RRECOGIDAS AL CONSOL [INICIO]{           
			$(document).on('click', '#consolidado', function(){
			var id_cult = $("#id_cul").val();  
			var id_cult_var = $("#id_cul").val();  
			if (id_cult == '' || id_cult_var == ''){
		 	$('.tabs').tabs();
            alert("Por favor selecciona una siembra");
			$('ul.tabs').tabs('select_tab', 'dg');
				
            }   
            else
            {
                $.ajax({  
				 url:"../../control/plan_fertilizacion/traer_req_nutricionales_cultivo.php",  
                 method:"POST",  
                 data:{id_cult:id_cult},  
                 success:function(data){   
                 $('#req_nutricional_cult').html(data);         
				 }  
                    });               
				
				$.ajax({  
				 url:"../../control/plan_fertilizacion/traer_req_nutricionales_cultivo.php",  
                 method:"POST",  
                 data:{id_cult_var:id_cult_var},  
                 success:function(data){   
                 $('#vals_reqs_cultivo').html(data);  
			//Cóigo que rrecoge las variables de los elementos para agregarlos al gráfico
			var D_NITROGENO = $("#D_NITROGENO").val();
			var D_FOSFORO = $("#D_FOSFORO").val();
			var D_POTASIO = $("#D_POTASIO").val();
			var D_MAGNESIO = $("#D_MAGNESIO").val();
			var D_CALCIO = $("#D_CALCIO").val();
			var D_AZUFRE = $("#D_AZUFRE").val();
			var D_BORO = $("#D_BORO").val();
			var D_ZINC = $("#D_ZINC").val();
			var D_COBRE = $("#D_COBRE").val();
			var D_HIERRO = $("#D_HIERRO").val();
			//ENVÍA LOS VALORES DE LOS REQUERIMIENTOS NUTRICIONALES AL LADO DEL GRÁFICO [INICIO]
			$("#val_nitro").text("N =>" + " " + D_NITROGENO);
			$("#val_fosfo").text("P =>" + " " + D_FOSFORO);
			$("#val_pota").text("K =>" + " " + D_POTASIO);
			$("#val_mag").text("Mg =>" + " " + D_MAGNESIO);
			$("#val_cal").text("Ca =>" + " " + D_CALCIO);
			$("#val_azu").text("S =>" + " " + D_AZUFRE);
			$("#val_bor").text("B =>" + " " + D_BORO);
			$("#val_zinc").text("Zn =>" + " " + D_ZINC);
			$("#val_cobr").text("Cu =>" + " " + D_COBRE);
			$("#val_hierr").text("Fe =>" + " " + D_HIERRO);
			//ENVÍA LOS VALORES DE LOS REQUERIMIENTOS NUTRICIONALES AL LADO DEL GRÁFICO [FIN]
					 
	//código para pasar las variables de los elementos nutricionales al gráfico
		new Chart(document.getElementById("elements_chart"), {
          type: 'line',
          data: {
            labels: ["N", "P", "K", "Mg", "Ca", "S", "B", "Zn", "Cu", "Fe" ],
            datasets: [{ 
				data: [D_NITROGENO, D_FOSFORO, D_POTASIO, D_MAGNESIO, D_CALCIO, D_AZUFRE, D_BORO, D_ZINC, D_COBRE, D_HIERRO],
                label: "Nutrición al suelo",
                borderColor: "#3cba9f",
                fill: false
              },
            ]
          },
          options: {
            title: {
              display: true,
              text: 'Requerimientos nutricionales'
            }
          }
        }); 
 	} //fin de la funcion exitosa de los datos 
					
          }); 

            }
                
     var momento_seleccionado = $('option:selected', '#estado_fenologico').attr('value'); //captura el momento seleccionado
                if (momento_seleccionado == 1) {
                   $("#momento1").addClass('lime lighten-4');
                   $("#momento1").show();
                   $("#momento2").hide();
                   $("#momento3").hide();
                }else{
                   $("#momento1").removeClass('lime lighten-4');    
                }           
                if (momento_seleccionado == 2) {
                   $("#momento2").addClass('lime lighten-4');
                   $("#momento2").show();
                   $("#momento1").hide();
                   $("#momento3").hide();
                }else{
                   $("#momento2").removeClass('lime lighten-4');    
                }   
                if (momento_seleccionado == 3) {
                   $("#momento3").addClass('lime lighten-4');
                    $("#momento3").show();
                   $("#momento2").hide();
                   $("#momento1").hide();
                }else{
                   $("#momento3").removeClass('lime lighten-4');    
                }
                
           //código para pasar las variables de los elementos nutricionales al para el momento1
            new Chart(document.getElementById("elements_momento1"), {
              type: 'line',
              data: {
                labels: ["N", "P", "K", "Mg", "Ca", "B", "Zn"],
                datasets: [{ 
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#ffbf00","#ffff00"],
                data: [45,15,100,6.6,3.3,0.7,1],
                    label: "V. suelo",
                    borderColor: "#c45850",
                    fill: false
                  }
                ]
              },
              options: {
                title: {
                  display: true,
                    text: 'Requerimientos nutricionales  (Momento 1)'
                }
              }
            }); 
                
            //código para pasar las variables de los elementos nutricionales al para el momento2
            new Chart(document.getElementById("elements_momento2"), {
              type: 'line',
              data: {
                labels: ["N", "P", "K", "Mg", "Ca", "B", "Zn"],
                datasets: [{ 
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#ffbf00","#ffff00"],
                    data: [45,30,50,6.6,3.3,0.7,1],
                    label: "V. suelo",
                    borderColor: "#3cba9f",
                    fill: false
                  }
                ]
              },
              options: {
                title: {
                  display: true,
                    text: 'Requerimientos nutricionales  (Momento 2)'
                }
              }
            }); 
                
        //código para pasar las variables de los elementos nutricionales al para el momento3
            new Chart(document.getElementById("elements_momento3"), {
              type: 'line',
              data: {
                labels: ["N", "P", "K", "Mg", "Ca", "B", "Zn"],
                datasets: [{ 
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#ffbf00","#ffff00"],
                data: [90,15,50,6.6,3.3,0.7,1],
                    label: "V. suelo",
                    borderColor: "#8e5ea2",
                    fill: false
                  }
                ]
              },
              options: {
                title: {
                  display: true,
                    text: 'Requerimientos nutricionales  (Momento 3)'
                }
              }
            }); 

                
                
  
		});  
   
 
			//código para hacer que muestre los fertilizantes elegidos en la pestaña consolidado.	
  /*/  $(document).on('click', '.select_fertis', function(){
          var id_fer = $(this).attr("id");
          var comp = $(this).attr("comp");
          var codfer = $(this).attr("codfer");
          var nombre_f = $(this).attr("name");
          var estado = $(this).attr("estado");
          var html = '';
          html += '<tr>';
          html += '<td><input type="text" id="'+codfer+'"value="'+nombre_f+'" name="'+codfer+'" class="nfer" /></td>';
          html += '<td><input type="text" value="'+comp+'" name="" class="comfer" /></td>';
          html += '<td><input type="text" value="'+estado+'" name="" class="estado" /></td>';
          html += '<td><a href="javascript:void(0);" id="'+codfer+'" class="red-text remove">X</a></td>';
		  html += '</tr>';
		  $('#fertis_elegidos').append(html);
          $(this).removeClass('agregar_f');       
          $(this).closest('tr').remove();       
      }); /*/
			 
     /*/$(document).on('click', '.remove', function(){
		 var nfer = $(".nfer").val();
         var comfer = $(".comfer").val();
         var estado = $(".estado").val();
		 var markup = "<tr><td>"+nfer+"</td><td>" + comfer + "</td><td>" + estado + "</td><td>" + '<a href="javascript:void(0);" name="'+nfer+'" class="black-text select_fertis"><i class="material-icons green-text center">forward</i></a>' + "</td><td>" + '<a href="javascript:void(0);"  value="" class="waves-effect waves-light black-text ver_detalles"><i class="material-icons blue-text center">help</i></a>' + "</td></tr>";
         $("#datos_fertilizantes tbody").append(markup);
		 
    $(this).closest('tr').remove();  
    //dataTable.ajax.reload();
    }); /*/
	 
		//:INICIO:ESTABLECER UN COLOR AL FERTILIZANTE ELEGIDO
		function set_color_row(){
 	    if ( $('#URE4600').is(':checked') ){
			$(".URE4600").closest('tr').addClass('lime lighten-4');
		}else{
		$(".URE4600").closest('tr').removeClass('lime lighten-4');	
		}  	   
		
		if ( $('#KCL0060').is(':checked') ){
			$(".KCL0060").closest('tr').addClass('lime lighten-4');
		}else{
		$(".KCL0060").closest('tr').removeClass('lime lighten-4');	
		} 		
			
	 if ( $('#DAP18460').is(':checked') ){
			$(".DAP18460").closest('tr').addClass('lime lighten-4');
		}else{
		$(".DAP18460").closest('tr').removeClass('lime lighten-4');	
		} 		
			
	  if ( $('#TRI151515').is(':checked') ){
			$(".TRI151515").closest('tr').addClass('lime lighten-4');
		}else{
		$(".TRI151515").closest('tr').removeClass('lime lighten-4');	
		} 	
			
    		}
        setInterval(set_color_row, 800);		
        //:FIN:
        
        //:INICIO: BOTÓN QUE PERMITE AL USUARIO VALIDAR LAS ACCCIONES AL TRABAJAR EN PLAN DE FERTILIZACIÓN
        $(document).on('click', '.siguiente_pf', function(){
            event.preventDefault();
            var val_siembra = $("#Siembra_id").val();
            var estado_feno = $("#estado_fenologico").val();
            var ana_suelo = $("#ana_suelo").val();
            if (val_siembra == null || val_siembra == 0 ){
                
                alert("Por favor selecciona una siembra");
                $("#Siembra_id").addClass('lime lighten-1');
                return false;
                
            }else if (estado_feno == null || estado_feno == 0 ){
                alert("Por favor selecciona un estado fenológico");
                $("#estado_fenologico").addClass('red');
                return false;       
                
            }else if (ana_suelo == null || ana_suelo == 0 ){
                alert("Por favor activa la pestaña para cargar una análisis de suelo");
                $("#ana_suelo").addClass('lime lighten-1');
                return false;       
            }else if (ana_suelo == "No"){ //esto quiere decir que no selecciono una analisis de suelo
             alert("Es necesario seleccionar un análisis de suelo");
             $("#ana_suelo").addClass('lime lighten-1');
                return false;
            }
            
            if (val_siembra !== null & val_siembra !== 0   && estado_feno !== null & estado_feno !== 0 && ana_suelo !== null & ana_suelo !== 0){
            $('#ansuelobj').removeClass('disabled');
            $('ul.tabs').tabs('select_tab', 'ansuel');
            }
            
            var anasuelodata = $("#anasuelodata").val();   
            if (anasuelodata == null || anasuelodata == 0){
            alert("Es obligatorio seleccionar un análisis de suelo");   
            $("#anasuelodata").addClass('lime lighten-1');
                 return false;     
            }else{
             $('#consolidado').removeClass('disabled');  
             $('ul.tabs').tabs('select_tab', 'consol');
            }
            
            
            });
 		//:FIN:
        
 	 /*/ $(document).on('click', '#obte_recomen', function(){
		  //INICIO CALCULO PARA UREA Y EL APORTE A NITROGENO EN FERTILIZANTES
		var id_siembra = $("#Siembra_id").val();
		 var RC_NITROGENO_UREA = $("#RC_NITROGENO").val();
 			if($('.URE4600').prop('checked') && id_siembra == 3) {
  			 RC_NITROGENO_UREA = RC_NITROGENO_UREA * 100 / 46;
			 var resultado_urea_aplicar = RC_NITROGENO_UREA.toFixed(); 
			 var bultos_urea = resultado_urea_aplicar / 50; //CALCULA EN NÚMERO DE BULTOS A USAR
			 var result_burea = bultos_urea.toFixed(1); 
		  	$("#recom_fe_urea").html('<p class="teal-text">'+resultado_urea_aplicar+' "Kg UREA/Ha" Aplicar '+result_burea+' Bultos de  UREA</p>');
		
	} else {
	alert("No seleccionó Urea");
	$('#recom_fe_urea').html('');
	}
 //FIN CALCULO PARA UREA Y EL APORTE A NITROGENO EN FERTILIZANTES
		  
		  	//ESTIMACIONES Y RRECOMENDACIONES PARA CLORURO DE POTASIO Y CULTIVO DE GUAYABA
			var D_POTASIO_KCL = $("#RC_POTASIO").val();
		  if($('.KCL0060').prop('checked') && id_siembra == 3) {
			D_POTASIO_KCL = D_POTASIO_KCL * 100 / 60;
			var result_kcl = D_POTASIO_KCL.toFixed(); 
			var bultos_kcl = result_kcl / 50;
			var result_bukcl = bultos_kcl.toFixed(1); 
			$("#recom_fe_kcl").html('<p class="teal-text">'+result_kcl+' "Kg KCL/Ha" Aplicar '+result_bukcl+' Bultos de  CLORURO DE POTASIO</p>');
			}
			else{
		 alert("No seleccionó Potasio");
		 $('#recom_fe_kcl').html('');
			}
		  
		  	//ESTIMACIONES Y RRECOMENDACIONES PARA DAP (FOSFATO DIAMONICO Y CULTIVO DE GUAYABA
			var D_NITROGENO_DAP = $("#RC_NITROGENO").val();
			var D_FOSFORO_DAP = $("#RC_FOSFORO").val();
		  	if($('.DAP18460').prop('checked') && id_siembra == 3) {
			var dap_aplicar =  D_FOSFORO_DAP * 100/ 46; // SACA FOSFORO APLICAR
			var bultos_dap = 	dap_aplicar / 50;	 
			var bultos_dap_result = bultos_dap.toFixed(1);
			var result_dap_fosforo = dap_aplicar.toFixed(1);
			var result_nitropuro = dap_aplicar * 18 / 100; // SACA NITROGENO PURO
			var result_dap_nitrogeno = result_nitropuro.toFixed(1);  //QUITA DECIMALES	
			$("#recom_fe_dap").html('<p class="teal-text">'+result_dap_fosforo+' "Kg DAP/Ha" Aplicar '+bultos_dap_result+' Bultos | Aporta  de Nitrógeno puro '+result_dap_nitrogeno+'</p>');

			}else{
			alert("NO SELECCIONÓ DAP");
			$('#recom_fe_dap').html('');

			}
		  
		  // calculo por si escoge dos fertilizantes que aporten nitrógeno Y SI CULTIVO DE GUAYAVA
		   if($('.DAP18460').prop('checked') && $('.URE4600').prop('checked') && id_siembra == 3) {
 
			var RC_NITROGENO_UREA = $("#RC_NITROGENO").val();
			var dap_urea = RC_NITROGENO_UREA - result_dap_nitrogeno;
			var deci = dap_urea.toFixed(1);				
				
			var nuevo_resul_nitrogen_ure = dap_urea * 100 / 46;
			var nvo_result_urea_nitrogeno = nuevo_resul_nitrogen_ure.toFixed(1);
			$("#urea_nitrogeno").html
			("SI USTED ELIGE UREA Y NECESITA APLICAR: "+ resultado_urea_aplicar + "Kg/Ha" + " PERO ELIGIÓ TAMBIÉN DAP, PARA AYUDAR EN APORTE DEL NITRÓGENO, Y APLICAR MENOS UREA USTED DEBE APLICAR: "+ " " + nvo_result_urea_nitrogeno + " Kg/Ha de UREA")
 		  	$("#recom_fe_urea").html(''); //limpia estimaciones singulares de la UREA
 		  	$("#recom_fe_dap").html(''); //limpia estimaciones singulares del DAP
			}else{
			$('#urea_nitrogeno').html('');
			}
 			// CÁLCULO PARA TRIPLE 15 Y CULTIVO DE GUAYABA
			var D_NITROGENO_TRI151515 = $("#RC_NITROGENO").val();
			var D_FOSFORO_TRI151515= $("#RC_FOSFORO").val();
			var D_POTASIO_TRI151515 = $("#RC_POTASIO").val();
		    if($('.TRI151515').prop('checked') && id_siembra == 3) {
				var result_tri15 = D_FOSFORO_TRI151515 * 100/ 15 ;
				var bultos_tri15 = result_tri15 / 50; 
				$("#recom_fe_tri5").html('Necesita Aplicar'+ ' '+ result_tri15 + ' Kg/Ha de TRIPLE 15 para aportar 60 Kg de Nitrógeno, Fosforo y Potasio puro: = '+ bultos_tri15 + ' Bultos' + 
				'<p class="green-text">-</p>');
			 	if(confirm('Si elige Triple 15 necesita compensar con otros fertilizantes: ¿Quieres que el sistema los elija por ti?')){
				$('#recom_fe_tri5_mensaje').html('Recomendamos aplicar los siguientes fertilizantes que aportan al Nitrógeno (N) '+ '</br>'+ 'UREA: 260 Kg/Ha (5.2 Bultos) o:' + '</br>' + 'NITROMAG: 571 Kg/Ha (11 Bultos) o: '+ '</br>' +
				'SULFATO DE AMONIO: 585 Kg/Ha (11 Bultos) ' + '</br>'+ 'Y para aportar en Potasio (K) ' + '</br>' +'Aplicar:'+ 'CLORURO DE POTASIO: 223 Kg/Ha (4.6 Bultos)'); 
 				$(".URE4600" ).prop( "checked", true ); //Checkear la UREA
 				$(".KCL0060" ).prop( "checked", true ); //Checkear el KCL
      				}
			}else{
			alert("No cogió triple 15");
				$('#recom_fe_tri5').html('');
			}
		  
		  	
    }); /*/
        
    });// FIN DE  => (document).ready(function();  

$(document).ready(function(){
	$('#add_button').click(function(){
		$('#form_siembras')[0].reset();
		$('.modal-title').text("Agregar nueva siembra");
		$('#action').val("Agregar");
		$('#operacion').val("Agregar");
	});
	
	var dataTable = $('#datos_siembra').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"../../control/siembras/fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 2, 3],
				"orderable":false,
			},
		],

	});

	$(document).on('submit', '#form_siembras', function(event){
		event.preventDefault();
		var Nombre_siembra = $('#Nombre_siembra').val();
		var N_plantas_siembra = $('#N_plantas_siembra').val();
		var Descripcion_siembra = $('#Descripcion_siembra').val();
		var Estado_siembra = $('#Estado_siembra').val();
		var Area_siembra = $('#Area_siembra').val();
		var Fecha_siembra = $('#Fecha_siembra').val();
		var Tiporiego_siembra = $('#Tiporiego_siembra').val();
		var Fteagua_siembra = $('#Fteagua_siembra').val();
		var Edad_siembra = $('#Edad_siembra').val();
		var Distancia_siembra = $('#Distancia_siembra').val();
		var Sanitario_siembra = $('#Sanitario_siembra').val();
		var Propagacion_siembra = $('#Propagacion_siembra').val();
		var Registro_siembra = $('#Registro_siembra').val();
		var Suelo_siembra = $('#Suelo_siembra').val();
		var Cultivo_siembra = $('#Cultivo_siembra').val();
		
		if(Nombre_siembra != '' && N_plantas_siembra != '' && Descripcion_siembra != '' && Estado_siembra != ''&& Area_siembra != ''&& Fecha_siembra != ''&& Tiporiego_siembra != ''&& Cultivo_siembra != '')
		{
			$.ajax({
				url:"../../control/siembras/insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#form_siembras')[0].reset();
					$('#Siembras_modal').modal('close');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Todos los campos son necesarios");
		}
	});
	
	$(document).on('click', '.update', function(){
		var id_siembra = $(this).attr("id");
		$.ajax({
			url:"../../control/siembras/fetch_single.php",
			method:"POST",
			data:{id_siembra:id_siembra},
			dataType:"json",
			success:function(data)
			{
				$('#Siembras_modal').modal('open');
				$('#Nombre_siembra').val(data.Nombre_siembra);
				$('#N_plantas_siembra').val(data.N_plantas_siembra);
				$('#Descripcion_siembra').val(data.Descripcion_siembra);
				$('#Estado_siembra').val(data.Estado_siembra);
				$('#Area_siembra').val(data.Area_siembra);
				$('#Fecha_siembra').val(data.Fecha_siembra);
				$('#Tiporiego_siembra').val(data.Tiporiego_siembra);
				$('#Fteagua_siembra').val(data.Fteagua_siembra);
				$('#Edad_siembra').val(data.Edad_siembra);
				$('#Distancia_siembra').val(data.Distancia_siembra);
				$('#Sanitario_siembra').val(data.Sanitario_siembra);
				$('#Propagacion_siembra').val(data.Propagacion_siembra);
				$('#Registro_siembra').val(data.Registro_siembra);
				$('#Suelo_siembra').val(data.Suelo_siembra);
				$('#Cultivo_siembra').val(data.Cultivo_siembra);
				$('.modal-title').text("Editar siembras");
				$('#id_siembra').val(id_siembra);
				$('#action').val("Editar");
				$('#operacion').val("Editar");
			}
		})
	});

	$(document).on('click', '.delete', function(){
		var id_siembra = $(this).attr("id");
		if(confirm("Estás seguro de eliminar esto?"))
		{
			$.ajax({
				url:"../../control/siembras/delete.php",
				method:"POST",
				data:{id_siembra:id_siembra},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	       //SELECCIONAR CULTIVOS PARA AGREGARLOS A UNA SIEMBRA
	        $(document).on('click', '.select_c_asignar', function(){  
           var var_request = $(this).attr("id");  
            $('#siembra_val').val(var_request);
           if(var_request != '')  
           {  
                $.ajax({  
                     url:"../../control/siembras/traer_cultivos.php",  
                     method:"POST",  
                     data:{var_request:var_request},  
                     success:function(data){  
                          $('#mostrar_cultivos').html(data);  
                          $('#asig_cultivos').modal('open');  
                     }  
                });  
           } 
            //filtrar cultivos listados
                $(function() {
          $("#filter").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#cultivos > tbody > tr").filter(function() {      
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });  
                //filtrar cultivos relacionados
        $(function() {
          $("#filter_rel").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#cultivos_relac > tbody > tr").filter(function() {      
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
                 
 
      });  
        //ASIGNAR CULTIVOS A ESTA SIEMBRA
          $(document).on('click', '.asignar_cultivos', function(){  
           var val_cultivo = $(this).attr("id");  
            var val_siembra = $('#siembra_val').val(); 
            if(confirm("Seguro de agregar este cultivo?"))
                {
              if(val_cultivo != '' || val_siembra != '')  
                  {  
                    $.ajax({  
                     url:"../../control/siembras/asigna_cultivos_siembra.php",  
                     method:"POST",  
                     data:{val_cultivo:val_cultivo,val_siembra:val_siembra},  
                     success:function(data){  
                          alert(data);
                     }  
                });  
           }     
            }
            
      }); 
    
    //VER CULTIVOS ASIGNADOS A ESTA SIEMBRA
    $(document).on('click', '.ver_c_asignados', function(){  
            var val_siembra = $(this).attr("id");  
            var id_siembra_rel = $("#id_siembra_rel").val(val_siembra);
           if(val_siembra != '')  
           {  
                $.ajax({  
                     url:"../../control/siembras/traer_cultivos_relacionados_siembra.php",  
                     method:"POST",  
                     data:{val_siembra:val_siembra}, 
                     success:function(data){  
                        $('#mostrar_c_relac').html(data);
                        $('#lista_cultivos_relacionados').modal('open');                        
                     }  
                });  
           }            
      });     
    
    //ELIMINAR CULTIVOS RELACIONADOS 
     $(document).on('click', '.eliminar_cultivos', function(){
     var val_c = $(this).attr("id");  
     var id_siembra_rel = $('#id_siembra_rel').val();
      if(confirm("Seguro de eliminar esta relacion?"))
      {
       $.ajax({
        url:"../../control/siembras/eliminar_cultivos_relacionados.php",  
        method:"POST",
        data:{val_c:val_c,id_siembra_rel:id_siembra_rel},  
        success:function(data)
        {
         alert(data);
         $('#lista_cultivos_relacionados').modal('close');                            
        }
       });
      }
      else
      { doc
       return false; 
          
      }
     });
	
	$(document).on('click', '#ayuda_selec_cul', function(){
	 alert("Es indispensable seleccionar un cultivo para tener en cuenta los requerimientos nutricionales para toda la siembra")   
	}); 
    
});
  
           
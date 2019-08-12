$(document).ready(function(){
	$('#add_button').click(function(){
		$('#form_cultivos')[0].reset();
		$('.modal-title').text("Agregar Cultivos");
		$('#action').val("Agregar");
		$('#operacion').val("Agregar");
		$('#imagen_cultivo_subida').html('');
	});
	
	var dataTable = $('#datos_cultivos').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"../../control/cultivos/traer_todos_cultivos.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 3, 4],
				"orderable":false,
			},
		],

	});

	$(document).on('submit', '#form_cultivos', function(event){
		event.preventDefault();
		var cod_cultivo = $('#cod_cultivo').val();
		var Nombre_cultivo = $('#Nombre_cultivo').val();
		var Variedad_cultivo = $('#Variedad_cultivo').val();
		var Superficie_cultivo = $('#Superficie_cultivo').val();
		var Metodo_cultivo = $('#Metodo_cultivo').val();
		var Descripcion_cultivo = $('#Descripcion_cultivo').val();
		var extension = $('#user_image').val().split('.').pop().toLowerCase();
		if(extension != '')
		{
			if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
			{
				alert("Invalid Image File");
				$('#user_image').val('');
				return false;
			}
		}	
		if(cod_cultivo != '' || Nombre_cultivo != '' && Variedad_cultivo != ''&& Superficie_cultivo != ''&& Metodo_cultivo != ''
           && Descripcion_cultivo != '')
		{
			$.ajax({
				url:"../../control/cultivos/insertar_cultivos.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#form_cultivos')[0].reset();
					$('#Cultivos').modal('close');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Todos los campos son obligatorios");
		}
	});
	
	$(document).on('click', '.update', function(){
		var cultivo_id = $(this).attr("id");
		$.ajax({
			url:"../../control/cultivos/traer_de_auno_cultivos.php",
			method:"POST",
			data:{cultivo_id:cultivo_id},
			dataType:"json",
			success:function(data)
			{
				$('#Cultivos').modal('open');
				$('#cod_cultivo').val(data.cod_cultivo);
				$('#Nombre_cultivo').val(data.Nombre_cultivo);
				$('#Variedad_cultivo').val(data.Variedad_cultivo);
				$('#Superficie_cultivo').val(data.Superficie_cultivo);
				$('#Metodo_cultivo').val(data.Metodo_cultivo);
				$('#Descripcion_cultivo').val(data.Descripcion_cultivo);
				$('.modal-title').text("Editar Cultivo");
				$('#cultivo_id').val(cultivo_id);
				$('#imagen_cultivo_subida').html(data.user_image);
				$('#action').val("Editar");
				$('#operacion').val("Editar");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var cultivo_id = $(this).attr("id");
		if(confirm("De verdad quieres eliminar este cultivo?"))
		{
			$.ajax({
				url:"../../control/cultivos/eliminar_cultivos.php",
				method:"POST",
				data:{cultivo_id:cultivo_id},
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
    
        //AGREGA LAS VARIBLES MÁS SIGNIFICATIVAS DEL SUELO A UN CULTIVO
        $(document).on('click', '.g_vars_suelo', function(){  
              var id_cultivo = $("#id_cultivo").val();  // Recoger el ID del cultivo
              var val_textura = $('#val_textura').val();  
              var val_ph   = $('#val_ph').val();  
              var val_ce   = $('#val_ce').val();  
              var val_cice = $('#val_cice').val();  
              var val_salinidad = $('#val_salinidad').val();  
            
            if(val_textura =='' )  
            {  
           $('#msg_error_edit').html("El valor de la textura está vacío");  
            }else if(val_ph == ''){
            $('#msg_error_edit').html("Valor PH vacío");           
            }
            else if(val_ce == '')
            {
            $('#msg_error_edit').html("Valor CE vacío");
            }else if (val_cice == '')
            {
            $('#msg_error_edit').html("Valor CICE vacío");
            }else if (val_salinidad == '')
            {
            $('#msg_error_vc').html("Valor Salinidad vacío");    
            }else  
               {  
                   $('#msg_error_edit').html('');  
                   $.ajax({  
                         url:"../../control/cultivos/insert_vars_cultivo.php",  
                         method:"POST",  
                         data:{id_cultivo:id_cultivo,val_textura:val_textura,val_ph:val_ph,val_ce:val_ce,val_cice:val_cice,val_salinidad:val_salinidad
                         },  
                     success:function(data){  
                     //$("form").trigger("reset");  
                    $('#msg_exito_vc').fadeIn().html(data);  
                      setTimeout(function(){  
                     $('#msg_exito_vc').fadeOut("Slow");  
                          }, 100000);                                  

                         }  
                    });  
               }           
      }); 
    
    //para cargar el id del cultivo y asignarle los requerimientos nutricionales
    $(document).on('click', '.add_requeriments', function(){
		var cultivo_id = $(this).attr("id");
        $('#id_cultivo').val(cultivo_id);
        $('#add_requerimientos').modal('open');
 
	});
    //para agregarle los requerimentos nutricionales a los cultivos y enviarlos a la BD
    $(document).on('click', '.g_req_cultivo', function(){
		var id_cultivo = $("#id_cultivo").val(); 
        var r_nitrogeno = $('#r_nitrogeno').val();
        var r_fosforo = $('#r_fosforo').val();
        var r_potasio = $('#r_potasio').val();
        var r_magnesio = $('#r_magnesio').val();
        var r_calcio = $('#r_calcio').val();
        var r_azufre = $('#r_azufre').val();
        var r_boro = $('#r_boro').val();
        var r_zinc = $('#r_zinc').val();
        var r_cobre = $('#r_cobre').val();
        var r_hierro = $('#r_hierro').val();
        //--------------------//Variables de interpretación del análisis de suelo.
        var desc_nitrogeno = $('#desc_nitrogeno').val();
        var desc_fosforo = $('#desc_fosforo').val();
        var desc_potasio = $('#desc_potasio').val();
        var desc_magnesio = $('#desc_magnesio').val();
        var desc_calcio = $('#desc_calcio').val();
        var desc_azufre = $('#desc_azufre').val();
        var desc_boro = $('#desc_boro').val();
        var desc_zinc = $('#desc_zinc').val();
        var desc_cobre = $('#desc_cobre').val();
        var desc_hierro  = $('#desc_hierro').val();
               if(r_nitrogeno == '' || r_fosforo == '')  
               {  
               $('#msg_error_elementos').html("Todos los campos son obligatorios");  
               }  
               else  
               {  
                   $('#msg_error_elementos').html('');  
                $.ajax({  
                 url:"../../control/cultivos/insertar_req_nutrionales_cultivo.php",  
                 method:"POST",  
                 data:{id_cultivo:id_cultivo,r_nitrogeno:r_nitrogeno,r_fosforo:r_fosforo,r_potasio:r_potasio,r_magnesio:r_magnesio,
                 r_calcio:r_calcio,r_azufre:r_azufre,r_boro:r_boro,r_zinc:r_zinc,r_cobre:r_cobre,r_hierro:r_hierro,        
                       
                desc_nitrogeno:desc_nitrogeno,desc_fosforo:desc_fosforo,desc_potasio:desc_potasio,desc_magnesio:desc_magnesio,
                desc_calcio:desc_calcio,desc_azufre:desc_azufre,desc_boro:desc_boro,desc_zinc:desc_zinc,desc_cobre:desc_cobre,
                desc_hierro:desc_hierro         
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

         //ESTE CÓDIGO ME PERMITE CARGAR LAS VARIABLES DEL SUELO 
        $(document).on('click', '.ver_vars_cultivos', function(){  
          var id_cultivo = $(this).attr("id");  
          var nombre_cultivo = $(this).attr('name');    
            $('#text_inf').html("Requerimientos nutricionales para cultivo de: "+'<p class="orange-text">' + nombre_cultivo + ' </p>');
           if(id_cultivo != '')  
           {  
                $.ajax({  
                     url:"../../control/cultivos/carga_variables_cultivo.php",
                     method:"POST",  
                     data:{id_cultivo:id_cultivo},  
                     success:function(data){  
                          $('#req_cultivos_varsuelos').html(data);  
                          $('#modal_ver_req').modal('open');  
						 $('#elementos_cul').html('');
                     }  
                });  
           } 
      });          
    
    
             //EDITA LAS VARIBLES MÁS SIGNIFICATIVAS DEL SUELO
        $(document).on('click', '.edita_vars_suelo_cul', function(){  
              var id_cultivo_req = $('#id_cultivo_req').val(); // Recoger el ID de las varibles
              var val_textura = $('#val_textura_c').val();  
              var val_ph   = $('#val_ph_c').val();  
              var val_ce   = $('#val_ce_c').val();  
              var val_cice = $('#val_cice_c').val();  
              var val_salinidad = $('#val_salinidad_c').val();  
            
            if(val_textura =='' )  
            {  
           $('#msg_error_edit').html("El valor de la textura está vacío");  
            }else if(val_ph == ''){
            $('#msg_error_edit').html("Valor PH vacío");           
            }
            else if(val_ce == '')
            {
            $('#msg_error_edit').html("Valor CE vacío");
            }else if (val_cice == '')
            {
            $('#msg_error_edit').html("Valor CICE vacío");
            }else if (val_salinidad == '')
            {
            $('#msg_error_edit').html("Valor Salinidad vacío");    
            }else  
               {  
                   $('#msg_error_edit').html('');  
                   $.ajax({  
                         url:"../../control/cultivos/editar_variables_importantes.php",  
                         method:"POST",  
                         data:{id_cultivo_req:id_cultivo_req,val_textura:val_textura,val_ph:val_ph,val_ce:val_ce,val_cice:val_cice,val_salinidad:val_salinidad
                         },  
                     success:function(data){  
                     //$("form").trigger("reset");  
                    $('#msg_exito_edit').fadeIn().html(data);  
                         $("#form-vars").get(0).reset()
                      setTimeout(function(){  
                     $('#msg_exito_edit').fadeOut("Slow");  
                          }, 100000);                                  

                         }
                    });  
               }           
      });             
    
	//Función que trae los datos 
	$(document).on('click', '.cargar_elementos', function(){ 
		var id_cultivo = $(this).attr('id');
        $.ajax({
            url:"../../control/cultivos/seleccionar_req_nut_cult.php",
            method:"POST",
            dataType:"json",
            data:{id_cultivo:id_cultivo},
            success:function(data)
            {
                var html = '';
                for(var count = 0; count < data.length; count++)
                {
               html += '<tr>';
               html += '<td> <div class="switch"><label>No<input type="checkbox" id="'+data[count].id_req+'" data-valor_req="'+data[count].valor_req+'" data-descripcion_req="'+data[count].descripcion_req+'" data-etiqueta="'+data[count].etiqueta+'" data-nombre_req="'+data[count].nombre_req+'" data-id_cultivo="'+data[count].id_cultivo+'" class="check_box"  /><span class="lever"></span>Si</label></div></td>';
               html += '<td>'+data[count].valor_req+'</td>';
               html += '<td>'+data[count].descripcion_req+'</td>';
               html += '<td>'+data[count].etiqueta+'</td>';
               html += '<td>'+data[count].nombre_req+'</td>';
               html += '<td>'+data[count].id_cultivo+'</td></tr>';
                }
                $('#elementos_cul').html(html);
				 $('.collapsible').collapsible( //Abrir el collapsible para ver los elementos
                 instance.open(3)
                 ); 
            }
			
        });
	
	});
	
	
      $(document).on('click', '.check_box', function(){
        var html = '';
        if(this.checked)
        {	
            html = '<td><div class="switch"><label>No<input type="checkbox" id="'+$(this).attr('id')+'" data-valor_req="'+$(this).data('valor_req')+'" data-descripcion_req="'+$(this).data('descripcion_req')+'" data-etiqueta="'+$(this).data('etiqueta')+'" data-nombre_req="'+$(this).data('nombre_req')+'" data-id_cultivo="'+$(this).data('id_cultivo')+'" class="check_box" checked /><span class="lever"></span>Si</label></div></td>';
            html += '<td><input type="text" name="valor_req[]" class="form-control" value="'+$(this).data("valor_req")+'" /></td>';
            html += '<td><input type="text" name="descripcion_req[]" class="form-control" value="'+$(this).data("descripcion_req")+'" /></td>';
            html += '<td><select name="etiqueta[]" id="etiqueta_'+$(this).attr('id')+'" class="form-control browser-default"><option value="red" class="red">Rojo</option><option value="teal" class="teal">Teal</option><option value="green" class="green">Verde</option><option value="indigo" class="indigo">Indigo</option><option value="amber" class="amber">Amber</option><option value="pink" class="pink">Rosa</option><option value="purple" class="purple">Purpura</option><option value="blue" class="blue">Azul</option><option value="orange" class="orange">Naranja</option></select></td>';
            html += '<td><input type="text" name="nombre_req[]" class="form-control" value="'+$(this).data("nombre_req")+'" /></td>';
            html += '<td><input type="text" name="id_cultivo[]" class="form-control" value="'+$(this).data("id_cultivo")+'" /><input type="hidden" name="hidden_id[]" value="'+$(this).attr('id')+'" /></td>';
        }
        else
        {
            html = '<td><div class="switch"><label>No<input type="checkbox" id="'+$(this).attr('id')+'" data-valor_req="'+$(this).data('valor_req')+'" data-descripcion_req="'+$(this).data('descripcion_req')+'" data-etiqueta="'+$(this).data('etiqueta')+'" data-nombre_req="'+$(this).data('nombre_req')+'" data-id_cultivo="'+$(this).data('id_cultivo')+'" class="check_box" /><span class="lever"></span>Si</label></div></td>';
            html += '<td>'+$(this).data('valor_req')+'</td>';
            html += '<td>'+$(this).data('descripcion_req')+'</td>';
            html += '<td>'+$(this).data('etiqueta')+'</td>';
            html += '<td>'+$(this).data('nombre_req')+'</td>';
            html += '<td>'+$(this).data('id_cultivo')+'</td>';            
        }
        $(this).closest('tr').html(html);
        $('#etiqueta_'+$(this).attr('id')+'').val($(this).data('etiqueta'));
    });

    
});
$(document).ready(function(){
    // :inicio: esta funcion prepara el formulario para insertar una finca
     $('#add_button').click(function(){
      $('#form_fincas')[0].reset();
      $('.modal-title').text("Agregar fincas");
      $('#accion').val("Agregar");
      $('#operacion').val("Agregar");
    // :fin:
     });

    /*/ :inicio: Este segmento lista todas las finas tráves del archivo...
        url:"../../control/fincas/listar_todas_fincas.php",
    /*/
     var dataTable = $('#datos_fincas').DataTable({
      "processing":true,
      "serverSide":true,
      "order":[],
      "ajax":{
       url:"../../control/fincas/listar_todas_fincas.php",
       type:"POST"
      },
      "columnDefs":[
       {
        "targets":[0, 2, 3],
        "orderable":false,
       },
      ],

     });
    //:fin:
    
    // :inicio: esta función permite guardar una finca en la base de datos  a través del archivo                url:"../../control/fincas/insert_update_panel_fincas.php",  
     $(document).on('submit', '#form_fincas', function(event){
      event.preventDefault();
      var Nombre_finca = $('#Nombre_finca').val();
      var Descripcion_finca = $('#Descripcion_finca').val();
      var Departamento_finca = $('#Departamento_finca').val();
      var Municipio_finca = $('#Municipio_finca').val();
      var Vereda_finca = $('#Vereda_finca').val();
      var Latitud_finca = $('#Latitud_finca').val();
      var Longitud_finca = $('#Longitud_finca').val();
      var Viacc_finca = $('#Viacc_finca').val();
      var Int_familia_finca = $('#Int_familia_finca').val();
      var Jovenes_1518 = $('#Jovenes_1518').val();
      var Propietario = $('#Propietario').val();

      if(Nombre_finca != '' && Descripcion_finca != '' && Departamento_finca != ''&& Municipio_finca != '' && Vereda_finca != ''&& Latitud_finca != ''&& Longitud_finca != ''&& Viacc_finca != ''&& Int_familia_finca != ''&& Jovenes_1518 != ''&& Propietario != null && Propietario != 0 )
      {
       $.ajax({
        url:"../../control/fincas/insert_update_panel_fincas.php",
        method:'POST',
        data:new FormData(this),
        contentType:false,
        processData:false,
        success:function(data)
        {
         alert(data);
         $('#form_fincas')[0].reset();
         $('#fincas_modal').modal('close');
         dataTable.ajax.reload();
        }
       });
      }
      else
      {
       alert("Todos los campos son obligatorios");
      }
     });
        // :fin:
    
    //:inicio: esta función permite actualizar una finca  a través del archivo  url:"../../control/fincas/traer_de_auno_fincas.php",
     $(document).on('click', '.update', function(){
      var id_finca = $(this).attr("id");
      $.ajax({
       url:"../../control/fincas/traer_de_auno_fincas.php",
       method:"POST",
       data:{id_finca:id_finca},
       dataType:"json",
       success:function(data)
       {
        $('#fincas_modal').modal('open');
        $('#Nombre_finca').val(data.Nombre_finca);
        $('#Descripcion_finca').val(data.Descripcion_finca);
        $('#Departamento_finca').val(data.Departamento_finca);
        $('#Municipio_finca').val(data.Municipio_finca);
        $('#Vereda_finca').val(data.Vereda_finca);
        $('#Latitud_finca').val(data.Latitud_finca);
        $('#Longitud_finca').val(data.Longitud_finca);
        $('#Viacc_finca').val(data.Viacc_finca);
        $('#Int_familia_finca').val(data.Int_familia_finca);
        $('#Jovenes_1518').val(data.Jovenes_1518);
        $('#Propietario').val(data.Propietario);
        $('.modal-title').text("Editar fincas");
        $('#id_finca').val(id_finca);
        $('#accion').val("Editar");
        $('#operacion').val("Editar");
       }
      })
     });
    // :fin:
     $(document).on('click', '.delete', function(){
      var id_finca = $(this).attr("id");
      if(confirm("Seguro de eliminar esta finca?"))
      {
       $.ajax({
        url:"../../control/fincas/delete.php",
        method:"POST",
        data:{id_finca:id_finca},
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


                     
    //:inicio: ESTE CÓDIGO ME PERMITE SELECCIONAR DEPARTAMENTO>MUNICIPIO>FINCA  PARA INSERTAR LA UBICACION DE LA FINCA
  $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "Departamento_finca")
   {
    result = 'Municipio_finca';
   }
   else
   {
    result = 'Vereda_finca';
   }
   $.ajax({
    url:"../../control/fincas/select_ubicacion_finca.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
    // :FIN:
                
    //:INICIO: SELECIONA EL ID DE LA FINCA LO ENVIA AL INPUT PARA PASARLO AL ARCHIVO QUE OBTENDRÁ LOS DATOS Y AGREGAR UN POLIGONO
     $(document).on('click', '.poligon_add', function(){
     var var_request = $(this).attr("id");  
     var id_finc_poligon = $("#id_finca_add_poligon").val(var_request); //asignarle al input el id de la finca para que lo tome como consulta hacia la db                
      $('#poligon_add').modal('open');  //abrir el  modal para ejecutar las operaciones
      }); 
    //:FIN:
    
  //:INICIO: SELECIONA EL ID DE LA FINCA LO ENVIA AL INPUT PARA PASARLO AL ARCHIVO QUE OBTENDRÁ LOS DATOS PARA REALIZAR LA CONSULTA Y VER LOS ARCHIVOS DE LA FINCA
     $(document).on('click', '.ver_archivos', function(){
     var var_request_archivos = $(this).attr("id");   //varible que rrecoge la info del ID
     var id_finc_id = $("#id_finca_add_id").val(var_request_archivos); //asignarle al input el id de la finca para que lo tome como consulta hacia la db                
      // $('#poligon_add').modal('open');  //abrir el  modal para ejecutar las operaciones
      }); 
    //:FIN:
    
    
    //:INICIO: AGREGARLE EL POLIGONO O IFRAME DE LA FINCA EN MYSQL CON LA URL
	   $(document).on('click', '.g_poligon', function(){  
           var var_finca = $("#id_finca_add_poligon").val();
           var identificador = $("#identificador").val();
           var iframe_finca = $("#url_poligon").val();
           if(var_finca == ''|| identificador == '' || iframe_finca == '')  
           {
            alert("Todos los campos son obligatorios");
           }else{
                     $.ajax({  
                     url:"../../control/fincas/asigna_poligono_finca.php",  
                     method:"POST",  
                     data:{var_finca:var_finca,identificador:identificador,iframe_finca:iframe_finca},  
                     success:function(data){  
                          alert(data); // envia la
                        $("#identificador").val("");//limpiar el formulario
                        $("#url_poligon").val(""); //limpiar el formulario
                        $('#poligon_add').modal('close'); //cerrar el modal
                     }  
                });
           }
                
      }); 
    //::FIN
    
    //:INICIO: VER POLIGONOS ASIGNADOS A LA FINCA
    $(document).on('click', '.ver_poligonos', function(){  
            var val_finca = $(this).attr("id");  
           if(val_finca != '')  
           {  
                $.ajax({  
                     url:"../../control/fincas/traer_poligonos_fincas.php",  
                     method:"POST",  
                     data:{val_finca:val_finca},  
                     success:function(data){  
                        $('#datos_poligonos').html(data);
                        $('#ver_poligonos').modal('open');                        
                     }  
                });  
           }            
      });                
   //:FIN:
    
    // :inicio: enviando la ulr de los poligonos de la base de datos por parametro al iframe de arcgis
     $(document).on('click', '.identifica_pol', function(){
     var var_src = $(this).attr("id"); 
     $("#map_arcgis").attr("src", var_src); // el iframe que rrecoge la url del mapa y lo carga
     $('ul.tabs').tabs('select_tab', 'ver_mapas'); // parametro que me selecciona lal siguiente pestaña donde se ven los mapas
      });         
    //:fin:            
    
    //:inicio: esta funcion permite guardar un archivo shp,kml,kmz,zip  a la finca
    $('#g_shp_file_g_poligon').on('click', function() {
    var file_data = $('#shp_file_poligon').prop('files')[0];   
    var form_data = new FormData();   
    var id_finca = $("#id_finca_add_poligon").val(); 
    var extension = $('#shp_file_poligon').val().split('.').pop().toLowerCase();
    var max_tamano = 8388608;    //8MB
		if(extension != '')
		{
			if(jQuery.inArray(extension, ['shp','kml','kmz','zip']) == -1)
			{
				alert("Archivo no invalido | SHP, KML, KMZ, ZIP");
				$('#shp_file_poligon').val('');
				return false;
			}else if(file_data.size > max_tamano){
                alert("El tamaño del archivo es demasiado grande | MAX 8MB");
                return false;
            }
		}	
        
    form_data.append('file', file_data); // envia por parametro la varible del input file de la imagen a php
    form_data.append('id_finca', id_finca); // envia por parametro la varible del input file de la imagen a php
    // alert(form_data);                             
    $.ajax({
        url: '../../control/fincas/carga_shp.php', // point to server-side PHP script 
        dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data:form_data,
        type: 'post',
        beforeSend: function() {
         $('#carga_controler').html("<img src='../../control/fincas/assets/loading_files.gif' width='20px'/>");
            },
        success: function(data){
            alert(data); // display response from the PHP script, if any
            $('#carga_controler').html("");
        }
     });
});
    
    //:fin:
    
    //:INICIO: Esta funcion permite ver los archivos que tiene la finca
    $(document).on('click', '.ver_archivos_finca', function(){  
            var val_fincaf = $("#id_finca_add_id").val(); // rrecoger el id de la finca para seguir con la instruccion
           if(val_fincaf == '')  
           {  
               alert("No hay un identificador valido");
           }else{
                     $.ajax({  
                     url:"../../control/fincas/traer_archivos_fincas.php",  
                     method:"POST",  
                     data:{val_fincaf:val_fincaf},  
                     success:function(data){  
                        $('#datos_archivos_fincas').html(data);        
                     }  
                });    
           }            
      });       
      //:FIN:
    
    //:INICIO: ESTA FUNCION PERMITE ELIMINAR LOS ARCHIVOS QUE ESTÁN RELACIONADOS CON LAS FINCAS
    $(document).on('click', '.elimin_archivo_f', function(){
      var id_archivo = $(this).attr("id");
      if(confirm("Seguro de eliminar este archivo?"))
      {
       $.ajax({
        url:"../../control/fincas/eliminar_archivo_finca.php",
        method:"POST",
        data:{id_archivo:id_archivo},
        success:function(data)
        {
         alert(data);
         $('.collapsible').collapsible('close', 0);

        }
       });
      }
      else
      {
       return false; 
      }
     });    
    //:FIN:  
    
    //:INICIO: ESTA FUNCION PERMITE ELIMINAR LOS URL DE ARCGIS QUE ESTÁN RELACIONADOS CON LAS FINCAS
    $(document).on('click', '.elimin_poligon_f', function(){
      var id_files = $(this).attr("id");
      if(confirm("Seguro de eliminar este enlace?"))
      {
       $.ajax({
        url:"../../control/fincas/eliminar_poligono_finca.php",
        method:"POST",
        data:{id_files:id_files},
        success:function(data)
        {
         alert(data);
          $('.collapsible').collapsible('close', 0);
        }
       });
      }
      else
      {
       return false; 
      }
     });
      //:FIN:

    // :INICIO: ESTA FUNCION PERMITE SELECCIONAR SIEMBRAS PARA RELACIONARLAS A UNA FINCA
    $(document).on('click', '.siembra_add', function(){  
            var var_request = $(this).attr("id");  
            $('#finca_val').val(var_request);
           if(var_request != '')  
           {  
                $.ajax({  
                     url:"../../control/fincas/traer_siembras.php",  
                     method:"POST",  
                     data:{var_request:var_request},  
                     success:function(data){  
                          $('#mostrar_siembras').html(data);  
                          $('#asig_siembras').modal('open');  
                     }  
                });  
           }
      });  
    //:FIN:    
    
        //:INICIO: ESTA FUNCION PERMITE RELACIONAR ESTA SIEMBRA A LA FINCA ACTUAL
          $(document).on('click', '.asignar_siembras', function(){  
           var val_siembra = $(this).attr("id");  
            var finca_val = $('#finca_val').val(); 
            if(confirm("Seguro de relacionar esta siembra?"))
                {
              if(val_siembra != '' || finca_val != '')  
                  {  
                    $.ajax({  
                     url:"../../control/fincas/asigna_siembras_finca.php",  
                     method:"POST",  
                     data:{finca_val:finca_val,val_siembra:val_siembra},  
                     success:function(data){  
                          alert(data);
                     }  
                });  
           }     
            }
            
      }); 
        //:FIN:
    
    
        //:: ESTA FUNCION PERMITE VER CULTIVOS ASIGNADOS A LA SIEMBRA ACTUAL
        $(document).on('click', '.ver_siem_asignadas', function(){  
            var val_finca = $(this).attr("id");  
            var id_siembra_rel = $("#id_finca_rel").val(val_finca);
           if(val_finca != '')  
           {  
                $.ajax({  
                     url:"../../control/fincas/traer_siembras_rel_fincas.php",  
                     method:"POST",  
                     data:{val_finca:val_finca},  
                     success:function(data){  
                        $('#mostrar_siembras_relac').html(data);
                        $('#list_siembras_rel').modal('open');                        
                     }  
                });  
           }            
      }); 
        //:FIN:
    
     //:INICIO: ESTA FUNCION PERMITE ELIMINAR LAS SIEMBRAS RELACIONADAS CON CULTIVOS
     $(document).on('click', '.eliminar_siembras', function(){
     var val_s = $(this).attr("id");  
     var id_finca_rel = $('#id_finca_rel').val();
      if(confirm("Seguro de eliminar esta relacion?"))
      {
       $.ajax({
        url:"../../control/fincas/eliminar_siembras_relacionadas.php",  
        method:"POST",
        data:{val_s:val_s,id_finca_rel:id_finca_rel},  
        success:function(data)
        {
         alert(data);
         $('#list_siembras_rel').modal('close');                            
        }
       });
      }
      else
      {
       return false; 
      }
     });  
        //:FIN:
}); // FIN DEL $.(DOCUMENT).READY(FUNCTION(){});
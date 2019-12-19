$(document).ready(function(){
    //:inicio:esta función prepara el formulario para insertar una nueva novedad
     $('#add_button').click(function(){
      $('#form_Novedades')[0].reset();
      $('.modal-title').text("Agregar novedades");
      $('#accion').val("Agregar");
      $('#operacion').val("Agregar");

     });
    //:fin:

    //:inicio: esta novedad permite cargar todas las novedades 
     var dataTable = $('#datos_novedades').DataTable({
      "processing":true,
      "serverSide":true,
      "order":[],
      "ajax":{
       url:"../../control/novedades/listar_todas_novedades.php",
       type:"POST"
      },
                 dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 5 ]
                }
            },
            'colvis'
        ],
      "columnDefs":[
       {
        "targets":[0, 2, 3],
        "orderable":false,
       },
      ],

     });
    //:fin:

    //:inicio:esta función me permite insertar una nueva novedad en la base de datos
     $(document).on('submit', '#form_Novedades', function(event){
      event.preventDefault();
      var siembra_id = $('#siembra_id').val();
      var camellon_nov = $('#camellon_nov').val();
      var tipnov_nov = $('#tipnov_nov').val();
      var fecha_nov = $('#fecha_nov').val();
      var tiempo_nov = $('#tiempo_nov').val();
      var costopro_nov = $('#costopro_nov').val();
      var costoman_nov = $('#costoman_nov').val();
      var operario_nov = $('#operario_nov').val();
      var estado_nov = $('#estado_nov').val();
      var producto_id = $('#producto_id').val();
      var dosis_nov = $('#dosis_nov').val();
      var cattoxica_nov = $('#cattoxica_nov').val();

      if(siembra_id != '' && camellon_nov != '' && fecha_nov != ''&& tiempo_nov != '' && costopro_nov != ''&& costoman_nov != ''&& operario_nov != ''&& estado_nov != ''&& producto_id != ''&& dosis_nov != ''&& cattoxica_nov != null&& tipnov_nov != null)
      {
       $.ajax({
        url:"../../control/novedades/insert_novedades.php",
        method:'POST',
        data:new FormData(this),
        contentType:false,
        processData:false,
        success:function(data)
        {
         alert(data);
         $('#form_Novedades')[0].reset();
         $('#Novedades_modal').modal('close');
         dataTable.ajax.reload();
        }
       });
      }
      else
      {
       alert("Todos los campos son obligatorios");
      }
     });
    //:fin:
    
    //:inicio: esta función permite actualizar una novedad de acuerdo a su id
     $(document).on('click', '.update', function(){
      var id_novedad = $(this).attr("id");
      $.ajax({
       url:"../../control/novedades/traer_novedad.php",
       method:"POST",
       data:{id_novedad:id_novedad},
       dataType:"json",
       success:function(data)
       {
        $('#Novedades_modal').modal('open');
        $('#tipnov_nov').val(data.tipnov_nov);
        $('#siembra_id').val(data.siembra_id);
        $('#camellon_nov').val(data.camellon_nov);
        $('#fecha_nov').val(data.fecha_nov);
        $('#tiempo_nov').val(data.tiempo_nov);
        $('#costopro_nov').val(data.costopro_nov);
        $('#costoman_nov').val(data.costoman_nov);
        $('#operario_nov').val(data.operario_nov);
        $('#estado_nov').val(data.estado_nov);
        $('#producto_id').val(data.producto_id);
        $('#dosis_nov').val(data.dosis_nov);
        $('#cattoxica_nov').val(data.cattoxica_nov);
        $('.modal-title').text("Editar novedades");
        $('#id_novedad').val(id_novedad);
        $('#accion').val("Editar");
        $('#operacion').val("Editar");
       }
      })
     });
    //:fin:

    //:inicio: esta función permite eliminar una novedad de acuerdo a su id
     $(document).on('click', '.delete', function(){
      var id_novedad = $(this).attr("id");
      if(confirm("Seguro de eliminar esta novedad?"))
      {
       $.ajax({
        url:"../../control/novedades/delete.php",
        method:"POST",
        data:{id_novedad:id_novedad},
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

 
    //:inicio: esta función permite ver el detalle de las  novedades de acuerdo a su id
    $(document).on('click', '.ver_novedad', function(){  
            var id_novedad = $(this).attr("id");  
           if(id_novedad != '')  
           {  
                $.ajax({  
                     url:"../../control/novedades/traer_novedad_view.php",  
                     method:"POST",  
                     data:{id_novedad:id_novedad},  
                     success:function(data){  
                        $('#novedad_data').html(data);
                        $('#ver_novedades').modal('open');                        
                     }  
                });  
           }            
      });                
   //:fin:
  
 
 
}); // FIN DEL $.(DOCUMENT).READY(FUNCTION(){});
    $(document).ready(function(){
     $('#add_button').click(function(){
      $('#form_elementos')[0].reset();
      $('.modal-title').text("Agregar Fertilizante");
      $('#accion').val("Agregar");
      $('#operacion').val("Agregar");

     });

     var dataTable = $('#datos_fertilizantes').DataTable({
      "processing":true,
      "serverSide":true,
      "order":[],
      "ajax":{
       url:"../../control/fertilizantes/pf-listar_todos_fertilizantes.php",
       type:"POST"
      },
      "columnDefs":[
       {
        "targets":[0, 2, 3],
        "orderable":false,
       },
      ],

     });
        
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
                     }  
                });  
           }   
     
      });
	//Carga los detalles de los fertilizantes [fin]
        
        /*/
     $(document).on('submit', '#form_elementos', function(event){
      event.preventDefault();
      var Nombre_fertilizante = $('#Nombre_fertilizante').val();
      var Tipo_fertilizante = $('#Tipo_fertilizante').val();
      var Estado_fertilizante = $('#Estado_fertilizante').val();
      var Fabricante_fertilizante = $('#Fabricante_fertilizante').val();

      if(Nombre_fertilizante != '' && Tipo_fertilizante != '' && Estado_fertilizante != ''&& Fabricante_fertilizante != '')
      {
       $.ajax({
        url:"../../control/fertilizantes/insert_update_panel_fertilizantes.php",
        method:'POST',
        data:new FormData(this),
        contentType:false,
        processData:false,
        success:function(data)
        {
         alert(data);
         $('#form_elementos')[0].reset();
         $('#elementos_modal').modal('close');
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
      var id_fertilizante = $(this).attr("id");
      $.ajax({
       url:"../../control/fertilizantes/traer_de_auno_fertilizantes.php",
       method:"POST",
       data:{id_fertilizante:id_fertilizante},
       dataType:"json",
       success:function(data)
       {
        $('#elementos_modal').modal('open');
        $('#Nombre_fertilizante').val(data.Nombre_fertilizante);
        $('#Tipo_fertilizante').val(data.Tipo_fertilizante);
        $('#Estado_fertilizante').val(data.Estado_fertilizante);
        $('#Fabricante_fertilizante').val(data.Fabricante_fertilizante);
        $('.modal-title').text("Editar Fertilizante");
        $('#id_fertilizante').val(id_fertilizante);
        $('#accion').val("Editar");
        $('#operacion').val("Editar");
       }
      })
     });

     $(document).on('click', '.delete', function(){
      var id_fertilizante = $(this).attr("id");
      if(confirm("Seguro de eliminar este analisis?"))
      {
       $.ajax({
        url:"../../control/fertilizantes/delete.php",
        method:"POST",
        data:{id_fertilizante:id_fertilizante},
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

    /*/
    });
                 
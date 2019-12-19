    $(document).ready(function(){
    //:INICIO: ESTA FUNCION PERMITE PREPARAR EL FORMUARIO PARA INSERTAR UN NUEVO FERTILIZANTE    
     $('#add_button').click(function(){
      $('#form_elementos')[0].reset();
      $('.modal-title').text("Agregar Fertilizante");
      $('#accion').val("Agregar");
      $('#operacion').val("Agregar");

     });
    //:FIN:
        
    //:INICIO: PERMITE TRAER TODOS LOS FERTILIZANTES 
     var dataTable = $('#datos_fertilizantes').DataTable({
      "processing":true,
      "serverSide":true,
      "order":[],
      "ajax":{
       url:"../../control/fertilizantes/listar_todos_fertilizantes.php",
       type:"POST"
      },
      "columnDefs":[
       {
        "targets":[0, 2, 3],
        "orderable":false,
       },
      ],

     });
    //:FIN:
        
    //:INICIO: ESTA FUNCION PERMITE INSERTAR LOS FERTILIZANTES EN LA BASE DE DATOS
     $(document).on('submit', '#form_elementos', function(event){
      event.preventDefault();
      var Nombre_fertilizante = $('#Nombre_fertilizante').val();
      var Tipo_fertilizante = $('#Tipo_fertilizante').val();
      var Estado_fertilizante = $('#Estado_fertilizante').val();
      var Fabricante_fertilizante = $('#Fabricante_fertilizante').val();
      var Composicion_garant = $('#Composicion_garant').val();
      var Composicion_fertilizante = $('#Composicion_fertilizante').val();
      var Valor_fertilizante = $('#Valor_fertilizante').val();
      var Status_fertilizante = $('#Status_fertilizante').val();

      if(Nombre_fertilizante != '' && Tipo_fertilizante != '' && Estado_fertilizante != ''&& Fabricante_fertilizante != ''&& Composicion_garant != ''&& Composicion_fertilizante != '' && Valor_fertilizante != ''&& Status_fertilizante != '')
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
    //:FIN:    
        
    //:inicio: validar el campo para que solo agregue números para el costos del fertilizante
      $( "#Valor_fertilizante" ).keyup(function() {
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
          })
          .keyup();
    //:fin:    
        
    //:INICIO:  ESTA FUNCION PERMITE ACTUALIZAR LOS FERTILIZANTES
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
        $('#Composicion_garant').val(data.Composicion_garant);
        $('#Composicion_fertilizante').val(data.Composicion_fertilizante);
        $('#Valor_fertilizante').val(data.Valor_fertilizante);
        $('#Status_fertilizante').val(data.Status_fertilizante);
        $('.modal-title').text("Editar Fertilizante");
        $('#id_fertilizante').val(id_fertilizante);
        $('#accion').val("Editar");
        $('#operacion').val("Editar");
       }
      })
     });
    //:FIN:
        
     // :INICIO: ESTA FUNCION PERMITE ELIMINAR ELIMINAR LOS FERTILIZANTES
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
    //:FIN:    

    });
                 
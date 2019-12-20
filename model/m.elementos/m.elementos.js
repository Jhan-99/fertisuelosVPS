$(document).ready(function(){
    //:INICIO: PERMITE PREPARAR EL FORMUARIO PARA  INSERTAR UN ELEMENTO DEL SUELO
     $('#add_button').click(function(){
      $('#form_elementos')[0].reset();
      $('.modal-title').text("Agregar elemento");
      $('#accion').val("Agregar");
      $('#operacion').val("Agregar");
    //:FIN:
     });
    //:FIN:
    
    //:INICIO: ESTA FUNCIÓN PERMITE CARGAR TODOS LOS ELEMENTOS EN LA TABLA
     var dataTable = $('#datos_elementos').DataTable({
      "processing":true,
      "serverSide":true,
      "order":[],
      "ajax":{
       url:"../../control/elementos/listar_todos_elementos.php",
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
    
    //:INICIO: ESTA FUNCION PERMITE INSERTAR LOS ELEMENTOS DEL SUELO
     $(document).on('submit', '#form_elementos', function(event){
      event.preventDefault();
      var Nombre_elemento = $('#Nombre_elemento').val();
      var Descripcion_elemento = $('#Descripcion_elemento').val();
      var Categoria_elemento = $('#Categoria_elemento').val();

      if(Nombre_elemento != '' && Descripcion_elemento != '' && Categoria_elemento != '')
      {
       $.ajax({
        url:"../../control/elementos/insert_update_panel_elementos.php",
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
    
    //:INICIO: ESTA FUNCION PERMITE ACTUALIZAR LOS ELEMENTOS DEL SUELO
     $(document).on('click', '.update', function(){
      var id_elemento = $(this).attr("id");
      $.ajax({
       url:"../../control/elementos/traer_de_auno_elementos.php",
       method:"POST",
       data:{id_elemento:id_elemento},
       dataType:"json",
       success:function(data)
       {
        $('#elementos_modal').modal('open');
        $('#Nombre_elemento').val(data.Nombre_elemento);
        $('#Descripcion_elemento').val(data.Descripcion_elemento);
        $('#Categoria_elemento').val(data.Categoria_elemento);
        $('.modal-title').text("Editar elementos");
        $('#id_elemento').val(id_elemento);
        $('#accion').val("Editar");
        $('#operacion').val("Editar");
       }
      })
     });
    //:FIN:

    //:INICIO: ESTA FUNCION PERMITE ELIMINAR LOS ELEMENTOS DEL SUELO
     $(document).on('click', '.delete', function(){
      var id_elemento = $(this).attr("id");
      if(confirm("Seguro de eliminar este elemento?"))
      {
       $.ajax({
        url:"../../control/elementos/delete.php",
        method:"POST",
        data:{id_elemento:id_elemento},
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
 $(document).ready(function(){
     $('#add_button').click(function(){
      $('#form_elementos')[0].reset();
      $('.modal-title').text("Agregar elemento");
      $('#accion').val("Agregar");
      $('#operacion').val("Agregar");

     });

     var dataTable = $('#datos_anafoliares').DataTable({
      "processing":true,
      "serverSide":true,
      "order":[],
      "ajax":{
       url:"../../control/analisis_foliar/listar_todos_anafoliares.php",
       type:"POST"
      },
      "columnDefs":[
       {
        "targets":[0, 2, 3],
        "orderable":false,
       },
      ],

     });

     $(document).on('submit', '#form_elementos', function(event){
      event.preventDefault();
      var Nombre_programa = $('#Nombre_programa').val();
      var Propietario = $('#Propietario').val();
      var Asistente_tecnico = $('#Asistente_tecnico').val();
      var Fecha_muestreo = $('#Fecha_muestreo').val();
      var Fecha_recepcion = $('#Fecha_recepcion').val();
      var Momento_muestreo = $('#Momento_muestreo').val();
      var Siembra_id = $('#Siembra_id').val();
      var Departamento = $('#Departamento').val();
      var Municipio = $('#Municipio').val();
      var Finca = $('#Finca').val();

      if(Nombre_programa != '' && Propietario != '' && Asistente_tecnico != ''&& Fecha_muestreo != ''
         && Fecha_recepcion != '' && Momento_muestreo != ''&& Departamento != ''&& Municipio != ''&& Finca != ''
         && Siembra_id != '')
      {
       $.ajax({
        url:"../../control/analisis_foliar/insert_update_panel.php",
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
      var id_cabecera = $(this).attr("id");
                 
      $.ajax({
       url:"../../control/analisis_foliar/traer_de_auno_anafoliares.php",
       method:"POST",
       data:{id_cabecera:id_cabecera},
       dataType:"json",
       success:function(data)
       {
        $('#elementos_modal').modal('open');
        $('#Nombre_programa').val(data.Nombre_programa);
        $('#Propietario').val(data.Propietario);
        $('#Asistente_tecnico').val(data.Asistente_tecnico);
        $('#Fecha_muestreo').val(data.Fecha_muestreo);
        $('#Fecha_recepcion').val(data.Fecha_recepcion);
        $('#Momento_muestreo').val(data.Momento_muestreo);
        $('#Siembra_id').val(data.Siembra_id);
        $('#Departamento').val(data.Departamento);
        $('#Municipio').val(data.Municipio);
        $('#Finca').val(data.Finca);
        $('.modal-title').text("Editar análisis foliar");
        $('#id_cabecera').val(id_cabecera);
        $('#accion').val("Editar");
        $('#operacion').val("Editar");
       }
      })
         
     });

     $(document).on('click', '.delete', function(){
      var id_cabecera = $(this).attr("id");
      if(confirm("Seguro de eliminar este analisis?"))
      {
       $.ajax({
        url:"../../control/analisis_foliar/delete.php",
        method:"POST",
        data:{id_cabecera:id_cabecera},
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


        //
        $(document).on('click', '.ver_vars_ana', function(){  
           var val_cabecera = $(this).attr("id");  
           if(val_cabecera != '')  
           {  
                $.ajax({  
                     url:"../../control/analisis_foliar/select_variables_foliar.php",  
                     method:"POST",  
                     data:{val_cabecera:val_cabecera},  
                     success:function(data){  
                          $('#carga_datos_var_suelo').html(data);  
                          $('#variables_suelo').modal('open');  
                     }  
                });  
           } 
      });           
             
        //ESTE CÓDIGO ME PERMITE CARGAR 
        $(document).on('click', '.carga_elementos', function(){  
           var val_cabecera_elementos = $(this).attr("id");  
           if(val_cabecera_elementos != '')  
           {  
                $.ajax({  
                     url:"../../control/analisis_foliar/select_elementos_foliar.php",  
                     method:"POST",  
                     data:{val_cabecera_elementos:val_cabecera_elementos},  
                     success:function(data){  
                          $('#cargar_elementos').html(data);
                                $('.collapsible').collapsible( //Abrir el collapsible para ver los elementos
                                instance.open(3)
                                );  
                     }  
                });  
           }            
      });  
     //        
     
     
     //EL CÓDIGO SIGUIENTE ME PERMITE EDITAR LAS VARIBLES DE LOS ELEMENTOS DEL ANÁLISIS FOLIAR \\
             //EDITA LAS VARIBLES MÁS SIGNIFICATIVAS DEL TEJIDO FOLIARR
            $(document).on('click', '.e_vars_foliar', function(){ 
               var id_vars = $('#id_vars_ana').val();  
               var clorofila = $('#clorofila').val();  
               var ph   = $('#ph').val(); 
               var ce   = $('#ce').val();  
               var ndvi = $('#ndvi').val();  
               var nitrogeno = $('#nitro').val();  
                //--------------------//
               var estado_feno = $('#estado_feno').val();
               var sat_hum = $('#sat_hum').val();
        
               if(ph == '' || ce == ''|| ndvi == ''|| nitrogeno == '' || estado_feno ==''|| sat_hum ==''
                  || clorofila =='')  
               {  
               $('#msg_error_edit').html("Todos los campos son obligatorios");  
               }  
               else  
               {   
                $('#msg_error_edit').html('');  
                    $.ajax({  
                         url:"../../control/analisis_foliar/edita_vars_panel_foliar.php",  
                         method:"POST",  
                         data:{id_vars:id_vars,ph:ph,ce:ce,ndvi:ndvi,nitrogeno:nitrogeno,nitrogeno:nitrogeno,estado_feno:estado_feno,clorofila:clorofila,
                         sat_hum:sat_hum
                         },  
                         success:function(data){  
                              //$("form").trigger("reset");  
                              alert(data);
 
                         }  
                    });   
           }    
                             
                }); 
     
     $(document).on('click', '.guarda_elemento', function(){  
         var val_elemento_id = $(this).attr("id"); 
         var NITROGENO = $("#NITROGENO").val();
         var FOSFORO =$("#FOSFORO").val();
         var CALCIO =$("#CALCIO").val(); 
         var MAGNECIO =$("#MAGNECIO").val();
         var POTASIO =$("#POTASIO").val();
         var SODIO =$("#SODIO").val();
         var AZUFRE =$("#AZUFRE").val();
         var MANGANESO =$("#MANGANESO").val();
         var COBRE =$("#COBRE").val();
         var ZINC =$("#ZINC").val();
         var HIERRO =$("#HIERRO").val();
         
         alert("El id es:" +" "+ val_elemento_id);
      }); 
     
     
                  //este código me permite cargar el id del analisis, además desde aquí se ejecutarán todas las funciones
             //que subirán multiples archivos para los análisis de los suelos
             $(document).on('click', '.subir_archivo', function(){  
             $('#ana_suelo_archivos').modal('open');  
             var cabecera_to_file = $(this).attr("id");
             var file_cabecera = $("#id_cabecera_suelos").val(cabecera_to_file); 
                 load_image_data();
                 function load_image_data()
                 {
                  var id_ana_carga = document.getElementById("id_cabecera_suelos").value; // variable que recoge el id del análisis para 
                     //cargar los archivos 
                  $.ajax({
                   url:"../../control/analisis_suelo/traer_archivos_ana_suelo.php",
                   method:"POST",
                   data: {id_ana_carga:id_ana_carga},
                   success:function(data)
                   {
                    $('#tabla_archivos').html(data);
                   }
                  });
                 } 

             });   
     
     
    }); //Cierre de la preparación del documento.  $(document).ready(function())   
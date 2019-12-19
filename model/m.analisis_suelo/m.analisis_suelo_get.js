//este archivo me trae todos los análisis de suelos y sus interpretaciones en el panel de administración de análisis de suelos  el cual se encuentra en app/analisis-suelo/v.analisis_suelo_get.php
$(document).ready(function(){
     
     $('#add_button').click(function(){
      $('.modal-title').text("Agregar elemento");
      $('#accion').val("Agregar");
      $('#operacion').val("Agregar");

     });

    //:inicio: esta función permite traer todos los análisis de suelos para poder ser administrados, cambiar información respecto a las variables de suelo, elementos y más
     var dataTable = $('#datos_anasuelos').DataTable({
      "processing":true,
      "serverSide":true,
      "order":[],
      "ajax":{
       url:"../../control/analisis_suelo/listar_todos_anasuelos.php",
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
    
    //:inicio: no
     $(document).on('submit', '#form_elementos', function(event){
      event.preventDefault();
      var Nombre_programa = $('#Nombre_programa').val();
      var Propietario = $('#Propietario').val();
      var Asistente_tecnico = $('#Asistente_tecnico').val();
      var Fecha_muestreo = $('#Fecha_muestreo').val();
      var Fecha_recepcion = $('#Fecha_recepcion').val();
      var Siembra_id = $('#Siembra_id').val();
      var Departamento = $('#Departamento').val();
      var Municipio = $('#Municipio').val();
      var Finca = $('#Finca').val();

      if(Nombre_programa != '' && Propietario != '' && Asistente_tecnico != ''&& Fecha_muestreo != ''
         && Fecha_recepcion != '' && Siembra_id != '' && Departamento != '' && Municipio != '' && Finca != '')
      {
       $.ajax({
        url:"../../control/analisis_suelo/insert_update_panel.php",
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
       alert("Por favor complete todos los campos");
      }
     });
    //:fin: no
    
    //:inicio: esta función permite traer de manera individual los análisis de suelos de acuerdo a su identificador
     $(document).on('click', '.update', function(){
      var id_cabecera = $(this).attr("id");
      $.ajax({
       url:"../../control/analisis_suelo/traer_de_auno_anasuelos.php",
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
        $('#Siembra_id').val(data.Siembra_id);
        $('#Departamento').val(data.Departamento);
        $('#Municipio').val(data.Municipio);
        $('#Finca').val(data.Finca);
        $('.modal-title').text("Editar análisis de suelo");
        $('#id_cabecera').val(id_cabecera);
        $('#accion').val("Editar");
        $('#operacion').val("Editar");
       }
      })
     });
    //:fin:
    
    //:inicio: esta función permite eliminar un análisis de suelo de acuerdo a su identificador
     $(document).on('click', '.delete', function(){
      var id_cabecera = $(this).attr("id");
      if(confirm("Seguro de eliminar este analisis?"))
      {
       $.ajax({
        url:"../../control/analisis_suelo/delete.php",
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
     //:fin:

    //:inicio: este código permite ver las variables de suelo relacionadas a una análisis de suelo
    $(document).on('click', '.ver_vars_ana', function(){  
           var val_cabecera = $(this).attr("id");  
           if(val_cabecera != '')  
           {  
                $.ajax({  
                     url:"../../control/analisis_suelo/select_variables_suelo.php",  
                     method:"POST",  
                     data:{val_cabecera:val_cabecera},  
                     success:function(data){  
                          $('#carga_datos_var_suelo').html(data);  
                          $('#variables_suelo').modal('open');  
                     }  
                });  
           } 
        

            
      });           
    //:fin:             
    
    //:INICIO:ESTE CÓDIGO ME PERMITE CARGAR LOS ELEMENTOS Y EDITARLOS
     $(document).on('click', '.carga_elementos', function(){  
           var dato = $(this).attr("id");
        function fetch_data_val() { 
            $.ajax({  
            url:"../../control/analisis_suelo/select_elementos_suelo.php",  
            method:"POST", 
            data:{dato:dato},    
            success:function(data){  
				$('#cargar_elementos').html(data);
                $('.collapsible').collapsible( //Abrir el collapsible para ver los elementos
                instance.open(3)
                    );  
            }  
        });  
        }
         fetch_data_val();  
   
    });
    //:FIN:
    
    //:inicio: Esta función permite cargar los elementos del suelo relcionados al análisis de suelo haciendo click sobre  el collapsible 
    function fetch_data()  
    {  
        var dato = $(".carga_elementos").attr("id");
        $.ajax({  
            url:"../../control/analisis_suelo/select_elementos_suelo.php",  
            method:"POST",  
            data:{dato:dato},  
            success:function(data){  
				$('#cargar_elementos').html(data);  
                $('.collapsible').collapsible( //Abrir el collapsible para ver los elementos
                        instance.open(3)
                                );  
            }  
        });  
    }
    //:fin:
    
    
    fetch_data();   //-> ejecuta la función que me consulta los elementos del suelo
    
    //:inicio: esta función permite agregar un nuevo elemento al análisis de suelo en el caso de que falte
    $(document).on('click', '#btn_add', function(){  

        var valor_resultado = $('#valor_resultado').text();  
        var nombre_elemento = $('#nombre_elemento').text();  
        var interpretacion = $('#interpretacion').text();  
        var metodo_extraccion = $('#metodo_extraccion').text();  
        var valor_anasuelo = $(".carga_elementos").attr("id");
        if(valor_resultado == '' || nombre_elemento == '' || interpretacion == ''|| metodo_extraccion == '')  
        {  
            alert("Todos los campos son obligatorios");  
            return false;  
        }  
  
        $.ajax({  
            url:"../../control/analisis_suelo/insertar_elementos_suelo.php",  
            method:"POST",  
            data:{valor_resultado:valor_resultado, nombre_elemento:nombre_elemento, interpretacion:interpretacion, metodo_extraccion:metodo_extraccion,valor_anasuelo:valor_anasuelo},  
            dataType:"text",  
            success:function(data)  
            {  
                $('#result').html(data);
                fetch_data();  
            }  
        })  
    });  
    //:fin:
    
    //:inicio: esta función permite editar los elementos de suelo recogidos en el análisis de suelo 
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"../../control/analisis_suelo/editar_elementos_suelo.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='green-text'>"+data+"</div>");
            }  
        });  
    }  
    //:fin:
    
    //:inicio: estas funciones permiten detectar un cambio en el DOM de html para editar los datos de los elementos sin necesidad de que haya un botón para hacerlo
    $(document).on('blur', '.valor_resultado', function(){  
        var id = $(this).data("id1");  
        var valor_resultado = $(this).text();  
        edit_data(id, valor_resultado, "valor_resultado");  
    });  
    $(document).on('blur', '.nombre_elemento', function(){  
        var id = $(this).data("id2");  
        var nombre_elemento = $(this).text();  
        edit_data(id,nombre_elemento, "nombre_elemento");  
    });    
    $(document).on('blur', '.interpretacion', function(){  
        var id = $(this).data("id4");  
        var interpretacion = $(this).text();  
        edit_data(id,interpretacion, "interpretacion");  
    });   
    $(document).on('blur', '.metodo_extraccion', function(){  
        var id = $(this).data("id5");  
        var metodo_extraccion = $(this).text();  
        edit_data(id,metodo_extraccion, "metodo_extraccion");  
    });  
    //:fin:
    
    //:inicio: esta funcion permite eliminar un elemento del suelo relaciondo a un análisis de suelo
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Estás seguro de eliminar este elemento?"))  
        {  
            $.ajax({  
                url:"../../control/analisis_suelo/eliminar_elementos_suelo.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
    //:fin:
        
  
   
 
 	////////////// CARGAR LOS DATOS AUTOMATICAMENTE DESPUÉS DE CADA MODIFICACIÓN
 

     
     //:INICIO:EL CÓDIGO SIGUIENTE ME PERMITE EDITAR LAS VARIBLES DE LOS ELEMENTOS DEL ANÁLISIS DEL SUELO \\
             //EDITA LAS VARIBLES MÁS SIGNIFICATIVAS DEL SUELO
        $(document).on('click', '.e_vars_suelo', function(){  
              var id_vars_ana = $('#id_vars_ana').val(); // Recoger el ID de las varibles
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
            $('#msg_error_edit').html("Valor Salinidad vacío");    
            }else  
               {  
                   $('#msg_error_edit').html('');  
                   $.ajax({  
                         url:"../../control/analisis_suelo/editar_variables_importantes.php",  
                         method:"POST",  
                         data:{id_vars_ana:id_vars_ana,val_textura:val_textura,val_ph:val_ph,val_ce:val_ce,val_cice:val_cice,val_salinidad:val_salinidad
                         },  
                     success:function(data){  
                     //$("form").trigger("reset");  
                    $('#msg_exito_edit').fadeIn().html(data);  
                      setTimeout(function(){  
                     $('#msg_exito_edit').fadeOut("Slow");  
                          }, 100000);                                  

                         }  
                    });  
               }           
      }); 
     //:FIN:
      
     
     
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
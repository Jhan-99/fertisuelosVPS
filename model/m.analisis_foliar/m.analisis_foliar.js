//!! IMPORTANTE [] ESTE DOCUMENTO ME CARGA LOS CULTIVOS, EL DEPARTAMENTO, EL MUNICIPIO, Y LAS FICAS
//!!IMPORTANTE ESTE DOCUMENTO ESTÁ SIENDO USADO POR EL ARCHIVO [VIEW>analisis_suelo.php] y por el archivo,
// [VIEW>analisis_suelo_het.php] 

//ESTE CÓDIGO CARGA LAS CARACTERISTICAS DE ALGUN CULTIVO SELECCIONADO [INICIO]{           
         $(document).ready(function(){  
          $('#Siembra_id').change(function(){  
               var id_siembra = $(this).val(); 
               $.ajax({  
                    url:"../../control/analisis_foliar/carga_siembras_id.php",  
                    method:"POST",  
                    data:{id_siembra:id_siembra},  
                    success:function(data){  
                    $('#mostrar_detsiembra').html(data);  
                    }  
               });  
          });  

   
        //[FIN] }        

//ESTE CÓDIGO CARGA LAS CARACTERISTICAS DE ALGUNA FINCA SELECCIONADO [INICIO]{           
   
          $('#Finca').change(function(){  
               var id_finca = $(this).val();  
               $.ajax({  
                    url:"../../control/analisis_foliar/carga_fincas_id.php",  
                    method:"POST",  
                    data:{id_finca:id_finca},  
                    success:function(data){  
                    $('#mostrar_finca_descrip').html(data);  
                    }  
               });  
          });  
 
        //[FIN] }

    // ESTE CÓDIGO ME PERMITE SELECCIONAR DEPARTAMENTO>MUNICIPIO>FINCA {
 
     $('.selec_control').change(function(){
      if($(this).val() != '')
      {
       var selec_control = $(this).attr("id");
       var query = $(this).val();
       var result = '';
       if(selec_control == "Departamento")
       {
        result = 'Municipio';
       }
       else
       {
        result = 'Finca';
       }
       $.ajax({
        url:"../../control/analisis_foliar/select_dep_muni_finc.php",
        method:"POST",
        data:{selec_control:selec_control, query:query},
        success:function(data){
         $('#'+result).html(data);
        }
       })
      }
     });// ESTE CÓDIGO ME PERMITE SELECCIONAR DEPARTAMENTO>MUNICIPIO>FINCA }
         
     //ESTE CÓDIGO ME CARGA LA LISTA DE PROPIETARIOS EN EL CAMPO PROPIETARIOS [INICIO]{   
         $('#Buscar_Propietario').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"../../control/analisis_foliar/busca_propietarios.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#lista_propietarios').fadeIn();  
                          $('#lista_propietarios').html(data);  
                     }  
                });  
           }  
      });  
             $( "#Propietario" ).focus(function() {
                $('#busca_propietarios').modal('open');  
                $('#Buscar_Propietario').focus();  
                }); 
             
          $(document).on('click', '.personas', function(){  
          $('#Buscar_Propietario').val($(this).text());  
          $('#Propietario').val($(this).text());
          $('#busca_propietarios').modal('close');  
          $('#lbpropietarios').addClass('active');
          $('#lista_propietarios').fadeOut();  
      });       
 
    //ESTE CÓDIGO ME CARGA LA LISTA DE PROPIETARIOS EN EL CAMPO PROPIETARIOS [FIN]}   
             
 
         
    });// FIN DE  => (document).ready(function();  


    

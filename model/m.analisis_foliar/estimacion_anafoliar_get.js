      
        $(document).ready(function(){          
    //Código para Determinar la apreciación del PH{
    $( "#ph" ).keyup(function() {
    var val_ph = parseFloat($(this ).val());    
    this.value = (this.value + '').replace(/[^0-9.]/g, '');    
    if (val_ph<4.5)
    {
    $( "#inter_ph" ).text( "Extremadamente ácido" );
    
    }else if(val_ph>4.5 & val_ph<=5.0)
    {
   $( "#inter_ph" ).text( "Muy fuertemente ácido");
    }else if(val_ph>=5.1 & val_ph<=5.5)
    {
    $( "#inter_ph" ).text( "Fuertemente ácido" );
    }else if(val_ph>=5.6 & val_ph<=6.0){
    $( "#inter_ph" ).text( "Moderadamente ácido" );    
    }else if(val_ph>=6.1 & val_ph<=6.5)
    {
    $( "#inter_ph" ).text( "Ligeramente ácido" );         
    }else if(val_ph>=6.6 & val_ph<=7.3)
    {
    $( "#inter_ph" ).text( "Neutro" );                  
    }else if(val_ph>=7.4 & val_ph<=7.9)
    {
    $( "#inter_ph" ).text( "Alcalino calcareo" );                  
    }else if(val_ph>=7.9 & val_ph<=8.4)
    {
    $( "#inter_ph" ).text( "Moderadamente alcalino (Na)" );                  
    }else if(val_ph>=8.4 & val_ph<=9.0)
    {
    $( "#inter_ph" ).text( "Fuertemente alcalino (Na)" );                  
    }else if(val_ph>=9.0)
    {
    $( "#inter_ph" ).text( "Extremadamente alcalino" );                  
    }
      
            
    if( $(this).val() == '' ) {
   $( "#inter_ph" ).text( "Val" );
    }
  })
  .keyup();  
    //Código para Determinar la apreciación del PH fin } 
    
    //Código para determinar la apreciación de C.E
            $( "#ce" ).keyup(function() {
        var val_ce = parseFloat($(this ).val());    
        this.value = (this.value + '').replace(/[^0-9.]/g, '');    
        if (val_ce<0.5)
        {
        $( "#inter_ce" ).text( "Muy bajo" );
        }
        else if(val_ce>0.5 & val_ce<=1)
        {
       $( "#inter_ce" ).text( "Bajo");
        }
        else if(val_ce>1 & val_ce<2)
        {
        $( "#inter_ce" ).text("Medio");
        }else if (val_ce>=2)
        {
        $( "#inter_ce" ).text("Alto");
        }
        if( $(this).val() == '' ) {
       $( "#inter_ce" ).text( "Val" );
        }
      })
      .keyup();
        //Código para determinar la apreciación de NDVI
        $( "#ndvi" ).keyup(function() {
        var val_ce = parseFloat($(this ).val());    
        this.value = (this.value + '').replace(/[^0-9.]/g, '');    
        if (val_ce<0.20)
        {
        $( "#inter_ndvi" ).text( "Muy bajo" );
        }
        else if(val_ce>=0.20 & val_ce<=0.40)
        {
       $( "#inter_ndvi" ).text( "Bajo");
        }
        else if(val_ce>=0.40 & val_ce<0.60)
        {
        $( "#inter_ndvi" ).text("Medio");
        }else if (val_ce>=0.60 & val_ce<1)
        {
        $( "#inter_ndvi" ).text("Alto");
        }else if (val_ce>1)
        {
        $( "#ndvi").val("");
        $( "#inter_ndvi").val("null");
        }
        if( $(this).val() == '' ) {
       $( "#inter_ndvi" ).text( "Val" );
        }
      })
      .keyup();          
            
            //Determinacion para los valores del Cl Clorofila{
           $( "#clorofila" ).keyup(function() {
            var val_cloro = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_cloro<-1)
            {
           $( "#inter_cloro" ).text( "Deficiente" );
            }else if(val_cloro>=0.30 & val_cloro<=0.70)
            {
            $( "#inter_cloro" ).text( "Normal" );
            }else if(val_cloro>=0.70 & val_cloro<=0.90)
            {
            $( "#inter_cloro" ).text("Suficiente");
            }else if(val_cloro>0.90)
            {
            $( "#inter_cloro" ).text("Excesivo");
            }
            if( $(this).val() == '' ) {
           $( "#inter_cloro" ).text( "Val" );
            }
          })
          .keyup();
            
            //}   
			
			        
        $("#sat_hum").keyup(function(){
        var val_satu = parseFloat($(this ).val());    
        this.value = (this.value + '').replace(/[^0-9.]/g, '');    
        if (val_satu<7)
        {
        $( "#inter_sat_hum" ).text( "Muy bajo" );
        }
        else if(val_satu>7 & val_satu<=12)
        {
       $( "#inter_sat_hum" ).text( "Bajo");
        }
        else if(val_satu>12 & val_satu<20)
        {
        $( "#inter_sat_hum" ).text("Medio");
        }else if (val_satu>=20)
        {
        $( "#inter_sat_hum" ).text("Alto");
        }
        if( $(this).val() == '' ) {
       $( "#inter_sat_hum" ).text( "Val" );
        }
    })  .keyup(); 
			
            
                 var ph = $('#ph').val();  
                 var ce = $('#ce').val();  
                 var ndvi = $('#ndvi').val();
                 var clorofila = $('#clorofila').val();
                 var sat_hum = $('#sat_hum').val();
                 var nitrogeno = $('#nitro').val();
            
            new Chart(document.getElementById("v-foliar"), {
              type: 'line',
              data: {
                labels: ["PH", "C.E", "NDVI", "CLOROFILA", "SAT-HUM", "NITRÓGENO"],
                datasets: [{ 
                    data: [ph,ce,ndvi,clorofila,sat_hum,nitrogeno],
                    label: "V. foliar",
                    borderColor: "#0097a7",
                    fill: false
                  }
                ]
              },
              options: {
                title: {
                  display: true,
                  text: 'Estimación gráfica'
                }
              }
            });   
           
            
        //cuando le de click gráfico que se actualice    
    $(document).on('click', '#actu_gra', function(){   
                 var ph = $('#ph').val();  
                 var ce = $('#ce').val();  
                 var ndvi = $('#ndvi').val();
                 var clorofila = $('#clorofila').val();
                 var sat_hum = $('#sat_hum').val();
                 var nitrogeno = $('#nitro').val();
        
            new Chart(document.getElementById("v-foliar"), {
              type: 'line',
              data: {
                labels: ["PH", "C.E", "NDVI", "CLOROFILA", "SAT-HUM", "NITRÓGENO"],
                datasets: [{ 
                    data: [ph,ce,ndvi,clorofila,sat_hum,nitrogeno],
                    label: "V. foliar",
                    borderColor: "#ff6d00",
                    fill: false
                  }
                ]
              },
              options: {
                title: {
                  display: true,
                  text: 'Estimación gráfica'
                }
              }
            });   
        
        //cuando le de click al gráfico actualicelo
    
     });       
            
       
    //estimacion de los nutrientes del suelo a partir de los cambios que se realicen en las entradas de los inputs de las BD inicio
    //Este select determina la seleccion del clima para la M. {}       
            $('#co_o_mo').change(function(){
           selection = $(this).val();    
           switch(selection){   
            case  'mo':
                    var mo =prompt('Ingrese el valor de Materia Orgánica','');
                    $( "#nitro" ).val(mo*1.72); //Transforma la materia orgánica a carbono orgánico
                    alert("Selecciona el tipo de clima");
                    $("#tipo_clima").addClass('light-green-text');
                    $( "#tipo_clima" ).focus();
                    break;
            case 'co':   
                alert("Ingresa el valor para Carbono Orgánico");
                    $( "#nitro" ).val('');
                    $( "#nitro" ).focus();
                   break;
               default:
                   break;
           }
            });
                $('#tipo_clima').change(function(){
          var selection = $(this).val();    
           switch(selection)
           { 
               case 'clma_frio':
                   //En el caso de que sea clima frio haga lo siguiente{
             // Código que me permite trabajar con la materia orgánica{        
            $( "#nitro" ).keyup(function() {
            var value = parseFloat($(this).val());    
            var total_nitro = value * 0.086;
            var nitro_disponible = total_nitro * 0.013;    
            var nitro_suelo_ppm = nitro_disponible * 10.000;
                
            var total_nitro  = total_nitro.toFixed(4);
            var nitro_disponible = nitro_disponible.toFixed(4);
            var nitro_suelo_ppm = nitro_suelo_ppm.toFixed(4);

             $("#nitro_total").text("N.TOTAL = "+ total_nitro);
             $("#nitro_dispon").text("N.DISP = "+ nitro_disponible);
             $("#nitro_suelo_ppm").text("N.PPM = "+ nitro_suelo_ppm);
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (value<=2.9)
            {
            $( "#inter_nitrogeno" ).text( "Bajo" );

            }else if(value>=3.0 & value<=5.7)
            {
           $( "#inter_nitrogeno" ).text( "Medio");
            }else if(value>=5.0 & value<=7.0)
            {
           $( "#inter_nitrogeno" ).text( "Ideal");
            }else if(value>=7.0)
            {
           $( "#inter_nitrogeno" ).text( "Alto");
            }
            if( $(this).val() == '' ) {
           $( "#inter_nitrogeno" ).text( "Val" ).addClass('chip');
            }
          })
            // Código que me permite trabajar con la materia orgánica}

          .keyup();

                    //}

                   break; //

                case 'clma_medio':
                    //Apreciación steniendo en cuenta el clima medio{
                 $( "#nitro" ).keyup(function() {
            var value = parseFloat($(this).val());    
            var total_nitro = value * 0.086;
            var nitro_disponible = total_nitro * 0.0225;    
            var nitro_suelo_ppm = nitro_disponible * 10.000;
                
            var total_nitro  = total_nitro.toFixed(4);
            var nitro_disponible = nitro_disponible.toFixed(4);
            var nitro_suelo_ppm = nitro_suelo_ppm.toFixed(4);

                $("#nitro_total").text("N.TOTAL = "+ total_nitro);
                $("#nitro_dispon").text("N.DISP = "+ nitro_disponible);
                $("#nitro_suelo_ppm").text("N.PPM = "+ nitro_suelo_ppm);   
                    if (value<=1.7)
                    {
                    $( "#inter_nitrogeno" ).text( "Bajo" );

                    }else if(value>=1.8 & value<=2.9)
                    {
                   $( "#inter_nitrogeno" ).text( "Medio");
                    }else if(value>=3.0 & value<=4.0)
                    {
                   $( "#inter_nitrogeno" ).text( "Ideal");
                    }else if(value>=4.0)
                    {
                   $( "#inter_nitrogeno" ).text( "Alto");
                    }
                    if( $(this).val() == '' ) {
                   $( "#inter_nitrogeno" ).text( "Val" ).addClass('chip');
                    }
                  })
                    //}

                  .keyup();

                   break;      
                  case 'clma_calido':
                  //Apreciación para el clima calido inicio
                 $( "#nitro" ).keyup(function() {
            var value = parseFloat($(this).val());    
            var total_nitro = value * 0.086;
            var nitro_disponible = total_nitro * 0.029;    
            var nitro_suelo_ppm = nitro_disponible * 10.000;
                
            var total_nitro  = total_nitro.toFixed(4);
            var nitro_disponible = nitro_disponible.toFixed(4);
            var nitro_suelo_ppm = nitro_suelo_ppm.toFixed(4);

                $("#nitro_total").text("N.TOTAL = "+ total_nitro);
                $("#nitro_dispon").text("N.DISP = "+ nitro_disponible);
                $("#nitro_suelo_ppm").text("N.PPM = "+ nitro_suelo_ppm);  
                    if (value<=1.1)
                    {
                    $( "#inter_nitrogeno" ).text( "Bajo" );

                    }else if(value>=1.2 & value<=2.3)
                    {
                   $( "#inter_nitrogeno" ).text( "Medio");
                    }else if(value>=2.4 & value<=2.5)
                    {
                   $( "#inter_nitrogeno" ).text( "Ideal");
                    }else if(value>=2.5)
                    {
                   $( "#inter_nitrogeno" ).text( "Alto");
                    }
                    if( $(this).val() == '' ) {
                   $( "#inter_nitrogeno" ).text( "Val" ).addClass('chip');
                    }
                  })
                    // Apreciacion para el clima calido fin

                   break;

               default:
                  $( "#inter_nitrogeno" ).text( "Default" );

                   break;
           }
        });
            
            $( "#FOSFORO" ).keyup(function() {
            var val_fosforo = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_fosforo<10)
            {
            $( "#INTER_FOSFORO" ).text( "Muy Bajo" ).addClass('chip');
            }
            else if(val_fosforo>=10 & val_fosforo<=20)
            {
           $( "#INTER_FOSFORO" ).text( "Bajo" );
            }else if(val_fosforo>=20 & val_fosforo<=40)
            {
            $( "#INTER_FOSFORO" ).text( "Medio" );
            }else if(val_fosforo>=40)
            {
            $( "#INTER_FOSFORO" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_FOSFORO" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            $( "#CALCIO" ).keyup(function() {
            var val_calcio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_calcio<2)
            {
            $( "#INTER_CALCIO" ).text( "Muy Bajo" );
            }
            else if(val_calcio>=2 & val_calcio<=3)
            {
           $( "#INTER_CALCIO" ).text( "Bajo" );
            }else if(val_calcio>3 & val_calcio<=6)
            {
            $( "#INTER_CALCIO" ).text( "Medio" );
            }else if(val_calcio>=6)
            {
            $( "#INTER_CALCIO" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_CALCIO" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
                    //Determinacion para los valores del Mg Magnecio{
           $( "#MAGNECIO" ).keyup(function() {
            var val_magnecio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_magnecio<0.5)
            {
            $( "#INTER_MAGNECIO" ).text("Muy Bajo");
            }
            else if(val_magnecio>=0.5 & val_magnecio<=1.2)
            {
           $( "#INTER_MAGNECIO" ).text("Bajo");
            }else if(val_magnecio>1.2 & val_magnecio<=1.8)
            {
            $( "#INTER_MAGNECIO" ).text("Medio");
            }else if(val_magnecio>=1.8)
            {
            $( "#INTER_MAGNECIO" ).text("Alto");
            }
            if( $(this).val() == '' ) {
           $( "#INTER_MAGNECIO" ).text("Val").addClass('black-text');
            }
          })
          .keyup();  
            
            
            
             //Determinacion para los valores del Mg Potasio{
           $( "#POTASIO" ).keyup(function() {
            var val_potasio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_potasio<0.2)
            {
            $( "#INTER_POTASIO" ).text( "Muy Bajo" ).addClass('chip');
            }
            else if(val_potasio>=0.2 & val_potasio<=0.4)
            {
           $( "#INTER_POTASIO" ).text( "Bajo" );
            }else if(val_potasio>0.4 & val_potasio<=0.6)
            {
            $( "#INTER_POTASIO" ).text( "Medio" );
            }else if(val_potasio>0.6 & val_potasio<=1)
            {
            $( "#INTER_POTASIO" ).text( "Alto" );
            }else if(val_potasio>1)
            {
            $( "#INTER_POTASIO" ).text("Excesivo");
            }
            if( $(this).val() == '' ) {
           $( "#INTER_POTASIO" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
        
            //Determinacion para los valores del Na Sodio{
           $( "#CLORO" ).keyup(function() {
            var val_sodio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_sodio<0.1)
            {
           $( "#INTER_CLORO" ).text( "Bajo" );
            }else if(val_sodio>=0.1 & val_sodio<=0.5)
            {
            $( "#INTER_CLORO" ).text( "Medio" );
            }else if(val_sodio>0.5)
            {
            $( "#INTER_CLORO" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_CLORO" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
        
        //Determinacion para los valores del S Azufre{
           $( "#AZUFRE" ).keyup(function() {
            var val_azufre = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_azufre<8)
            {
           $( "#INTER_AZUFRE" ).text( "Bajo" );
            }else if(val_azufre>=8 & val_azufre<=16)
            {
            $( "#INTER_AZUFRE" ).text( "Medio" );
            }else if(val_azufre>16)
            {
            $( "#INTER_AZUFRE" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_AZUFRE" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
         //Determinacion para los valores del B Boro{
           $( "#BORO" ).keyup(function() {
            var val_boro = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_boro<0.3)
            {
           $( "#INTER_BORO").text( "Bajo" );
            }else if(val_boro>=0.3 & val_boro<=0.6)
            {
            $( "#INTER_BORO").text( "Medio" );
            }else if(val_boro>0.6)
            {
            $( "#INTER_BORO").text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_BORO" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //Determinacion para los valores del Mn manganeso{
           $( "#MANGANESO" ).keyup(function() {
            var val_manganeso = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_manganeso<5)
            {
           $( "#INTER_MANGANESO").text( "Bajo" );
            }else if(val_manganeso>=5 & val_manganeso<=10)
            {
            $( "#INTER_MANGANESO").text( "Medio" );
            }else if(val_manganeso>10)
            {
            $( "#INTER_MANGANESO").text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_MANGANESO" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
        //Determinacion para los valores del Cu Cobre{
           $( "#COBRE" ).keyup(function() {
            var val_cobre = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_cobre<2)
            {
           $( "#INTER_COBRE").text( "Bajo" );
            }else if(val_cobre>=2 & val_cobre<=4)
            {
            $( "#INTER_COBRE").text( "Medio" );
            }else if(val_cobre>4)
            {
            $( "#INTER_COBRE").text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_COBRE" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();    
        
            //Determinacion para los valores del Zn Zinc{
           $( "#ZINC" ).keyup(function() {
            var val_zinc = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_zinc<3)
            {
           $( "#INTER_ZINC").text( "Bajo" );
            }else if(val_zinc>=3 & val_zinc<=6)
            {
            $( "#INTER_ZINC").text( "Medio" );
            }else if(val_zinc>6)
            {
            $( "#INTER_ZINC").text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_ZINC" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
        
            //Determinacion para los valores del Fe Hierro{
           $( "#HIERRO" ).keyup(function() {
            var val_hierro = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_hierro<50)
            {
           $( "#INTER_HIERRO").text( "Bajo" );
            }else if(val_hierro>=50 & val_hierro<=100)
            {
            $( "#INTER_HIERRO").text( "Medio" );
            }else if(val_hierro>100)
            {
            $( "#INTER_HIERRO").text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_HIERRO" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
             $("#MOLIBDENO" ).keyup(function() {
            var val_molibdeno = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_molibdeno<0.03)
            {
           $( "#INTER_MOLIBDENO").text( "Valor nulo" );
            }else if(val_molibdeno>=0.03 & val_molibdeno<=0.15)
            {
            $( "#INTER_MOLIBDENO").text( "Deficiente");
            }else if(val_molibdeno>=0.1 & val_molibdeno<=2.0)
            {
            $( "#INTER_MOLIBDENO").text( "Suficiente" );
            }else if(val_molibdeno>2)
            {
            $( "#INTER_MOLIBDENO").text( "Excesivo" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_MOLIBDENO" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            
    //estimacion de los nutrientes del suelo a partir de los cambios que se realicen en las entradas de los inputs de las BD fin
            
            
    //estimacion de los nutrientes del tejido foliar  en un gráfico inicio
         var fosforo = $('#FOSFORO').val();  
         var calcio = $('#CALCIO').val();  
         var magnecio = $('#MAGNECIO').val();  
         var potasio = $('#POTASIO').val();                                        
         var cloro = $('#CLORO').val(); 
         var azufre = $('#AZUFRE').val();    
         var manganeso = $('#MANGANESO').val();                              
         var boro = $('#BORO').val();                              
         var cobre = $('#COBRE').val();                                            
         var zinc = $('#ZINC').val();                                          
         var hierro = $('#HIERRO').val();                                
         var molibdeno = $('#MOLIBDENO').val();                                
     
            
    new Chart(document.getElementById("elements_chart"), {
    type: 'bar',
    data: {
      labels: ["P", "Ca", "Mg", "K", "Cl", "S", "Mn", "B", "Cu", "Zn", "Fe", "Mo"],
      datasets: [
        {
          label: "Estimación (Nutrientes)",
        backgroundColor: 
        ["#3e95cd", "#8e5ea2","#4cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#4cba9f","#c45850","#4cba9f"],
        data: [fosforo, calcio, magnecio, potasio, cloro, azufre, manganeso, boro, cobre, zinc, hierro, molibdeno]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Estimación de los nutrientes del tejido foliar'
      }
    }
}); 
    $(document).on('click', '#graf_elements', function(){
         var fosforo = $('#FOSFORO').val();  
         var calcio = $('#CALCIO').val();  
         var magnecio = $('#MAGNECIO').val();  
         var potasio = $('#POTASIO').val();                                        
         var cloro = $('#CLORO').val(); 
         var azufre = $('#AZUFRE').val();    
         var manganeso = $('#MANGANESO').val();                              
         var boro = $('#BORO').val();                              
         var cobre = $('#COBRE').val();                                            
         var zinc = $('#ZINC').val();                                          
         var hierro = $('#HIERRO').val();                                
         var molibdeno = $('#MOLIBDENO').val();                                                                
            
    new Chart(document.getElementById("elements_chart"), {
    type: 'bar',
    data: {
      labels: ["P", "Ca", "Mg", "K", "Cl", "S", "Mn", "B", "Cu", "Zn", "Fe", "Mo"],
      datasets: [
        {
          label: "Estimación (Nutrientes)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#4cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#4cba9f","#c45850","#8e5ea2"],
        data: [fosforo, calcio, magnecio, potasio, cloro, azufre, manganeso, boro, cobre, zinc, hierro, molibdeno]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Estimación de los nutrientes del tejido foliar'
      }
    }
});
                
                
            });
    //estimacion de los nutrientes del suelo en un gráfico fin
    
            
 
        }); //Cierre de la preparación del documento.        
       
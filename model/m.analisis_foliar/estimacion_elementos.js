      
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
			

    //Este select determina la seleccion del clima para la M. {}       
            $('#co_o_mo').change(function(){
           var selection = $(this).val();    
           switch(selection){   
            case  'mo':
                    var mo =prompt('Ingrese el valor de Materia Orgánica','');
                    $( "#nitro" ).val(mo/1.72); //Transforma la materia orgánica a carbono orgánico
                    alert("Selecciona el tipo de clima");
                    $("#tipo_clima").addClass('light-green');
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

            //Este select determina la seleccion del clima para la M. {}       
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

         //Determinacion para los valores del P fosforo{
        //Nececito validar que se hayan introducido los datos correctos para nitrógenoo MO
     /*/      $("#fosforo").focus(function(){ 
            var validar_nitrogeno= $('#co_o_mo').val();    
            var tipo_clima= $('#tipo_clima').val();    
            if (validar_nitrogeno=='' || tipo_clima==''){
            alert("Por favor selecciona el valor del nitrógeno y el tipo de clima");
            $("#nitro").focus();         
            }
           
         });  /*/ 
            
           $( "#fosforo" ).keyup(function() {
            var val_fosforo = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_fosforo<0.15)
            {
            $( "#inter_fosforo" ).text( "Deficiente" );
            }
            else if(val_fosforo>=0.15 & val_fosforo<=1.00)
            {
           $( "#inter_fosforo" ).text( "Suficiente o Normal" );
            }else if(val_fosforo>1)
            {
            $( "#inter_fosforo" ).text( "Excesivo o Toxico" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_fosforo" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}  
            
            //Determinacion para los valores del Ca calcio{
           $( "#calcio" ).keyup(function() {
            var val_calcio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.-]/g, '');    
            if (val_calcio<0.5)
            {
            $( "#inter_calcio" ).text( "Deficiente" );
            }
            else if(val_calcio>=0.5 & val_calcio<= 4.0){
            $( "#inter_calcio" ).text( "Suficiente o Normal" );
            }else if(val_calcio>=4.0)
            {
            $( "#inter_calcio" ).text( "Excesivo o Toxico" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_calcio" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}        
            
            //Determinacion para los valores del Mg Magnecio{
           $( "#magnecio" ).keyup(function() {
            var val_magnecio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_magnecio<0.20)
            {
            $( "#inter_magnecio" ).text( "Deficiente" );
            }
            else if(val_magnecio>=0.20 & val_magnecio<=1.00){
            $( "#inter_magnecio" ).text( "Suficiente o Normal" );
                
            }else if(val_magnecio>=1.00)
            {
            $( "#inter_magnecio" ).text( "Excesivo o Toxico" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_magnecio" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}     
            
            //Determinacion para los valores del Mg Potasio{
           $( "#potasio" ).keyup(function() {
            var val_potasio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_potasio<1.00)
            {
            $( "#inter_potasio" ).text("Deficiente");
            }
            else if(val_potasio>=1.00 & val_potasio<=5.50)
            {
           $( "#inter_potasio" ).text( "Suficiente o Normal" );
            }else if(val_potasio>5.50)
            {
            $( "#inter_potasio" ).text("Excesivo o Toxico");
            }
            if( $(this).val() == '' ) {
           $( "#inter_potasio" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}           
	 	
	 	//Determinacion para los valores del Cl cloro{
           $( "#cloro" ).keyup(function() {
            var val_potasio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_potasio<1.00)
            {
            $( "#inter_clor" ).text("Deficiente");
            }
            else if(val_potasio>=1.00 & val_potasio<=5.50)
            {
           $( "#inter_clor" ).text( "Suficiente o Normal" );
            }else if(val_potasio>5.50)
            {
            $( "#inter_clor" ).text("Excesivo o Toxico");
            }
            if( $(this).val() == '' ) {
           $( "#inter_clor" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}           
           

            
        //Determinacion para los valores del S Azufre{
           $( "#azufre" ).keyup(function() {
            var val_azufre = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_azufre<0.20)
            {
           $( "#inter_azufre" ).text( "Deficiente" );
            }else if(val_azufre>=0.20 & val_azufre<=1.00)
            {
            $( "#inter_azufre" ).text( "Suficiente o Normal" );
            }else if(val_azufre>1.00)
            {
            $( "#inter_azufre" ).text( "Excesivo o Toxico" );
            }
            if( $(this).val() == '' ) {
            $( "#inter_azufre" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}
            
            //Determinacion para los valores del B Boro{
           $( "#boro" ).keyup(function() {
            var val_boro = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_boro<5)
            {
           $( "#inter_boro").text( "Valor nulo" );
            }else if(val_boro>=5 & val_boro<=30)
            {
            $( "#inter_boro").text( "Deficiente" );
            }else if(val_boro>=30 & val_boro<=50)
            {
            $( "#inter_boro").text( "Suficiente" );
            }else if(val_boro>50)
            {
            $("#inter_boro").text( "Excesivo o Toxico" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_boro" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}         
            
            //Determinacion para los valores del Mn manganeso{
           $( "#manganeso" ).keyup(function() {
            var val_manganeso = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_manganeso<15)
            {
           $( "#inter_manganeso").text( "Valor nulo" );
            }else if(val_manganeso>=15 & val_manganeso<=20)
            {
            $( "#inter_manganeso").text( "Deficiente" );
            }else if(val_manganeso>=20 & val_manganeso<=300)
            {
            $( "#inter_manganeso").text( "Suficiente" );
            }else if(val_manganeso>=300 & val_manganeso<=500)
            {
            $( "#inter_manganeso").text( "Excesivo o Toxico" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_manganeso" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}       
            
            //Determinacion para los valores del Cu Cobre{
           $( "#cobre" ).keyup(function() {
            var val_cobre = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_cobre<2)
            {
           $( "#inter_cobre").text( "Valor nulo" ).addClass("red-text");
            }else if(val_cobre>=2 & val_cobre<=5)
            {
            $( "#inter_cobre").text( "Deficiente" ).removeClass("red-text");
            }else if(val_cobre>5 & val_cobre<=30)
            {
            $( "#inter_cobre").text( "Suficiente" ).removeClass("red-text");
            }else if(val_cobre>30 & val_cobre<=100)
            {
            $( "#inter_cobre").text( "Excesivo" ).removeClass("red-text");
            }else if(val_cobre>100)
            {
            $( "#inter_cobre").text( "Excesivo").addClass("red-text");
            }
            if( $(this).val() == '' ) {
           $( "#inter_cobre" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}       
            
            //Determinacion para los valores del Zn Zinc{
           $( "#zinc" ).keyup(function() {
            var val_zinc = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_zinc<10)
            {
           $( "#inter_zinc").text( "Valor nulo" );
            }else if(val_zinc>=10 & val_zinc<=20)
            {
            $( "#inter_zinc").text( "Deficiente" );
            }else if(val_zinc>=20 & val_zinc<=100)
            {
            $( "#inter_zinc").text( "Suficiente" );
            }else if(val_zinc>=100 & val_zinc<=400)
            {
            $( "#inter_zinc").text( "Excesivo" );
            }else if(val_zinc>400)
            {
            $( "#inter_zinc").text( "Excesivo" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_zinc" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}          
            
            //Determinacion para los valores del Fe Hierro{
           $( "#hierro" ).keyup(function() {
            var val_hierro = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_hierro<50)
            {
           $( "#inter_hierro").text( "Deficiente" );
            }else if(val_hierro>=50 & val_hierro<=500)
            {
            $( "#inter_hierro").text( "Suficiente" );
            }else if(val_hierro>500)
            {
            $( "#inter_hierro").text( "Excesivo" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_hierro" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();       
            
         //Determinacion para los valores del Mo Molibdeno{
           $( "#molibdeno" ).keyup(function() {
            var val_molibdeno = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_molibdeno<0.03)
            {
           $( "#inter_molibdeno").text( "Valor nulo" );
            }else if(val_molibdeno>=0.03 & val_molibdeno<=0.15)
            {
            $( "#inter_molibdeno").text( "Deficiente");
            }else if(val_molibdeno>=0.1 & val_molibdeno<=2.0)
            {
            $( "#inter_molibdeno").text( "Suficiente" );
            }else if(val_molibdeno>2)
            {
            $( "#inter_molibdeno").text( "Excesivo" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_molibdeno" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}
            
        }); //Cierre de la preparación del documento.        
       
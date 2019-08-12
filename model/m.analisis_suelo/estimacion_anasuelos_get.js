      
        $(document).ready(function(){          
    //Código para Determinar la apreciación del PH{
     $("#val_ph").keyup(function(){
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
   $( "#inter_ph" ).text( "Val" ).addClass('green-text');
    }
})  .keyup(); 
            
    $("#val_ce").keyup(function(){
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
           $( "#inter_ce" ).text( "Val" ).addClass('orange-text');
            }
    })  .keyup();    
            
          $("#val_cice").keyup(function(){
        var val_ce = parseFloat($(this ).val());    
        this.value = (this.value + '').replace(/[^0-9.]/g, '');    
        if (val_ce<5)
        {
        $( "#inter_cice" ).text( "Muy bajo" );
        }
        else if(val_ce>5 & val_ce<=10)
        {
       $( "#inter_cice" ).text( "Bajo");
        }
        else if(val_ce>10 & val_ce<20)
        {
        $( "#inter_cice" ).text("Medio");
        }else if (val_ce>=20)
        {
        $( "#inter_cice" ).text("Alto");
        }
        if( $(this).val() == '' ) {
       $( "#inter_cice" ).text( "Val" ).addClass('red-text');
        }
    })  .keyup();         
            
        $("#val_salinidad").keyup(function(){
        var val_sal = parseFloat($(this ).val());    
        this.value = (this.value + '').replace(/[^0-9.]/g, '');    
        if (val_sal<7)
        {
        $( "#inter_sal" ).text( "Muy bajo" );
        }
        else if(val_sal>7 & val_sal<=12)
        {
       $( "#inter_sal" ).text( "Bajo");
        }
        else if(val_sal>12 & val_sal<20)
        {
        $( "#inter_sal" ).text("Medio");
        }else if (val_sal>=20)
        {
        $( "#inter_sal" ).text("Alto");
        }
        if( $(this).val() == '' ) {
       $( "#inter_sal" ).text( "Val" ).addClass('blue-text');
        }
    })  .keyup(); 
   
            
            
                 var ph = $('#val_ph').val();  
                  var ce = $('#val_ce').val();  
                  var cice = $('#val_cice').val();
                  var salinidad = $('#val_salinidad').val();
            
            new Chart(document.getElementById("v-suelos"), {
              type: 'line',
              data: {
                labels: ["PH", "C.E", "C.I.C.E", "SALINIDAD"],
                datasets: [{ 
                    data: [ph,ce,cice,salinidad],
                    label: "V. suelo",
                    borderColor: "#3e95cd",
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
                  var ph = $('#val_ph').val();  
                  var ce = $('#val_ce').val();  
                  var cice = $('#val_cice').val();
                  var salinidad = $('#val_salinidad').val();
            
            new Chart(document.getElementById("v-suelos"), {
              type: 'line',
              data: {
                labels: ["PH", "C.E", "C.I.C.E", "SALINIDAD"],
                datasets: [{ 
                    data: [ph,ce,cice,salinidad],
                    label: "V. suelo",
                    borderColor: "#3e95cd",
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
         $( "#NITROGENO" ).keyup(function() {
            var val_fosforo = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_fosforo<10)
            {
            $( "#INTER_NITROGENO" ).text( "Muy Bajo" ).addClass('chip');
            }
            else if(val_fosforo>=10 & val_fosforo<=20)
            {
           $( "#INTER_NITROGENO" ).text( "Bajo" );
            }else if(val_fosforo>=20 & val_fosforo<=40)
            {
            $( "#INTER_NITROGENO" ).text( "Medio" );
            }else if(val_fosforo>=40)
            {
            $( "#INTER_NITROGENO" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_NITROGENO" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();       
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
            $( "#INTER_CALCIO" ).text( "Muy Bajo" ).addClass('chip');
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
            
                    //Determinacion para los valores del Mg Magnesio{
           $("#MAGNESIO" ).keyup(function() {
            var val_magnecio = parseFloat($(this).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_magnecio<0.5)
            {
            $( "#INTER_MAGNESIO" ).text( "Muy Bajo" );
            }
            else if(val_magnecio>=0.5 & val_magnecio<=1.2)
            {
           $( "#INTER_MAGNESIO" ).text( "Bajo" );
            }else if(val_magnecio>1.2 & val_magnecio<=1.8)
            {
            $( "#INTER_MAGNESIO" ).text( "Medio" );
            }else if(val_magnecio>=1.8)
            {
            $( "#INTER_MAGNESIO" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_MAGNESIO" ).text( "Val" );
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
           $( "#SODIO" ).keyup(function() {
            var val_sodio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_sodio<0.1)
            {
           $( "#INTER_SODIO" ).text( "Bajo" );
            }else if(val_sodio>=0.1 & val_sodio<=0.5)
            {
            $( "#INTER_SODIO" ).text( "Medio" );
            }else if(val_sodio>0.5)
            {
            $( "#INTER_SODIO" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#INTER_SODIO" ).text( "Val" ).addClass('black-text');
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
            
    //estimacion de los nutrientes del suelo a partir de los cambios que se realicen en las entradas de los inputs de las BD fin
            
            
    //estimacion de los nutrientes del suelo en un gráfico inicio
        var nitrogeno = $('#NITROGENO').val();  
        var fosforo = $('#FOSFORO').val();  
         var calcio = $('#CALCIO').val();  
         var magnecio = $('#MAGNESIO').val();  
         var potasio = $('#POTASIO').val();                                        
         var sodio = $('#SODIO').val(); 
         var azufre = $('#AZUFRE').val();    
         var manganeso = $('#MANGANESO').val();                              
         var boro = $('#BORO').val();                              
         var cobre = $('#COBRE').val();                                            
         var zinc = $('#ZINC').val();                                          
         var hierro = $('#HIERRO').val();                                
     
            
    new Chart(document.getElementById("elements_chart"), {
    type: 'bar',
    data: {
      labels: ["N", "P", "Ca", "Mg", "K", "Na", "S", "Mn", "B", "Cu", "Zn", "Fe"],
      datasets: [
        {
          label: "Estimación (Nutrientes)",
        backgroundColor: ["#4cba9f", "#3e95cd", "#8e5ea2","#4cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#4cba9f","#c45850"],
        data: [nitrogeno, fosforo, calcio, magnecio, potasio, sodio, azufre, manganeso, boro, cobre, zinc, hierro]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Estimación de los nutrientes del suelo'
      }
    }
}); 
    $(document).on('click', '#graf_elements', function(){
		 var nitrogeno = $('#NITROGENO').val();  
         var fosforo = $('#FOSFORO').val();  
         var calcio = $('#CALCIO').val();  
         var magnecio = $('#MAGNESIO').val();  
         var potasio = $('#POTASIO').val();                                        
         var sodio = $('#SODIO').val(); 
         var azufre = $('#AZUFRE').val();    
         var manganeso = $('#MANGANESO').val();                              
         var boro = $('#BORO').val();                              
         var cobre = $('#COBRE').val();                                            
         var zinc = $('#ZINC').val();                                          
         var hierro = $('#HIERRO').val();                                
     
            
    new Chart(document.getElementById("elements_chart"), {
    type: 'bar',
    data: {
      labels: ["N", "P", "Ca", "Mg", "K", "Na", "S", "Mn", "B", "Cu", "Zn", "Fe"],
      datasets: [
        {
          label: "Estimación (Nutrientes)",
        backgroundColor: ["#4cba9f", "#3e95cd", "#8e5ea2","#4cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#4cba9f","#c45850"],
        data: [nitrogeno,fosforo, calcio, magnecio, potasio, sodio, azufre, manganeso, boro, cobre, zinc, hierro]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Estimación de los nutrientes del suelo'
      }
    }
});
                
                
            });
    //estimacion de los nutrientes del suelo en un gráfico fin
    
            
 
        }); //Cierre de la preparación del documento.        
       
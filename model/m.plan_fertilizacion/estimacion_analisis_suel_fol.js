
$(document).ready(function(){
	var S_NITROGENO = $("#S_NITROGENO").val();
	$("#nitro").val(S_NITROGENO);
	
	var S_FOSFORO = $("#S_FOSFORO").val();
	$("#fosforo").val(S_FOSFORO);    
	
	var S_CALCIO = $("#S_CALCIO").val();
	$("#calcio").val(S_CALCIO);
	
	var S_MAGNESIO = $("#S_MAGNESIO").val();
	$("#magnecio").val(S_MAGNESIO);	
	
	var S_POTASIO = $("#S_POTASIO").val();
	$("#potasio").val(S_POTASIO);	
	
	var S_SODIO = $("#S_SODIO").val();
	$("#sodio").val(S_SODIO);
	
	var S_AZUFRE = $("#S_AZUFRE").val();
	$("#azufre").val(S_AZUFRE);	
	
	var S_MANGANESO = $("#S_MANGANESO").val();
	$("#manganeso").val(S_MANGANESO);	
	
	var S_BORO = $("#S_BORO").val();
	$("#boro").val(S_BORO);	
	
	var S_COBRE = $("#S_COBRE").val();
	$("#cobre").val(S_COBRE);
	
	var S_ZINC = $("#S_ZINC").val();
	$("#zinc").val(S_ZINC);
	
	var S_HIERRO = $("#S_HIERRO").val();
	$("#hierro").val(S_HIERRO);
    
    var numero_plantas = $("#N_plantas_siembra").val()
	var fracc_mom_mayor = 4;
	var fracc_mom_menor = 3;
    

	 function calculo_nitrogeno(){
        var val_nitro = parseFloat($('#nitro').val());
        var co_mo = $('#co_o_mo').val();
         if (co_mo == "mo"){
            var nitrogen = val_nitro/1.72; 
             $("#nitro").val(nitrogen);
         }else if (co_mo == "co"){
             $("#nitro").val(val_nitro);
                }
         
        var tipo_clima = $('#tipo_clima').val();
        //calculos para calcular el en clima frio 
         if (tipo_clima ==  "clma_frio" ){
            //En el caso de que sea clima frio haga lo siguiente{
             // Código que me permite trabajar con la materia orgánica{        
            var total_nitro = val_nitro * 0.086;
            var nitro_disponible = total_nitro * 0.013;    
            var nitro_suelo_ppm = nitro_disponible * 10000;
                
            var total_nitro  = total_nitro.toFixed(4);
            var nitro_disponible = nitro_disponible.toFixed(4);
            var nitro_suelo_ppm = nitro_suelo_ppm.toFixed(1);

            $("#nitro_total").text("N.Total = "+ total_nitro);
            $("#nitro_dispon").text("N.Disp % = "+ nitro_disponible);
            $("#nitro_suelo_ppm").text("N.ppm = "+ nitro_suelo_ppm);
				//CÁLCULO PARA DETERMINAR EL NITROGENO EN EL SUELO
			 	var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			     if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
					 {
					var n_suelo = 0;
					n_suelo = nitro_suelo_ppm * 1.0;
			  		n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#nitro_suelo").text("N.Suelo: Kg/Ha = "+ n_suelo);// imprimir nitrógeno en el suelo
						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					n_suelo = nitro_suelo_ppm * 1.6;
			  		n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#nitro_suelo").text("N.Suelo: Kg/Ha = "+ n_suelo);// imprimir nitrógeno en el suelo	
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					n_suelo = nitro_suelo_ppm * 2.0;
			  		n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#nitro_suelo").text("N.Suelo: Kg/Ha = "+ n_suelo);// imprimir nitrógeno en el suelo

						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
					n_suelo = nitro_suelo_ppm * 2.6;
			  		n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#nitro_suelo").text("N.Suelo: Kg/Ha = "+ n_suelo);// imprimir nitrógeno en el suelo
						}	
				
			var tipo_textura = $("#textura").attr('name'); // captura  textura valor	
				
            var n_aprovechable = 0; 
			if (tipo_textura == 2.0 ){ 
			 n_aprovechable = n_suelo /  1.3;
			 }else if(tipo_textura == 1.0){
			 n_aprovechable = n_suelo /  1.8;
			 }else if (tipo_textura == 2.6){
			 n_aprovechable = n_suelo /  1.3;
			 }else{
			//  alert("Por favor eliga una textura de suelo");
				 // $('ul.tabs').tabs('select_tab', 'vars_sign');
			   }	
			n_aprovechable = n_aprovechable.toFixed(1);
			$("#nitro_aprovechable").text("N.Apro: Kg/Ha= "+ n_aprovechable);// imprimir nitrógeno aprovechable
			  var RC_NITROGENO = $("#RC_NITROGENO").val(); //get requerimiento nutricional val
			   var nf_nitrogeno = RC_NITROGENO - n_aprovechable;//var necesidad de N. Aplicar
			    nf_nitrogeno = nf_nitrogeno /80*100;// estas son constantes para sacar el NF 
			   nf_nitrogeno = nf_nitrogeno.toFixed(1);//darle un solo número después del punto
			   $("#n_necesidad").text("NF.N Kg N/Ha: "+ nf_nitrogeno);	
				var cant_gr_apli_x_planta = nf_nitrogeno * 1000 / numero_plantas; 
				cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
			    $("#cant_aplicar_planta").text("Cant. Apli x planta. (gr): "+ cant_gr_apli_x_planta);	
             
                var recomen_x_planta_momento = cant_gr_apli_x_planta / fracc_mom_mayor;
                var momento_seleccionado = $('option:selected', '#estado_fenologico').attr('value');
        
                if (momento_seleccionado == 1){ // VERIFICAR QUE MOMENTO FENOLÓGICO ELIGIÓ  
                    var  gr_momento1 = recomen_x_planta_momento * 1;
                    gr_momento1 = gr_momento1.toFixed(0)
                    $('#recomen_x_momento_n').text("Necesidad aplicar x planta N: " +gr_momento1+" gr");
                    $('#rec_x_mom_n').val(gr_momento1); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 2){
                    var  gr_momento2 = recomen_x_planta_momento * 1;
                    gr_momento2 = gr_momento2.toFixed(0)
                    $('#recomen_x_momento_n').text("Necesidad aplicar x planta N: " +gr_momento2+" gr");
                    $('#rec_x_mom_n').val(gr_momento2); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 3){
                    var  gr_momento3 = recomen_x_planta_momento * 2;
                     gr_momento3 = gr_momento3.toFixed(0)
                    $('#recomen_x_momento_n').text("Necesidad aplicar x planta N: " +gr_momento3+" gr");
                    $('#rec_x_mom_n').val(gr_momento3); //asignar el resultado para realizar otras despues
                }
        
                    if (nf_nitrogeno<0){ //si el valor el - entonces aparece el tooltip diciendo...
				  $('#n_mensaje').text('Valor negativo aplicar: '+ RC_NITROGENO+ ' Kg/Ha de N');  
                  //esta linea sig es para recomendar si la necesidad aplicar es negativa con el requerimiento
                   var necesidad_aplicar_x_planta = RC_NITROGENO *1000 / fracc_mom_mayor / numero_plantas;
                   necesidad_aplicar_x_planta = necesidad_aplicar_x_planta.toFixed(0);
                   $('#recomen_x_momento_n').text("Necesidad aplicar x planta N: " +necesidad_aplicar_x_planta+" gr");
                   
			   }else{
				$('#n_mensaje').text('');   
			   } 
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_nitro<=2.9)
            {
            $( "#inter_nitrogeno" ).text( "Bajo" );

            }else if(val_nitro>=3.0 & val_nitro<=5.7)
            {
           $( "#inter_nitrogeno" ).text( "Medio");
            }else if(val_nitro>=5.0 & val_nitro<=7.0)
            {
           $( "#inter_nitrogeno" ).text( "Ideal");
            }else if(val_nitro>=7.0)
            {
           $( "#inter_nitrogeno" ).text( "Alto");
            }
            if( $(this).val() == '' ) {
           $( "#inter_nitrogeno" ).text( "Val" ).addClass('chip');
            }
             //calcular nitrogeno para clima medio
        }else if(tipo_clima == "clma_medio"){
                 //Apreciación steniendo en cuenta el clima medio{
            var total_nitro = val_nitro * 0.086;
            var nitro_disponible = total_nitro * 0.0225;    
            var nitro_suelo_ppm = nitro_disponible * 10000;
                
            var total_nitro  = total_nitro.toFixed(4);
            var nitro_disponible = nitro_disponible.toFixed(4);
			var nitro_suelo_ppm = nitro_suelo_ppm.toFixed(1);
			    
           $("#nitro_total").text("N.Total = "+ total_nitro);
           $("#nitro_dispon").text("N.Disp % = "+ nitro_disponible);
           $("#nitro_suelo_ppm").text("N.ppm = "+ nitro_suelo_ppm);   
			//CÁLCULO PARA DETERMINAR EL NITROGENO EN EL SUELO
			 	var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			     if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
					 {
					var n_suelo = 0;
					n_suelo = nitro_suelo_ppm * 1.0;
			  		n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#nitro_suelo").text("N.Suelo: Kg/Ha = "+ n_suelo);// imprimir nitrógeno en el suelo
						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					n_suelo = nitro_suelo_ppm * 1.6;
			  		n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#nitro_suelo").text("N.Suelo: Kg/Ha = "+ n_suelo);// imprimir nitrógeno en el suelo	
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					n_suelo = nitro_suelo_ppm * 2.0;
			  		n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#nitro_suelo").text("N.Suelo: Kg/Ha = "+ n_suelo);// imprimir nitrógeno en el suelo

						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
					n_suelo = nitro_suelo_ppm * 2.6;
			  		n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#nitro_suelo").text("N.Suelo: Kg/Ha = "+ n_suelo);// imprimir nitrógeno en el suelo
						}			 
			 var tipo_textura = $("#textura").attr('name'); // captura  textura valor	
			 var n_aprovechable = 0; 
			if (tipo_textura == 2.0 ){ 
			 n_aprovechable = n_suelo /  1.3;
			 }else if(tipo_textura == 1.0){
			 n_aprovechable = n_suelo /  1.8;
			 }else if (tipo_textura == 2.6){
			 n_aprovechable = n_suelo /  1.3;
			 }else{
			//  alert("Por favor eliga una textura de suelo");
				 // $('ul.tabs').tabs('select_tab', 'vars_sign');
			   }	
			n_aprovechable = n_aprovechable.toFixed(1);
		$("#nitro_aprovechable").text("N.Apro: Kg/Ha = "+ n_aprovechable);// imprimir nitrógeno aprovechable
			  var RC_NITROGENO = $("#RC_NITROGENO").val(); //get requerimiento nutricional val
			   var nf_nitrogeno = RC_NITROGENO - n_aprovechable;//var necesidad de N. Aplicar
			    nf_nitrogeno = nf_nitrogeno /70*100;// estas son constantes para sacar el NF 
			   nf_nitrogeno = nf_nitrogeno.toFixed(1);//darle un solo número después del punto
			   $("#n_necesidad").text("NF.N Kg N/Ha: "+ nf_nitrogeno);		 
				var cant_gr_apli_x_planta = nf_nitrogeno * 1000 / numero_plantas; 
					 cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
			    $("#cant_aplicar_planta").text("Cant. Apli x planta. (Gr): "+ cant_gr_apli_x_planta);		 	 
				var recomen_x_planta_momento = cant_gr_apli_x_planta / fracc_mom_mayor;
                var momento_seleccionado = $('option:selected', '#estado_fenologico').attr('value');
        
                if (momento_seleccionado == 1){ // VERIFICAR QUE MOMENTO FENOLÓGICO ELIGIÓ  
                    var  gr_momento1 = recomen_x_planta_momento * 1;
                    gr_momento1 = gr_momento1.toFixed(0)
                    $('#recomen_x_momento_n').text("Necesidad aplicar x planta N: " +gr_momento1+" gr");
                    $('#rec_x_mom_n').val(gr_momento1); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 2){
                    var  gr_momento2 = recomen_x_planta_momento * 1;
                    gr_momento2 = gr_momento2.toFixed(0)
                    $('#recomen_x_momento_n').text("Necesidad aplicar x planta N: " +gr_momento2+" gr");
                    $('#rec_x_mom_n').val(gr_momento2); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 3){
                    var  gr_momento3 = recomen_x_planta_momento * 2;
                     gr_momento3 = gr_momento3.toFixed(0)
                    $('#recomen_x_momento_n').text("Necesidad aplicar x planta N: " +gr_momento3+" gr");
                    $('#rec_x_mom_n').val(gr_momento3); //asignar el resultado para realizar otras despues
                }
            if (val_nitro<=1.7)
            {
            $( "#inter_nitrogeno" ).text( "Bajo" );

            }else if(val_nitro>=1.8 & val_nitro<=2.9)
            {
           $( "#inter_nitrogeno" ).text( "Medio");
            }else if(val_nitro>=3.0 & val_nitro<=4.0)
            {
           $( "#inter_nitrogeno" ).text( "Ideal");
            }else if(val_nitro>=4.0)
            {
           $( "#inter_nitrogeno" ).text( "Alto");
            }
            if( $(this).val() == '' ) {
           $( "#inter_nitrogeno" ).text( "Val" ).addClass('chip');
                    }
            
        //calculo para clima calido        
         }else if(tipo_clima == "clma_calido"){
            var total_nitro = val_nitro * 0.086;
            var nitro_disponible = total_nitro * 0.029;    
            var nitro_suelo_ppm = nitro_disponible * 10000;
                
            var total_nitro  = total_nitro.toFixed(4);
            var nitro_disponible = nitro_disponible.toFixed(4);
            var nitro_suelo_ppm = nitro_suelo_ppm.toFixed(1);

            $("#nitro_total").text("N.Total = "+ total_nitro);
            $("#nitro_dispon").text("N.Disp % = "+ nitro_disponible);
            $("#nitro_suelo_ppm").text("N.ppm = "+ nitro_suelo_ppm);  
			//CÁLCULO PARA DETERMINAR EL NITROGENO EN EL SUELO
			 	var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			     if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
					 {
					var n_suelo = 0;
					n_suelo = nitro_suelo_ppm * 1.0;
			  		n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#nitro_suelo").text("N.Suelo: Kg/Ha = "+ n_suelo);// imprimir nitrógeno en el suelo
						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					n_suelo = nitro_suelo_ppm * 1.6;
			  		n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#nitro_suelo").text("N.Suelo: Kg/Ha = "+ n_suelo);// imprimir nitrógeno en el suelo	
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					n_suelo = nitro_suelo_ppm * 2.0;
			  		n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#nitro_suelo").text("N.Suelo: Kg/Ha = "+ n_suelo);// imprimir nitrógeno en el suelo

						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
					n_suelo = nitro_suelo_ppm * 2.6;
			  		n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#nitro_suelo").text("N.Suelo: Kg/Ha = "+ n_suelo);// imprimir nitrógeno en el suelo
						}		 
			 var tipo_textura = $("#textura").attr('name'); // captura  textura valor	
			 var n_aprovechable = 0; 
			if (tipo_textura == 2.0 ){ 
			 n_aprovechable = n_suelo /  1.3;
			 }else if(tipo_textura == 1.0){
			 n_aprovechable = n_suelo /  1.8;
			 }else if (tipo_textura == 2.6){
			 n_aprovechable = n_suelo /  1.3;
			 }else{
			//  alert("Por favor eliga una textura de suelo");
				 // $('ul.tabs').tabs('select_tab', 'vars_sign');
			   }	
			n_aprovechable = n_aprovechable.toFixed(1);
		$("#nitro_aprovechable").text("N.Apro: Kg/Ha = "+ n_aprovechable);// imprimir nitrógeno aprovechable
			  var RC_NITROGENO = $("#RC_NITROGENO").val(); //get requerimiento nutricional val
			   var nf_nitrogeno = RC_NITROGENO - n_aprovechable;//var necesidad de N. Aplicar
			    nf_nitrogeno = nf_nitrogeno /70*100;// estas son constantes para sacar el NF 
			   nf_nitrogeno = nf_nitrogeno.toFixed(1);//darle un solo número después del punto
			   $("#n_necesidad").text("NF.N Kg N/Ha: "+ nf_nitrogeno);		 	
				var cant_gr_apli_x_planta = nf_nitrogeno * 1000 / numero_plantas; 
				 cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
			    $("#cant_aplicar_planta").text("Cant. Apli x planta. (Gr): "+ cant_gr_apli_x_planta);		 
             
            var recomen_x_planta_momento = cant_gr_apli_x_planta / fracc_mom_mayor;
                var momento_seleccionado = $('option:selected', '#estado_fenologico').attr('value');
        
                if (momento_seleccionado == 1){ // VERIFICAR QUE MOMENTO FENOLÓGICO ELIGIÓ  
                    var  gr_momento1 = recomen_x_planta_momento * 1;
                    gr_momento1 = gr_momento1.toFixed(0)
                    $('#recomen_x_momento_n').text("Necesidad aplicar x planta N: " +gr_momento1+" gr");
                    $('#rec_x_mom_n').val(gr_momento1); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 2){
                    var  gr_momento2 = recomen_x_planta_momento * 1;
                    gr_momento2 = gr_momento2.toFixed(0)
                    $('#recomen_x_momento_n').text("Necesidad aplicar x planta N: " +gr_momento2+" gr");
                     $('#rec_x_mom_n').val(gr_momento2); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 3){
                    var  gr_momento3 = recomen_x_planta_momento * 2;
                     gr_momento3 = gr_momento3.toFixed(0)
                    $('#recomen_x_momento_n').text("Necesidad aplicar x planta N: " +gr_momento3+" gr");
                    $('#rec_x_mom_n').val(gr_momento3); //asignar el resultado para realizar otras despues
                }
                    if (val_nitro<=1.1)
                    {
                    $( "#inter_nitrogeno" ).text( "Bajo" );

                    }else if(val_nitro>=1.2 & val_nitro<=2.3)
                    {
                   $( "#inter_nitrogeno" ).text( "Medio");
                    }else if(val_nitro>=2.4 & val_nitro<=2.5)
                    {
                   $( "#inter_nitrogeno" ).text( "Ideal");
                    }else if(val_nitro>=2.5)
                    {
                   $( "#inter_nitrogeno" ).text( "Alto");
                    }
                    if( $(this).val() == '' ) {
                   $( "#inter_nitrogeno" ).text( "Val" ).addClass('chip');
                    }     
                     
                 }
    	}
    
    setInterval(calculo_nitrogeno, 3000);	 
    
                //esta funcion me permite calcular los fertilizantes para nitrogeno
            function calculate_fertilizantes_n(){ 
            var val_ure46 = $("#ure46").val();
            var val_tri15nitro = $("#tri15_n").val();
            var val_tri18nitro = $("#tri18_n").val();
            var val_final_recomendacion_n = $("#rec_x_mom_n").val();    
            var numero_plantas = $("#N_plantas_siembra").val();
            //calculo del fertilizante para (N) en UREA 
 	        if ( $('#ure46').is(':checked')){
			var apli_x_fertilizante_urea = val_final_recomendacion_n *  100 / val_ure46;
            var apli_x_kilos_urea = apli_x_fertilizante_urea * numero_plantas /1000;
            apli_x_kilos_urea = apli_x_kilos_urea.toFixed(0);
            apli_x_fertilizante_urea = apli_x_fertilizante_urea.toFixed(0);
            $("#fertil_nitrogeno").text(apli_x_fertilizante_urea + " (gr) de UREA/planta = "+apli_x_kilos_urea+ "kg UREA/ha");
		    }else{
		      } 	
            //calculo del fertilizante para (N) en TRIPLE 15    
            if ( $('#tri15_n').is(':checked')){
			var apli_x_fertilizante_tri15 = val_final_recomendacion_n *  100 / val_tri15nitro;
            var apli_x_kilos_tri15 = apli_x_fertilizante_tri15 * numero_plantas /1000;
            apli_x_kilos_tri15 = apli_x_kilos_tri15.toFixed(0);
            apli_x_fertilizante_tri15 = apli_x_fertilizante_tri15.toFixed(0);
            $("#fertil_nitrogeno").text(apli_x_fertilizante_tri15 + " (gr) de Triple 15/planta = "+apli_x_kilos_tri15+ "kg Triple 15/ha");
		    }else{
		      }            
            
            //calculo del fertilizante para (N) en TRIPLE 18    
            if ( $('#tri18_n').is(':checked')){
			var apli_x_fertilizante_tri18 = val_final_recomendacion_n *  100 / val_tri18nitro;
            var apli_x_kilos_tri18 = apli_x_fertilizante_tri18 * numero_plantas /1000;
            apli_x_kilos_tri18 = apli_x_kilos_tri18.toFixed(0);
            apli_x_fertilizante_tri18 = apli_x_fertilizante_tri18.toFixed(0);
            $("#fertil_nitrogeno").text(apli_x_fertilizante_tri18 + " (gr) de Triple 18/planta = "+apli_x_kilos_tri18+ "kg Triple 18/ha");
		    }else{
		      } 	
                }
            setInterval(calculate_fertilizantes_n, 800);
    
    function calculo_fosforo(){
 	      var val_fosforo = parseFloat($('#fosforo').val()); //captura el valor de la caja de texto para fosforo 
       val_fosforo.value = (val_fosforo.value + '').replace(/[^0-9.]/g, ''); // remplaza letras y solo deja números
 			var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			    //condicional para sacar el P en el suelo
			           if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
						{
					var resultado_densidad  = 0;	
					var p_suelo = val_fosforo * 1.0; //CAL fosforo en el suelo
			  		p_suelo = p_suelo.toFixed(1); //deja 1 número después de un punto
					$("#p_suelo").text("P.Suelo: " + p_suelo); // imprime el resultado de fosfro en suelo

						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					var resultado_densidad  = 0;		
					var p_suelo = val_fosforo * 1.6; //CAL fosforo en el suelo
			  		p_suelo = p_suelo.toFixed(1); //deja 1 número después de un punto
					$("#p_suelo").text("P.Suelo: " + p_suelo); // imprime el resultado de fosfro en suelo
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					var resultado_densidad  = 0;
					var p_suelo = val_fosforo * 2.0; //CAL fosforo en el suelo
			  		p_suelo = p_suelo.toFixed(1); //deja 1 número después de un punto
					$("#p_suelo").text("P.Suelo: " + p_suelo); // imprime el resultado de fosfro en suelo

						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
					var resultado_densidad  = 0;
					var p_suelo = val_fosforo * 2.6; //CAL fosforo en el suelo
			  		p_suelo = p_suelo.toFixed(1); //deja 1 número después de un punto
					$("#p_suelo").text("P.Suelo: " + p_suelo); // imprime el resultado de fosfro en suelo

						}
				var p_asimilable = p_suelo * 2.2913; // 2.2913 este es una constante - cálculo el p en el suelo
				p_asimilable = p_asimilable.toFixed(1); //quitar decimales de la derecha dejar uno
         
			$("#p_asimilable").text("P2O5: "+ p_asimilable); // print fosforo asimilable
			   var tipo_textura = $("#textura").attr('name');
			   var p_aprovechable = 0; 
			  if (tipo_textura == 2.0 ){ 
			 	 p_aprovechable =  p_asimilable / 4.0;
			   }else if(tipo_textura == 1.0){
				  p_aprovechable =  p_asimilable / 3.5;
			   }else if (tipo_textura == 2.6){
				   p_aprovechable =  p_asimilable /4.0;
			   }else{
				 //  alert("Por favor eliga una textura de suelo");
				 // $('ul.tabs').tabs('select_tab', 'vars_sign');
			   }
			var fosfo_final = p_aprovechable.toFixed(1); //quitar decimales de la derecha
			   $("#p_aprovechable").text("P.Apro: " + fosfo_final);
			   var RC_FOSFORO = $("#RC_FOSFORO").val(); //get requerimiento nutricional val
			   var nf_fosforo = RC_FOSFORO - p_aprovechable;//var necesidad de P. Aplicar
			    nf_fosforo = nf_fosforo /30*100;// estas son constantes para sacar el NF 
			   nf_fosforo = nf_fosforo.toFixed(1);//darle un solo número después del punto
			   $("#p_necesidad").text("N.Apli P2O5Kg/Ha: "+ nf_fosforo);
                var nf_aplicar_x_planta = nf_fosforo * 1000 / numero_plantas; //calcular necesidad aplicar x planta
                nf_aplicar_x_planta = nf_aplicar_x_planta.toFixed(2);
                $("#cantidad_xplanta_p").text("Cant. x planta: "+ nf_aplicar_x_planta+"/gr");
         
                var recomen_x_planta_momento = nf_aplicar_x_planta / fracc_mom_mayor;
                var momento_seleccionado = $('option:selected', '#estado_fenologico').attr('value');
        
                if (momento_seleccionado == 1){ // VERIFICAR QUE MOMENTO FENOLÓGICO ELIGIÓ  
                    var  gr_momento1 = recomen_x_planta_momento * 1;
                    gr_momento1 = gr_momento1.toFixed(0)
                    $('#recomen_x_momento_p').text("Necesidad aplicar x planta P: " +gr_momento1+" gr");
                    $('#rec_x_mom_p').val(gr_momento1);
                }else if(momento_seleccionado == 2){
                    var  gr_momento2 = recomen_x_planta_momento * 2;
                    gr_momento2 = gr_momento2.toFixed(0)
                    $('#recomen_x_momento_p').text("Necesidad aplicar x planta P: " +gr_momento2+" gr");
                    $('#rec_x_mom_p').val(gr_momento2);
                }else if(momento_seleccionado == 3){
                    var  gr_momento3 = recomen_x_planta_momento * 1;
                     gr_momento3 = gr_momento3.toFixed(0)
                    $('#recomen_x_momento_p').text("Necesidad aplicar x planta P: " +gr_momento3+" gr");
                    $('#rec_x_mom_p').val(gr_momento3);
                }
         
               if (nf_fosforo<0){ //si el valor el - entonces aparece el tooltip diciendo...
				$('#p_mensaje').text('Valor negativo aplicar: '+ RC_FOSFORO+ ' Kg/Ha de P');  
                  //esta linea sig es para recomendar si la necesidad aplicar es negativa con el requerimiento
                   var necesidad_aplicar_x_planta = RC_FOSFORO *1000 / fracc_mom_mayor / numero_plantas;
                   necesidad_aplicar_x_planta = necesidad_aplicar_x_planta.toFixed(0);
                   $('#recomen_x_momento_p').text("Necesidad aplicar x planta P: " +necesidad_aplicar_x_planta+" gr");
                   
			   }else{
				$('#p_mensaje').text('');   
			   } 
        		  //esta funcion me permite calcular la cantidad a aplicar en gramos por fertilizantes
            function calculate_fertilizantes_p(){          
            var val_dap = $("#dap").val();
            var val_tri15p = $("#tri15p").val();
            var val_103010p = $("#p103010").val();
            var val_final_recomendacion = $("#rec_x_mom_p").val();    
            var numero_plantas = $("#N_plantas_siembra").val();
 	        if ( $('#dap').is(':checked')){
			var apli_x_fertilizante = val_final_recomendacion *  100 / val_dap;
            var apli_x_kilos = apli_x_fertilizante * numero_plantas /1000;
            apli_x_kilos = apli_x_kilos.toFixed(0);
            apli_x_fertilizante = apli_x_fertilizante.toFixed(0);
            $("#fertil_fosforo").text(apli_x_fertilizante + " (gr) de DAP/planta = "+apli_x_kilos+ "kg DAP/ha");
		    }else{
		      } 	     
            
            if ( $('#tri15p').is(':checked')){
			var apli_x_ferti_tri15p = val_final_recomendacion *  100 / val_tri15p;            
            var apli_x_kilos_tri15p = apli_x_ferti_tri15p * numero_plantas /1000;
            apli_x_kilos_tri15p = apli_x_kilos_tri15p.toFixed(0);
            apli_x_ferti_tri15p = apli_x_ferti_tri15p.toFixed(0);
            $("#fertil_fosforo").text(apli_x_ferti_tri15p + " (gr) de Triple 15/planta = "+apli_x_kilos_tri15p+ "kg Triple 15/ha");
		    }else{
		    //$("#fertil_fosforo").text("");
		      }           
                
            if ( $('#p103010').is(':checked')){
			var apli_x_ferti_103010p = val_final_recomendacion *  100 / val_103010p;
            var apli_x_kilos_103010p = apli_x_ferti_103010p * numero_plantas /1000;
            apli_x_kilos_103010p = apli_x_kilos_103010p.toFixed(0);
            apli_x_ferti_103010p = apli_x_ferti_103010p.toFixed(0);
            $("#fertil_fosforo").text(apli_x_ferti_103010p + " (gr) de 10-30-10/planta = "+apli_x_kilos_103010p+ "kg 10-30-10p/ha");
		    }else{
		    //$("#fertil_fosforo").text("");
		      }
                
                
    		}
            setInterval(calculate_fertilizantes_p, 800);
            if (val_fosforo<10)// ahora sigue la estimación
            {
            $( "#inter_fosforo" ).text("Est: "+ " Muy Bajo");
            }
            else if(val_fosforo>=10 & val_fosforo<=20)
            {
           $( "#inter_fosforo" ).text("Est: "+ "Bajo");
            }else if(val_fosforo>=20 & val_fosforo<=40)
            {
            $( "#inter_fosforo" ).text("Est: "+ "Medio");
            }else if(val_fosforo>=40)
            {
            $( "#inter_fosforo" ).text("Est: "+ "Alto");
            }
            if( $(this).val() == '' ) {
           $( "#inter_fosforo" ).text("Est: "+ "Val" );
            }
		 //FIN CALCULO PARA FOSFORO
		 	
    		}
    setInterval(calculo_fosforo, 3000);
	
	
	function calculo_calcio(){
	//INICIO CALCULO PARA CALCIO{
		     var val_calcio = parseFloat($("#calcio").val());    
            val_calcio.value = (val_calcio.value + '').replace(/[^0-9.]/g, '');   
				  var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			    //condicional para sacar el Ca en el suelo
			           if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
						{
					var calcio_suelo = 0;
					calcio_suelo = val_calcio * 200;
			  		calcio_suelo = calcio_suelo.toFixed(1); //deja 1 número después de un punto
					$("#ca_suelo").text("Ca.Suelo: "+ calcio_suelo); // print calcio en suelo	    
						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					calcio_suelo = val_calcio * 320;
			  		calcio_suelo = calcio_suelo.toFixed(1); //deja 1 número después de un punto
					$("#ca_suelo").text("Ca.Suelo: "+ calcio_suelo); // print calcio en suelo			
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					calcio_suelo = val_calcio * 400;
			  		calcio_suelo = calcio_suelo.toFixed(1); //deja 1 número después de un punto
					$("#ca_suelo").text("Ca.Suelo: "+ calcio_suelo); // print calcio en suelo	

						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
 
					calcio_suelo = val_calcio * 520;
			  		calcio_suelo = calcio_suelo.toFixed(1); //deja 1 número después de un punto
					$("#ca_suelo").text("Ca.Suelo: "+ calcio_suelo); // print calcio en suelo	
						}
				var tipo_textura = $("#textura").attr('name'); // get textura valor    
			   var ca_aprovechable= 0;
			 if (tipo_textura == 1.0){
			  ca_aprovechable = calcio_suelo / 10;
			 }else if (tipo_textura == 2.0){
			 ca_aprovechable = calcio_suelo / 8;
			 }else if(tipo_textura == 2.6){
			 ca_aprovechable = calcio_suelo / 10;	 
			 }
			 ca_aprovechable = ca_aprovechable.toFixed(1);
			$("#ca_aprovechable").text("Ca.Apro: "+ ca_aprovechable); // print calcio aprovechable  
			var RC_CALCIO = $("#RC_CALCIO").val(); //get requerimiento nutricional 
			   var nf_calcio = RC_CALCIO - ca_aprovechable;
			   nf_calcio = nf_calcio /75*100;
  			   nf_calcio = nf_calcio.toFixed(1);
			   $("#ca_necesidad").text("N.Apli CaKg/Ha: "+ nf_calcio);
                var nf_aplicar_x_planta = nf_calcio * 1000 / numero_plantas; //calcular necesidad aplicar x planta
                nf_aplicar_x_planta = nf_aplicar_x_planta.toFixed(2);
                $("#cantidad_xplanta_ca").text("Cant. x planta: "+ nf_aplicar_x_planta+"/gr");
                var recomen_x_planta_momento = nf_aplicar_x_planta / fracc_mom_menor;
                var momento_seleccionado = $('option:selected', '#estado_fenologico').attr('value');
        
                if (momento_seleccionado == 1){ // VERIFICAR QUE MOMENTO FENOLÓGICO ELIGIÓ  
                    var  gr_momento1 = recomen_x_planta_momento * 1;
                    gr_momento1 = gr_momento1.toFixed(0)
                    $('#recomen_x_momento_ca').text("Necesidad aplicar x planta Ca: " +gr_momento1+" gr");
                    $('#rec_x_mom_ca').val(gr_momento1); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 2){
                    var  gr_momento2 = recomen_x_planta_momento * 1;
                    gr_momento2 = gr_momento2.toFixed(0)
                    $('#recomen_x_momento_ca').text("Necesidad aplicar x planta Ca: " +gr_momento2+" gr");
                    $('#rec_x_mom_ca').val(gr_momento2); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 3){
                    var  gr_momento3 = recomen_x_planta_momento * 1;
                     gr_momento3 = gr_momento3.toFixed(0)
                    $('#recomen_x_momento_ca').text("Necesidad aplicar x planta Ca: " +gr_momento3+" gr");
                    $('#rec_x_mom_ca').val(gr_momento3); //asignar el resultado para realizar otras despues
                }
			  if (nf_calcio<0){	
				 $('#ca_mensaje').text(' Valor negativo aplicar: '+ RC_CALCIO+ ' Kg/Ha de Ca ');  
                    //esta linea sig es para recomendar si la necesidad aplicar es negativa con el requerimiento
                   var necesidad_aplicar_x_planta = RC_CALCIO * 1000 / 3 / numero_plantas;
                   necesidad_aplicar_x_planta = necesidad_aplicar_x_planta.toFixed(0);
                   $('#recomen_x_momento_ca').text("Necesidad aplicar x planta Ca: " +necesidad_aplicar_x_planta+" gr");
                   $('#rec_x_mom_ca').val(necesidad_aplicar_x_planta); //asignar el resultado para realizar otras despues
			   }else{
			 $('#ca_mensaje').text('');   
			   } 
            if (val_calcio<2)
            {
            $( "#inter_calcio" ).text("Est: "+ "Muy Bajo" );
            }
            else if(val_calcio>=2 & val_calcio<=3)
            {
           $( "#inter_calcio" ).text("Est: "+ "Bajo" );
            }else if(val_calcio>3 & val_calcio<=6)
            {
            $( "#inter_calcio" ).text("Est: "+ "Medio" );
            }else if(val_calcio>=6)
            {
            $( "#inter_calcio" ).text("Est: "+ "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_calcio" ).text("Est: "+ "Val" );
            }
		 //FIN CALCULO PARA CALCIO }	
	}
	setInterval(calculo_calcio, 3000);
            //esta funcion me permite calcular los fertilizantes para calcio
            function calculate_fertilizantes_ca(){   
            var val_nitrabor_ca = $("#nitrabor_ca").val();
            var val_nitrato_ca = $("#nitrato_ca").val();
            var val_final_recomendacion_ca = $("#rec_x_mom_ca").val();    
            var numero_plantas = $("#N_plantas_siembra").val();
            //calculo del fertilizante para (N) en NITROMAG 
 	        if ( $('#nitrabor_ca').is(':checked')){
			var apli_x_fertilizante_nitrabor_ca = val_final_recomendacion_ca *  100 / val_nitrabor_ca;
            var apli_x_kilos_nitrabor_ca = apli_x_fertilizante_nitrabor_ca * numero_plantas /1000;
            apli_x_kilos_nitrabor_ca = apli_x_kilos_nitrabor_ca.toFixed(0);
            apli_x_fertilizante_nitrabor_ca = apli_x_fertilizante_nitrabor_ca.toFixed(0);
            $("#fertil_calcio").text(apli_x_fertilizante_nitrabor_ca + " (gr) de Nitrabor/planta = "+apli_x_kilos_nitrabor_ca+ "kg Nitrabor/ha");
		    }else{
		      }           
            //calculo del fertilizante para (N) en NITRATO DE CALCIO
 	        if ( $('#nitrato_ca').is(':checked')){
			var apli_x_fertilizante_nitrato_ca = val_final_recomendacion_ca *  100 / val_nitrato_ca;
            var apli_x_kilos_nitrato_ca = apli_x_fertilizante_nitrato_ca * numero_plantas /1000;
            apli_x_kilos_nitrato_ca = apli_x_kilos_nitrato_ca.toFixed(0);
            apli_x_fertilizante_nitrato_ca = apli_x_fertilizante_nitrato_ca.toFixed(0);
            $("#fertil_calcio").text(apli_x_fertilizante_nitrato_ca + " (gr) de Nitrato de Ca/planta = "+apli_x_kilos_nitrato_ca+ "kg Nitrato de Ca/ha");
		    }else{
		      } 
            
            }
            setInterval(calculate_fertilizantes_ca, 800);
	
	function calculo_magnesio(){
	//INICIO CALCULO PARA MAGNESIO{
	         var val_magnecio = parseFloat($('#magnecio').val());    
            val_magnecio.value = (val_magnecio.value + '').replace(/[^0-9.]/g, '');     
			   	 //condicional para sacar el Mg en el suelo
			   	var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			     if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
					 {
					var mg_suelo = 0;
					mg_suelo = val_magnecio * 120;
			  		mg_suelo = mg_suelo.toFixed(1); //deja 1 número después de un punto
				   $("#mg_suelo").text("Mg.Suelo: "+ mg_suelo); // print Magnesio en el suelo
						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					mg_suelo = val_magnecio * 192;
			  		mg_suelo = mg_suelo.toFixed(1); //deja 1 número después de un punto
				   $("#mg_suelo").text("Mg.Suelo: "+ mg_suelo); // print Magnesio en el suelo			
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					mg_suelo = val_magnecio * 240;
			  		mg_suelo = mg_suelo.toFixed(1); //deja 1 número después de un punto
				   $("#mg_suelo").text("Mg.Suelo: "+ mg_suelo); // print Magnesio en el suelo	

						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
 					mg_suelo = val_magnecio * 312;
			  		mg_suelo = mg_suelo.toFixed(1); //deja 1 número después de un punto
				   $("#mg_suelo").text("Mg.Suelo: "+ mg_suelo); // print Magnesio en el suelo
						}
			   var tipo_textura = $("#textura").attr('name'); // get textura valor
			 var mg_aprovechable = 0;
			   if (tipo_textura == 1.0){
				  mg_aprovechable = mg_suelo / 5;
			   }else if (tipo_textura == 2.0){
				   mg_aprovechable = mg_suelo / 4;
			   }else if (tipo_textura == 2.6){
				   mg_aprovechable = mg_suelo / 5;
			   } 
			  mg_aprovechable = mg_aprovechable.toFixed(1);
			  $("#mg_aprovechable").text("Mg.Apro: "+ mg_aprovechable); // print Magnesio aprovechable
			   var RC_MAGNESIO = $("#RC_MAGNESIO").val(); //get requerimiento nutricional 
			   var nf_magnesio = RC_MAGNESIO - mg_aprovechable;
			   nf_magnesio = nf_magnesio /55 * 100;
  			   nf_magnesio = nf_magnesio.toFixed(1);
			   $("#mg_necesidad").text("N.Apli  MgKg/Ha: "+ nf_magnesio);
                var nf_aplicar_x_planta = nf_magnesio * 1000 / numero_plantas; //calcular necesidad aplicar x planta
                nf_aplicar_x_planta = nf_aplicar_x_planta.toFixed(1);
                $("#cantidad_xplanta_mg").text("Cant. x planta: "+ nf_aplicar_x_planta+"/gr");
                var recomen_x_planta_momento = nf_aplicar_x_planta / fracc_mom_menor;
                var momento_seleccionado = $('option:selected', '#estado_fenologico').attr('value');
        
                if (momento_seleccionado == 1){ // VERIFICAR QUE MOMENTO FENOLÓGICO ELIGIÓ  
                    var  gr_momento1 = recomen_x_planta_momento * 1;
                    gr_momento1 = gr_momento1.toFixed(0)
                    $('#recomen_x_momento_mg').text("Necesidad aplicar x planta Mg: " +gr_momento1+" gr");
                    $('#rec_x_mom_mg').val(gr_momento1); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 2){
                    var  gr_momento2 = recomen_x_planta_momento * 1;
                    gr_momento2 = gr_momento2.toFixed(0)
                    $('#recomen_x_momento_mg').text("Necesidad aplicar x planta Mg: " +gr_momento2+" gr");
                    $('#rec_x_mom_mg').val(gr_momento2); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 3){
                    var  gr_momento3 = recomen_x_planta_momento * 1;
                     gr_momento3 = gr_momento3.toFixed(0)
                    $('#recomen_x_momento_mg').text("Necesidad aplicar x planta Mg: " +gr_momento3+" gr");
                    $('#rec_x_mom_mg').val(gr_momento3); //asignar el resultado para realizar otras despues
                }
			   if (nf_magnesio<0){			  
 			   $('#mg_mensaje').text('Valor negativo aplicar: ' + RC_MAGNESIO + ' Kg/Ha de Mg');   
                   //esta linea sig es para recomendar si la necesidad aplicar es negativa con el requerimiento
                   var necesidad_aplicar_x_planta = RC_MAGNESIO *1000 / 3 / numero_plantas;
                   necesidad_aplicar_x_planta = necesidad_aplicar_x_planta.toFixed(0);
                   $('#recomen_x_momento_mg').text("Necesidad aplicar x planta Mg: " +necesidad_aplicar_x_planta+" gr");
                   $('#rec_x_mom_mg').val(necesidad_aplicar_x_planta); //asignar el resultado para realizar otras despues
			   } else{
				$('#mg_mensaje').text('');   
			   }
            if (val_magnecio<0.5)
            {
            $( "#inter_magnecio" ).text("Est: "+ "Muy Bajo" );
            }
            else if(val_magnecio>=0.5 & val_magnecio<=1.2)
            {
           $( "#inter_magnecio" ).text("Est: "+ "Bajo" );
            }else if(val_magnecio>1.2 & val_magnecio<=1.8)
            {
            $( "#inter_magnecio" ).text("Est: "+ "Medio" );
            }else if(val_magnecio>=1.8)
            {
            $( "#inter_magnecio" ).text("Est: "+ "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_magnecio" ).text("Est: "+ "Val" );
            }       
	//FIN CALCULO PARA MAGNESIO }	
	}
	setInterval(calculo_magnesio, 3000);	
	       //esta funcion me permite calcular los fertilizantes para magnesio
            function calculate_fertilizantes_mg(){    
            var val_nitromag_mg = $("#nitromag_mg").val();
            var val_microman_mg = $("#microman_mg").val();
            var val_micromagnesio_mg = $("#micromagnesio_mg").val();
            var val_final_recomendacion_mg = $("#rec_x_mom_mg").val();    
            var numero_plantas = $("#N_plantas_siembra").val();
            //calculo del fertilizante para (N) en NITROMAG 
 	        if ( $('#nitromag_mg').is(':checked')){
			var apli_x_fertilizante_nitromag_mg = val_final_recomendacion_mg *  100 / val_nitromag_mg;
            var apli_x_kilos_nitromag_mg = apli_x_fertilizante_nitromag_mg * numero_plantas /1000;
            apli_x_kilos_nitromag_mg = apli_x_kilos_nitromag_mg.toFixed(0);
            apli_x_fertilizante_nitromag_mg = apli_x_fertilizante_nitromag_mg.toFixed(0);
            $("#fertil_magnesio").text(apli_x_fertilizante_nitromag_mg + " (gr) de Nitromag/planta = "+apli_x_kilos_nitromag_mg+ "kg Nitromag/ha");
		    }else{
		      }          
            //calculo del fertilizante para (N) en MICROMAN 
 	        if ( $('#microman_mg').is(':checked')){
			var apli_x_fertilizante_microman_mg = val_final_recomendacion_mg *  100 / val_microman_mg;
            var apli_x_kilos_microman_mg = apli_x_fertilizante_microman_mg * numero_plantas /1000;
            apli_x_kilos_microman_mg = apli_x_kilos_microman_mg.toFixed(0);
            apli_x_fertilizante_microman_mg = apli_x_fertilizante_microman_mg.toFixed(0);
            $("#fertil_magnesio").text(apli_x_fertilizante_microman_mg + " (gr) de Microman/planta = "+apli_x_kilos_microman_mg+ "kg Microman/ha");
		    }else{
		      }           
            //calculo del fertilizante para (N) en MICROMAN 
 	        if ( $('#micromagnesio_mg').is(':checked')){
			var apli_x_fertilizante_micromagnesio_mg = val_final_recomendacion_mg *  100 / val_micromagnesio_mg;
            var apli_x_kilos_micromagnesio_mg = apli_x_fertilizante_micromagnesio_mg * numero_plantas /1000;
            apli_x_kilos_micromagnesio_mg = apli_x_kilos_micromagnesio_mg.toFixed(0);
            apli_x_fertilizante_micromagnesio_mg = apli_x_fertilizante_micromagnesio_mg.toFixed(0);
            $("#fertil_magnesio").text(apli_x_fertilizante_micromagnesio_mg + " (gr) de Micromagnesio/planta = "+apli_x_kilos_micromagnesio_mg+ "kg Micromagnesio/ha");
		    }else{
		      }  
            
            }
            setInterval(calculate_fertilizantes_mg, 800);
    
    
	function calculo_potasio(){
	//INICIO CALCULO PARA POTASIO{
            var val_potasio = parseFloat($('#potasio').val());    
            val_potasio.value = (val_potasio.value + '').replace(/[^0-9.]/g, '');    
			   	var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			     if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
					 {
					var k_suelo = 0;
					k_suelo = val_potasio * 390;
			  		k_suelo = k_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#k_suelo").text("K.Suelo: "+ k_suelo); // print potasio en el suelo
						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					k_suelo = val_potasio * 624;
			  		k_suelo = k_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#k_suelo").text("K.Suelo: "+ k_suelo); // print potasio en el suelo		
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					k_suelo = val_potasio * 780;
			  		k_suelo = k_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#k_suelo").text("K.Suelo: "+ k_suelo); // print potasio en el suelo

						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
					k_suelo = val_potasio *1014;
			  		k_suelo = k_suelo.toFixed(1); //deja 1 número después de un punto
				   	$("#k_suelo").text("K.Suelo: "+ k_suelo); // print potasio en el suelo
						}
 
			  
            var tipo_textura = $("#textura").attr('name'); // get textura valor
			var k_asimilable = k_suelo * 1.2046; 
			k_asimilable = k_asimilable.toFixed(1); //quitar decimales de la derecha
        
			$("#k_asimilable").text("K2O: "+ k_asimilable); // print potasio asimilable
			 var k_aprovechable = 0;
			  if (tipo_textura == 2.0 ){
			 k_aprovechable =  k_asimilable / 2.0;
			   }else if(tipo_textura == 1.0){
				  k_aprovechable =  k_asimilable / 1.7;
			   }else if (tipo_textura == 2.6){
				   k_aprovechable =  k_asimilable / 1.8;
			   }else{
				 //  alert("Por favor eliga una textura de suelo");
				 // $('ul.tabs').tabs('select_tab', 'vars_sign');
			   }
			 var k_final = k_aprovechable.toFixed(1); //quitar decimales de la derecha
			   $("#k_aprovechable").text("K.Apro: " + k_final);   
			   
			   var RC_POTASIO = $("#RC_POTASIO").val(); //get requerimiento nutricional 
			   var nf_potasio = RC_POTASIO - k_aprovechable;
			   nf_potasio = nf_potasio /55*100;
			   nf_potasio = nf_potasio.toFixed(1);
			   $("#k_necesidad").text("N.Apli K2OKg/Ha: "+ nf_potasio);
                var nf_aplicar_x_planta = nf_potasio * 1000 / numero_plantas; //calcular necesidad aplicar x planta
                nf_aplicar_x_planta = nf_aplicar_x_planta.toFixed(1);
                $("#cantidad_xplanta_k").text("Cant. x planta: "+ nf_aplicar_x_planta+"/gr");
                var recomen_x_planta_momento = nf_aplicar_x_planta / fracc_mom_mayor;
                var momento_seleccionado = $('option:selected', '#estado_fenologico').attr('value');
        
                if (momento_seleccionado == 1){ // VERIFICAR QUE MOMENTO FENOLÓGICO ELIGIÓ  
                    var  gr_momento1 = recomen_x_planta_momento * 2;
                    gr_momento1 = gr_momento1.toFixed(0)
                    $('#recomen_x_momento_k').text("Necesidad aplicar x planta K: " +gr_momento1+" gr");
                    $('#rec_x_mom_k').val(gr_momento1); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 2){
                    var  gr_momento2 = recomen_x_planta_momento * 1;
                    gr_momento2 = gr_momento2.toFixed(0)
                    $('#recomen_x_momento_k').text("Necesidad aplicar x planta K: " +gr_momento2+" gr");
                    $('#rec_x_mom_k').val(gr_momento2); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 3){
                    var  gr_momento3 = recomen_x_planta_momento * 1;
                     gr_momento3 = gr_momento3.toFixed(0)
                    $('#recomen_x_momento_k').text("Necesidad aplicar x planta K: " +gr_momento3+" gr");
                    $('#rec_x_mom_k').val(gr_momento3); //asignar el resultado para realizar otras despues
                }
        
			   if (nf_potasio<0){	
				 $('#k_mensaje').text('Valor negativo aplicar: ' + RC_POTASIO + ' Kg/Ha de K');   
                   //esta linea sig es para recomendar si la necesidad aplicar es negativa con el requerimiento
                   var necesidad_aplicar_x_planta = RC_POTASIO *1000 / fracc_mom_mayor / numero_plantas;
                   necesidad_aplicar_x_planta = necesidad_aplicar_x_planta.toFixed(0);
                   $('#recomen_x_momento_k').text("Necesidad aplicar x planta K: " +necesidad_aplicar_x_planta+" gr");
                   $('#rec_x_mom_k').val(necesidad_aplicar_x_planta); //asignar el resultado para realizar otras despues
                   
			   } else{
				 $('#k_mensaje').text('');     
			   }
            if (val_potasio<0.2)
            {
            $( "#inter_potasio" ).text("Est: "+ "Muy Bajo" );
            }
            else if(val_potasio>=0.2 & val_potasio<=0.4)
            {
           $( "#inter_potasio" ).text("Est: "+ "Bajo" );
            }else if(val_potasio>0.4 & val_potasio<=0.6)
            {
            $( "#inter_potasio" ).text("Est: "+ "Medio" );
            }else if(val_potasio>0.6 & val_potasio<=1)
            {
            $( "#inter_potasio" ).text("Est: "+ "Alto" );
            }else if(val_potasio>1)
            {
            $( "#inter_potasio" ).text("Est: "+ "Excesivo");
            }
            if( $(this).val() == '' ) {
           $( "#inter_potasio" ).text("Est: "+ "Val" );
            }      
	//FIN CALCULO PARA POTASIO }	
	}
	setInterval(calculo_potasio, 3000);	
            //esta funcion me permite calcular los fertilizantes para potasio
            function calculate_fertilizantes_k(){
                
            var val_kcl_k = $("#kcl_k").val();
            var val_sulf_pota_k = $("#sulfa_pota_k").val();
            var val_nitra_pota_k = $("#nitra_pota_k").val();
            var val_final_recomendacion_k = $("#rec_x_mom_k").val();    
            var numero_plantas = $("#N_plantas_siembra").val();
            //calculo del fertilizante para (N) en KCL 
 	        if ( $('#kcl_k').is(':checked')){
			var apli_x_fertilizante_kcl_k = val_final_recomendacion_k *  100 / val_kcl_k;
            var apli_x_kilos_kcl_k = apli_x_fertilizante_kcl_k * numero_plantas /1000;
            apli_x_kilos_kcl_k = apli_x_kilos_kcl_k.toFixed(0);
            apli_x_fertilizante_kcl_k = apli_x_fertilizante_kcl_k.toFixed(0);
            $("#fertil_potasio").text(apli_x_fertilizante_kcl_k + " (gr) de KCL/planta = "+apli_x_kilos_kcl_k+ "kg KCL/ha");
		    }else{
		      }            
            //calculo del fertilizante para (N) en SULFATO DE POTASIO 
 	        if ( $('#sulfa_pota_k').is(':checked')){
			var apli_x_fertilizante_sulf_pota_k = val_final_recomendacion_k *  100 / val_sulf_pota_k;
            var apli_x_kilos_sulf_pota_k = apli_x_fertilizante_sulf_pota_k * numero_plantas /1000;
            apli_x_kilos_sulf_pota_k = apli_x_kilos_sulf_pota_k.toFixed(0);
            apli_x_fertilizante_sulf_pota_k = apli_x_fertilizante_sulf_pota_k.toFixed(0);
            $("#fertil_potasio").text(apli_x_fertilizante_sulf_pota_k + " (gr) de Sulfato de potasio/planta = "+apli_x_kilos_sulf_pota_k+ "kg Sulfato de potasio/ha");
		    }else{
		      }           
            //calculo del fertilizante para (N) en NITRATO DE POTASIO 
 	        if ( $('#nitra_pota_k').is(':checked')){
			var apli_x_fertilizante_nitra_pota_k = val_final_recomendacion_k *  100 / val_nitra_pota_k;
            var apli_x_kilos_nitra_pota_k = apli_x_fertilizante_nitra_pota_k * numero_plantas /1000;
            apli_x_kilos_nitra_pota_k = apli_x_kilos_nitra_pota_k.toFixed(0);
            apli_x_fertilizante_nitra_pota_k = apli_x_fertilizante_nitra_pota_k.toFixed(0);
            $("#fertil_potasio").text(apli_x_fertilizante_nitra_pota_k + " (gr) de Nitrato de potasio/planta = "+apli_x_kilos_nitra_pota_k+ "kg Nitrato de potasio/ha");
		    }else{
		      } 
            }
            setInterval(calculate_fertilizantes_k, 800);
	
	function calculo_sodio(){
	//INICIO CALCULO PARA SODIO{
        
            var val_sodio = parseFloat($('#sodio').val());    
            val_sodio.value = (val_sodio.value + '').replace(/[^0-9.]/g, '');    
                var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			    //condicional para sacar el Na en el suelo
			           if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
						{
					var na_suelo = 0;	
					na_suelo = val_sodio * 1;		
			  		na_suelo = na_suelo.toFixed(1); //deja 1 número después de un punto
					$("#na_suelo").text("Na.Suelo: " + na_suelo); // imprime el resultado de Sodio en suelo

						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					na_suelo = val_sodio * 1.6;		
			  		na_suelo = na_suelo.toFixed(1); //deja 1 número después de un punto
					$("#na_suelo").text("Na.Suelo: " + na_suelo); // imprime el resultado de Sodio en suelo
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					na_suelo = val_sodio * 2.0;		
			  		na_suelo = na_suelo.toFixed(1); //deja 1 número después de un punto
					$("#na_suelo").text("Na.Suelo: " + na_suelo); // imprime el resultado de Sodio en suelo
						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
					na_suelo = val_sodio * 2.6;		
			  		na_suelo = na_suelo.toFixed(1); //deja 1 número después de un punto
					$("#na_suelo").text("Na.Suelo: " + na_suelo); // imprime el resultado de Sodio en suelo
						}
               
               
            if(val_sodio<0.1)
            {
           $( "#inter_sodio" ).text( "Bajo" );
            }else if(val_sodio>=0.1 & val_sodio<=0.5)
            {
            $( "#inter_sodio" ).text( "Medio" );
            }else if(val_sodio>0.5)
            {
            $( "#inter_sodio" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_sodio" ).text( "Val" ).addClass('black-text');
            }  
	//FIN CALCULO PARA SODIO }	
	}
	setInterval(calculo_sodio, 3000);		
    
    function calculo_azufre(){
	//INICIO CALCULO PARA AZUFRE{
        
            var val_azufre = parseFloat($('#azufre').val());    
            val_azufre.value = (val_azufre.value + '').replace(/[^0-9.]/g, '');    
            var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			    //condicional para sacar el S en el suelo
			           if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
						{
					var s_suelo = 0;	
					s_suelo = val_azufre * 1;		
			  		s_suelo = s_suelo.toFixed(1); //deja 1 número después de un punto
					$("#s_suelo").text("S.Suelo: " + s_suelo); // imprime el resultado de Azufre en suelo

						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					s_suelo = val_azufre * 1.6;		
			  		s_suelo = s_suelo.toFixed(1); //deja 1 número después de un punto
					$("#s_suelo").text("S.Suelo: " + s_suelo); // imprime el resultado de Azufre en suelo
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					s_suelo = val_azufre * 2.0;		
			  		s_suelo = s_suelo.toFixed(1); //deja 1 número después de un punto
					$("#s_suelo").text("S.Suelo: " + s_suelo); // imprime el resultado de Azufre en suelo
						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
					s_suelo = val_azufre * 2.6;		
			  		s_suelo = s_suelo.toFixed(1); //deja 1 número después de un punto
					$("#s_suelo").text("S.Suelo: " + s_suelo); // imprime el resultado de Azufre en suelo
						}
               var tipo_textura = $("#textura").attr('name'); // get textura valor
			 var s_aprovechable = 0;
			  if (tipo_textura == 2.0 ){
			 s_aprovechable =  s_suelo / 1.5;
			   }else if(tipo_textura == 1.0){
				  s_aprovechable =  s_suelo / 1.5;
			   }else if (tipo_textura == 2.6){
				   s_aprovechable =  s_suelo / 1.5;
			   }else{
				 //  alert("Por favor eliga una textura de suelo");
				 // $('ul.tabs').tabs('select_tab', 'vars_sign');
			   }
 				s_aprovechable = s_aprovechable.toFixed(1); //quitar decimales de la derecha dejar uno  
               			   	$("#s_aprovechable").text("S.Apro: " + s_aprovechable); // imprime el resultado de Azufre aprovechable
			   var RC_AZUFRE = $("#RC_AZUFRE").val(); //get requerimiento nutricional 
			   if (RC_AZUFRE <=0){
				$("#s_necesidad").text("No Req");   
			   }else{
			   var nf_azufre = RC_AZUFRE - s_aprovechable;
			   nf_azufre = nf_azufre /70*100;
			   nf_azufre = nf_azufre.toFixed(1);
			   $("#s_necesidad").text("NF.S Kg K2O5/Ha: "+ nf_azufre);
               if (nf_azufre<0){
                $('#s_mensaje').text('Valor negativo aplicar: ' + RC_AZUFRE + ' Kg/Ha de S');   
			   }else{
			  $('#s_mensaje').text('');     
			   }
			   
				   
			   }
            if(val_azufre<8)
            {
           $( "#inter_azufre" ).text("Est: " +"Bajo" );
            }else if(val_azufre>=8 & val_azufre<=16)
            {
            $( "#inter_azufre" ).text("Est: " + "Medio" );
            }else if(val_azufre>16)
            {
            $( "#inter_azufre" ).text("Est: " + "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_azufre" ).text( "Val" );
            }
	//FIN CALCULO PARA AZUFRE }	
	}
	setInterval(calculo_azufre, 3000);	 
    
    function calculo_manganeso(){
	//INICIO CALCULO PARA MANGANESO{
        
            var val_manganeso = parseFloat($('#manganeso').val());    
            val_manganeso.value = (val_manganeso.value + '').replace(/[^0-9.]/g, '');    
	       var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			    //condicional para sacar el Mn en el suelo
			           if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
						{
					var mn_suelo = 0;	
					mn_suelo = val_manganeso * 1.0;		
			  		mn_suelo = mn_suelo.toFixed(1); //deja 1 número después de un punto
					$("#mn_suelo").text("Mn.Suelo: " + mn_suelo); // imprime el resultado de Azufre en suelo

						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					mn_suelo = val_manganeso * 1.6;		
			  		mn_suelo = mn_suelo.toFixed(1); //deja 1 número después de un punto
					$("#mn_suelo").text("Mn.Suelo: " + mn_suelo); // imprime el resultado de Azufre en suelo
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					mn_suelo = val_manganeso * 2.0;		
			  		mn_suelo = mn_suelo.toFixed(1); //deja 1 número después de un punto
					$("#mn_suelo").text("Mn.Suelo: " + mn_suelo); // imprime el resultado de Azufre en suelo
						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
					mn_suelo = val_manganeso * 2.6;		
			  		mn_suelo = mn_suelo.toFixed(1); //deja 1 número después de un punto
					$("#mn_suelo").text("Mn.Suelo: " + mn_suelo); // imprime el resultado de Azufre en suelo
						}
               var tipo_textura = $("#textura").attr('name'); // get textura valor
			 var mn_aprovechable = 0;
			  if (tipo_textura == 2.0 ){
			 mn_aprovechable =  mn_suelo / 25.0;
			   }else if(tipo_textura == 1.0){
				  mn_aprovechable =  mn_suelo / 25.0;
			   }else if (tipo_textura == 2.6){
				   mn_aprovechable =  mn_suelo / 25.0;
			   }else{
				 //  alert("Por favor eliga una textura de suelo");
				 // $('ul.tabs').tabs('select_tab', 'vars_sign');
			   } 
			     mn_aprovechable = mn_aprovechable.toFixed(2);
            $("#mn_aprovechable").text("Mn.Apro: " + mn_aprovechable); // imprime el resultado de MANGANESO aprovechable
			   var RC_MANGANESO = $("#RC_MANGANESO").val(); //get requerimiento nutricional 
			   if (RC_MANGANESO <=0){
				$("#mn_necesidad").text("No Req");   
			   }else{
			   var nf_manganeso = RC_MANGANESO - mn_aprovechable;
			   nf_manganeso = nf_manganeso /8*100;
			   nf_manganeso = nf_manganeso.toFixed(1);
			   $("#mn_necesidad").text("NF.Mn Kg K2O5/Ha: "+ nf_manganeso); 
                if (nf_manganeso<0){
				$('#mn_mensaje').text('Valor negativo aplicar: ' + RC_MANGANESO + ' Kg/Ha de Mn');   
			   }else{
			  $('#mn_mensaje').text('');     
			   }   
			   }
			   
            if(val_manganeso<5)
            {
           $( "#inter_manganeso").text("Est: " +"Bajo" );
            }else if(val_manganeso>=5 & val_manganeso<=10)
            {
            $( "#inter_manganeso").text("Est: " +"Medio" );
            }else if(val_manganeso>10)
            {
            $( "#inter_manganeso").text("Est: " + "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_manganeso" ).text( "Val" );
            }
	//FIN CALCULO PARA MANGANESO }	
	}
	setInterval(calculo_manganeso, 3000);	
    
    function calculo_boro(){ 
	//INICIO CALCULO PARA BORO{
            var val_boro = parseFloat($('#boro').val());    
            val_boro.value = (val_boro.value + '').replace(/[^0-9.]/g, '');
				       var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			    //condicional para sacar el Mn en el suelo
			           if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
						{
					var b_suelo = 0;	
					b_suelo = b_suelo * 1.0;		
			  		b_suelo = b_suelo.toFixed(1); //deja 1 número después de un punto
					$("#b_suelo").text("Zn.Suelo: " + b_suelo); // imprime el resultado de Azufre en suelo

						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					b_suelo = val_boro * 1.6;		
			  		b_suelo = b_suelo.toFixed(1); //deja 1 número después de un punto
					$("#b_suelo").text("Zn.Suelo: " + b_suelo); // imprime el resultado de Azufre en suelo
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					b_suelo = val_boro * 2.0;		
			  		b_suelo = b_suelo.toFixed(1); //deja 1 número después de un punto
					$("#b_suelo").text("Zn.Suelo: " + b_suelo); // imprime el resultado de Azufre en suelo
						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
					b_suelo = val_boro * 2.6;		
			  		b_suelo = b_suelo.toFixed(1); //deja 1 número después de un punto
					$("#b_suelo").text("B.Suelo: " + b_suelo); // imprime el resultado de Azufre en suelo
						}
			 var tipo_textura = $("#textura").attr('name'); // get textura valor
			  var b_aprovechable = 0; 
			   if (tipo_textura == 2.0 ){
			 	b_aprovechable =  b_suelo / 8.0;
			   }else if(tipo_textura == 1.0){
				b_aprovechable =  b_suelo / 10.0;
			   }else if (tipo_textura == 2.6){
				   b_aprovechable =  b_suelo / 10.0;
			   }else{
				 //  alert("Por favor eliga una textura de suelo");
				 // $('ul.tabs').tabs('select_tab', 'vars_sign');
			   }
			   b_aprovechable = b_aprovechable.toFixed(2);
			   $("#b_aprovechable").text("B.Apro: "+ b_aprovechable);
			   var RC_BORO = $("#RC_BORO").val(); //get requerimiento nutricional 
			   var nf_boro = RC_BORO - b_aprovechable;
			   nf_boro = nf_boro /10*100;
			   nf_boro = nf_boro.toFixed(1);
			   $("#b_necesidad").text("N.Apli Kg B/Ha: "+ nf_boro);
                var nf_aplicar_x_planta = nf_boro * 1000 / numero_plantas; //calcular necesidad aplicar x planta
                nf_aplicar_x_planta = nf_aplicar_x_planta.toFixed(1);
                $("#cantidad_xplanta_b").text("Cant. x planta: "+ nf_aplicar_x_planta+"/gr");
        
                var recomen_x_planta_momento = nf_aplicar_x_planta / fracc_mom_menor;
                var momento_seleccionado = $('option:selected', '#estado_fenologico').attr('value');
        
                if (momento_seleccionado == 1){ // VERIFICAR QUE MOMENTO FENOLÓGICO ELIGIÓ  
                    var  gr_momento1 = recomen_x_planta_momento * 1;
                    gr_momento1 = gr_momento1.toFixed(0)
                    $('#recomen_x_momento_b').text("Necesidad aplicar x planta B: " +gr_momento1+" gr");
                    $('#rec_x_mom_b').val(gr_momento1); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 2){
                    var  gr_momento2 = recomen_x_planta_momento * 1;
                    gr_momento2 = gr_momento2.toFixed(0)
                    $('#recomen_x_momento_b').text("Necesidad aplicar x planta B: " +gr_momento2+" gr");
                    $('#rec_x_mom_b').val(gr_momento2); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 3){
                    var  gr_momento3 = recomen_x_planta_momento * 1;
                     gr_momento3 = gr_momento3.toFixed(0)
                    $('#recomen_x_momento_b').text("Necesidad aplicar x planta B: " +gr_momento3+" gr");
                    $('#rec_x_mom_b').val(gr_momento3); //asignar el resultado para realizar otras despues
                }
			   if (nf_boro<0){
				$('#b_mensaje').text('Valor negativo aplicar: ' + RC_BORO + ' Kg/Ha de B');   
                    //esta linea sig es para recomendar si la necesidad aplicar es negativa con el requerimiento
                   var necesidad_aplicar_x_planta = RC_BORO * 1000 / 3 / numero_plantas;
                   necesidad_aplicar_x_planta = necesidad_aplicar_x_planta.toFixed(0);
                   $('#recomen_x_momento_b').text("Necesidad aplicar x planta B: " +necesidad_aplicar_x_planta+" gr");
                  $('#rec_x_mom_b').val(necesidad_aplicar_x_planta); //asignar el resultado para realizar otras despues
			   }else{
			  $('#b_mensaje').text('');     
			   }
			   
			   
            if(val_boro<0.3)
            {
           $( "#inter_boro").text("Est: " +"Bajo" );
            }else if(val_boro>=0.3 & val_boro<=0.6)
            {
            $( "#inter_boro").text("Est: " + "Medio" );
            }else if(val_boro>0.6)
            {
            $( "#inter_boro").text("Est: " + "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_boro" ).text( "Val" );
            }    
	//FIN CALCULO PARA BORO }	
	}
	setInterval(calculo_boro, 3000);
    
        function calculate_fertilizantes_b(){                
            var val_boro_gran = $("#boro_gran").val();            
            var val_final_recomendacion_b = $("#rec_x_mom_b").val();    
            var numero_plantas = $("#N_plantas_siembra").val();
            //calculo del fertilizante para (N) en NITROMAG 
 	        if ( $('#boro_gran').is(':checked')){
			var apli_x_fertilizante_boro_gran = val_final_recomendacion_b *  100 / val_boro_gran;
            var apli_x_kilos_boro_gran = apli_x_fertilizante_boro_gran * numero_plantas /1000;
            apli_x_kilos_boro_gran = apli_x_kilos_boro_gran.toFixed(0);
            apli_x_fertilizante_boro_gran = apli_x_fertilizante_boro_gran.toFixed(0);
            $("#fertil_boro").text(apli_x_fertilizante_boro_gran + " (gr) de Boro granulado/planta = "+apli_x_kilos_boro_gran+ "kg Boro granulado/ha");
		    }else{
		      } 
        
        }
        setInterval(calculate_fertilizantes_b, 800);
    
    
    function calculo_cobre(){ 
	//INICIO CALCULO PARA COBRE{
            var val_cobre = parseFloat($('#cobre').val());    
            val_cobre.value = (val_cobre.value + '').replace(/[^0-9.]/g, '');
		    var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			    //condicional para sacar el Cu en el suelo
			           if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
						{
					var cu_suelo = 0;	
					cu_suelo = val_cobre * 1.0;		
			  		cu_suelo = cu_suelo.toFixed(1); //deja 1 número después de un punto
					$("#cu_suelo").text("Cu.Suelo: " + cu_suelo); // imprime el resultado de Cobre en suelo

						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					cu_suelo = val_cobre * 1.6;		
			  		cu_suelo = cu_suelo.toFixed(1); //deja 1 número después de un punto
					$("#cu_suelo").text("Cu.Suelo: " + cu_suelo); // imprime el resultado de Cobre en suelo
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					cu_suelo = val_cobre * 2.0;		
			  		cu_suelo = cu_suelo.toFixed(1); //deja 1 número después de un punto
					$("#cu_suelo").text("Cu.Suelo: " + cu_suelo); // imprime el resultado de Cobre en suelo
						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
					cu_suelo = val_cobre * 2.6;		
			  		cu_suelo = cu_suelo.toFixed(1); //deja 1 número después de un punto
					$("#cu_suelo").text("Cu.Suelo: " + cu_suelo); // imprime el resultado de Cobre en suelo
						}
        
                    var tipo_textura = $("#textura").attr('name'); // get textura valor			   
                    var cu_aprovechable = 0; 
			   if (tipo_textura == 2.0 ){
			 	cu_aprovechable =  cu_suelo / 10.0;
			   }else if(tipo_textura == 1.0){
				cu_aprovechable =  cu_suelo / 10.0;
			   }else if (tipo_textura == 2.6){
				 cu_aprovechable =  cu_suelo / 10.0;
			   }else{
				 //  alert("Por favor eliga una textura de suelo");
				 // $('ul.tabs').tabs('select_tab', 'vars_sign');
			   }
               
                cu_aprovechable = cu_aprovechable.toFixed(1); //quitar decimales de la derecha dejar uno  
			   	$("#cu_aprovechable").text("Cu.Apro: " + cu_aprovechable); // imprime el resultado de Azufre aprovechable
			   var RC_COBRE = $("#RC_COBRE").val(); //get requerimiento nutricional 
			   if (RC_COBRE <=0){
				$("#cu_necesidad").text("No Req");   
			   }else{
			   var nf_cobre = RC_COBRE - cu_aprovechable;
			   nf_cobre = nf_cobre /20*100;
			   nf_cobre = nf_cobre.toFixed(1);
			   $("#cu_necesidad").text("NF.Cu Kg K2O5/Ha: "+ nf_cobre);
                if (nf_cobre<0){	
				$('#cu_mensaje').text('Valor negativo aplicar: ' + RC_COBRE + ' Kg/Ha de Cu');    
			   }else{
				$('#cu_mensaje').text('');     
			   }
				   
			   }
               
            if(val_cobre<2)
            {
           $( "#inter_cobre").text( "Bajo" );
            }else if(val_cobre>=2 & val_cobre<=4)
            {
            $( "#inter_cobre").text( "Medio" );
            }else if(val_cobre>4)
            {
            $( "#inter_cobre").text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_cobre" ).text( "Val" ).addClass('black-text');
            } 
        
	//FIN CALCULO PARA COBRE }	
	}
	setInterval(calculo_cobre, 3000);	
	
	
	function calculo_zinc(){
	//INICIO CALCULO PARA ZINC{
             var val_zinc = parseFloat($('#zinc').val());    
            val_zinc.value = (val_zinc.value + '').replace(/[^0-9.]/g, '');
	       var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			    //condicional para sacar el Zn en el suelo
			           if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
						{
					var zn_suelo = 0;	
					zn_suelo = zn_suelo * 1.0;		
			  		zn_suelo = zn_suelo.toFixed(1); //deja 1 número después de un punto
					$("#zn_suelo").text("Zn.Suelo: " + zn_suelo); // imprime el resultado de Azufre en suelo

						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					zn_suelo = val_zinc * 1.6;		
			  		zn_suelo = zn_suelo.toFixed(1); //deja 1 número después de un punto
					$("#zn_suelo").text("Zn.Suelo: " + zn_suelo); // imprime el resultado de Azufre en suelo
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					zn_suelo = val_zinc * 2.0;		
			  		zn_suelo = zn_suelo.toFixed(1); //deja 1 número después de un punto
					$("#zn_suelo").text("Zn.Suelo: " + zn_suelo); // imprime el resultado de Azufre en suelo
						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
					zn_suelo = val_zinc * 2.6;		
			  		zn_suelo = zn_suelo.toFixed(1); //deja 1 número después de un punto
					$("#zn_suelo").text("Zn.Suelo: " + zn_suelo); // imprime el resultado de Azufre en suelo
						}
            var tipo_textura = $("#textura").attr('name'); // get textura valor
 
			    var zn_aprovechable = 0; 
			   if (tipo_textura == 2.0 ){
			 	zn_aprovechable =  zn_suelo / 10.0;
			   }else if(tipo_textura == 1.0){
				zn_aprovechable =  zn_suelo / 10.0;
			   }else if (tipo_textura == 2.6){
				 zn_aprovechable =  zn_suelo / 10.0;
			   }else{
				 //  alert("Por favor eliga una textura de suelo");
				 // $('ul.tabs').tabs('select_tab', 'vars_sign');
			   }
			   zn_aprovechable = zn_aprovechable.toFixed(2);
			   $("#zn_aprovechable").text("Zn.Apro: "+ zn_aprovechable); 
			   	var RC_ZINC = $("#RC_ZINC").val(); //get requerimiento nutricional 
			   var nf_zinc = RC_ZINC - zn_aprovechable;
			   nf_zinc = nf_zinc /20*100;
			   nf_zinc = nf_zinc.toFixed(1);
			   $("#zn_necesidad").text("N.Aplica ZnKg/Ha: "+ nf_zinc);
                var nf_aplicar_x_planta = nf_zinc * 1000 / numero_plantas; //calcular necesidad aplicar x planta
                nf_aplicar_x_planta = nf_aplicar_x_planta.toFixed(1);
                $("#cantidad_xplanta_zn").text("Cant. x planta: "+ nf_aplicar_x_planta+"/gr");
                var recomen_x_planta_momento = nf_aplicar_x_planta / fracc_mom_menor;
                var momento_seleccionado = $('option:selected', '#estado_fenologico').attr('value');
        
                if (momento_seleccionado == 1){ // VERIFICAR QUE MOMENTO FENOLÓGICO ELIGIÓ  
                    var  gr_momento1 = recomen_x_planta_momento * 1;
                    gr_momento1 = gr_momento1.toFixed(0)
                    $('#recomen_x_momento_zn').text("Necesidad aplicar x planta Zn: " +gr_momento1+" gr");
                    $('#rec_x_mom_zn').val(gr_momento1); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 2){
                    var  gr_momento2 = recomen_x_planta_momento * 1;
                    gr_momento2 = gr_momento2.toFixed(0)
                    $('#recomen_x_momento_zn').text("Necesidad aplicar x planta Zn: " +gr_momento2+" gr");
                    $('#rec_x_mom_zn').val(gr_momento2); //asignar el resultado para realizar otras despues
                }else if(momento_seleccionado == 3){
                    var  gr_momento3 = recomen_x_planta_momento * 1;
                     gr_momento3 = gr_momento3.toFixed(0)
                    $('#recomen_x_momento_zn').text("Necesidad aplicar x planta Zn: " +gr_momento3+" gr");
                    $('#rec_x_mom_zn').val(gr_momento3); //asignar el resultado para realizar otras despues
                }
			   if (nf_zinc<0){	
				$('#zn_mensaje').text('Valor negativo aplicar: ' + RC_ZINC + ' Kg/Ha de Zn');    
                    //esta linea sig es para recomendar si la necesidad aplicar es negativa con el requerimiento
                   var necesidad_aplicar_x_planta = RC_ZINC * 1000 / 3 / numero_plantas;
                   necesidad_aplicar_x_planta = necesidad_aplicar_x_planta.toFixed(0);
                   $('#recomen_x_momento_zn').text("Necesidad aplicar x planta Zn: " +necesidad_aplicar_x_planta+" gr");
                   $('#rec_x_mom_zn').val(necesidad_aplicar_x_planta); //asignar el resultado para realizar otras despues

			   }else{
				$('#zn_mensaje').text('');     
			   }
			   
            if(val_zinc<3)
            {
           $( "#inter_zinc").text("Est: "+ "Bajo" );
            }else if(val_zinc>=3 & val_zinc<=6)
            {
            $( "#inter_zinc").text("Est: "+ "Medio" );
            }else if(val_zinc>6)
            {
            $( "#inter_zinc").text("Est: "+ "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_zinc" ).text( "Val" );
            }
	//FIN CALCULO PARA ZINC }	
	}
	setInterval(calculo_zinc, 3000);	
        
        function calculate_fertilizantes_zn(){   
            var val_micro_zinc_zn = $("#micro_zinc_z").val();            
            var val_final_recomendacion_zn = $("#rec_x_mom_zn").val();    
            var numero_plantas = $("#N_plantas_siembra").val();
            //calculo del fertilizante para (N) en NITROMAG 
 	        if ( $('#micro_zinc_z').is(':checked')){
			var apli_x_fertilizante_micro_zinc_z = val_final_recomendacion_zn *  100 / val_micro_zinc_zn;
            var apli_x_kilos_micro_zinc_zn = apli_x_fertilizante_micro_zinc_z * numero_plantas /1000;
            apli_x_kilos_micro_zinc_zn = apli_x_kilos_micro_zinc_zn.toFixed(0);
            apli_x_fertilizante_micro_zinc_z = apli_x_fertilizante_micro_zinc_z.toFixed(0);
            $("#fertil_zinc").text(apli_x_fertilizante_micro_zinc_z + " (gr) de MicroZinc/planta = "+apli_x_kilos_micro_zinc_zn+ "kg MicroZinc/ha");
		    }else{
		      }     
        }
        setInterval(calculate_fertilizantes_zn, 800);
    
    function calculo_hierro(){
	//INICIO CALCULO PARA HIERRO{
            var val_hierro = parseFloat($('#hierro' ).val());    
            val_hierro.value = (val_hierro.value + '').replace(/[^0-9.]/g, '');    
                        var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
			    //condicional para sacar el Fe en el suelo
			           if (densidad_aparent>=0.50 & densidad_aparent<=0.79)
						{
					var fe_suelo = 0;	
					fe_suelo = val_hierro * 1.0;		
			  		fe_suelo = fe_suelo.toFixed(1); //deja 1 número después de un punto
					$("#fe_suelo").text("Fe.Suelo: " + fe_suelo); // imprime el resultado de Hierro en suelo

						}
						else if(densidad_aparent>=0.80 & densidad_aparent<=0.99)
						{
					fe_suelo = val_hierro * 1.6;		
			  		fe_suelo = fe_suelo.toFixed(1); //deja 1 número después de un punto
					$("#fe_suelo").text("Fe.Suelo: " + fe_suelo); // imprime el resultado de Hierro en suelo
						}
						else if(densidad_aparent>=1 & densidad_aparent<=1.29)
						{
					fe_suelo = val_hierro * 2.0;		
			  		fe_suelo = fe_suelo.toFixed(1); //deja 1 número después de un punto
					$("#fe_suelo").text("Fe.Suelo: " + fe_suelo); // imprime el resultado de Hierro en suelo
						}else if (densidad_aparent>=1.30 & densidad_aparent<=2.0)
						{
					fe_suelo = val_hierro * 2.6;		
			  		fe_suelo = fe_suelo.toFixed(1); //deja 1 número después de un punto
					$("#fe_suelo").text("Fe.Suelo: " + fe_suelo); // imprime el resultado de Hierro en suelo
						}
               
                var tipo_textura = $("#textura").attr('name'); // get textura valor	
        			    var fe_aprovechable = 0; 
			   if (tipo_textura == 2.0 ){
			 	fe_aprovechable =  fe_suelo / 20.0;
			   }else if(tipo_textura == 1.0){
				fe_aprovechable =  fe_suelo / 20.0;
			   }else if (tipo_textura == 2.6){
				 fe_aprovechable =  fe_suelo / 20.0;
			   }else{
				 //  alert("Por favor eliga una textura de suelo");
				 // $('ul.tabs').tabs('select_tab', 'vars_sign');
			   }
                fe_aprovechable = fe_aprovechable.toFixed(1); //quitar decimales de la derecha dejar uno  
			   	$("#fe_aprovechable").text("Fe.Apro: " + fe_aprovechable); // imprime el resultado de Azufre aprovechable
			   var RC_HIERRO = $("#RC_HIERRO").val(); //get requerimiento nutricional 
			   if (RC_HIERRO <=0){
				$("#fe_necesidad").text("No Req");   
			   }else{
			   var nf_hierro = RC_HIERRO - fe_aprovechable;
			   nf_hierro = nf_hierro /8*100;
			   nf_hierro = nf_hierro.toFixed(1);
			   $("#fe_necesidad").text("NF.Fe Kg K2O5/Ha: "+ nf_hierro);
				if (nf_hierro<0){	
				$('#fe_mensaje').text('Valor negativo aplicar: ' + RC_HIERRO + ' Kg/Ha de Fe');    
			   }else{
				$('#fe_mensaje').text('');     
			   }
				   
			   }
                        if(val_hierro<50)
            {
           $( "#inter_hierro").text("Est: Bajo" );
            }else if(val_hierro>=50 & val_hierro<=100)
            {
            $( "#inter_hierro").text( "Est: Medio" );
            }else if(val_hierro>100)
            {
            $( "#inter_hierro").text( "Est: Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_hierro" ).text( "Val" );
            }    
 
	//FIN CALCULO PARA HIERRO }	
	}
	setInterval(calculo_hierro, 3000);

});
 
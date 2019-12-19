    $(window).on("load", function () {

    });

    $(document).ready(function () {
        //Código para Determinar la apreciación del PH{
        $("#ph").keyup(function () {
                var val_ph = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                if (val_ph < 4.5) {
                    $("#inter_ph").text("Extremadamente ácido");

                } else if (val_ph > 4.5 & val_ph <= 5.0) {
                    $("#inter_ph").text("Muy fuertemente ácido");
                } else if (val_ph >= 5.1 & val_ph <= 5.5) {
                    $("#inter_ph").text("Fuertemente ácido");
                } else if (val_ph >= 5.6 & val_ph <= 6.0) {
                    $("#inter_ph").text("Moderadamente ácido");
                } else if (val_ph >= 6.1 & val_ph <= 6.5) {
                    $("#inter_ph").text("Ligeramente ácido");
                } else if (val_ph >= 6.6 & val_ph <= 7.3) {
                    $("#inter_ph").text("Neutro");
                } else if (val_ph >= 7.4 & val_ph <= 7.9) {
                    $("#inter_ph").text("Alcalino calcareo");
                } else if (val_ph >= 7.9 & val_ph <= 8.4) {
                    $("#inter_ph").text("Moderadamente alcalino (Na)");
                } else if (val_ph >= 8.4 & val_ph <= 9.0) {
                    $("#inter_ph").text("Fuertemente alcalino (Na)");
                } else if (val_ph >= 9.0) {
                    $("#inter_ph").text("Extremadamente alcalino");
                }


                if ($(this).val() == '') {
                    $("#inter_ph").text("Val");
                }
            })
            .keyup();
        //Código para Determinar la apreciación del PH fin } 

        //Código para determinar la apreciación de C.E
        $("#ce").keyup(function () {
                var val_ce = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                if (val_ce < 0.5) {
                    $("#inter_ce").text("Muy bajo").addClass('chip');
                } else if (val_ce > 0.5 & val_ce <= 1) {
                    $("#inter_ce").text("Bajo");
                } else if (val_ce > 1 & val_ce < 2) {
                    $("#inter_ce").text("Medio");
                } else if (val_ce >= 2) {
                    $("#inter_ce").text("Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_ce").text("Val").addClass('black-text');
                }
            })
            .keyup();
        //Código para determinar la apreciación de C.I.C.E
        $("#cice").keyup(function () {
                var val_ce = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                if (val_ce < 5) {
                    $("#inter_cice").text("Muy bajo");
                } else if (val_ce >= 5 & val_ce <= 10) {
                    $("#inter_cice").text("Bajo");
                } else if (val_ce >= 10 & val_ce < 20) {
                    $("#inter_cice").text("Medio");
                } else if (val_ce >= 20) {
                    $("#inter_cice").text("Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_cice").text("Val");
                }
            })
            .keyup();

        //Código para determinar la apreciación de la salinidad
        $("#salinidad").keyup(function () {
                var val_sal = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                if (val_sal < 7) {
                    $("#inter_sal").text("Muy bajo");
                } else if (val_sal > 7 & val_sal <= 12) {
                    $("#inter_sal").text("Bajo");
                } else if (val_sal > 12 & val_sal < 20) {
                    $("#inter_sal").text("Medio");
                } else if (val_sal >= 20) {
                    $("#inter_sal").text("Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_sal").text("Val");
                }
            })
            .keyup();

        //Código para determinar la apreciación de densidad aparente
        $("#densidad_aparn").keyup(function () {
                var val_densi = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                if (val_densi >= 0.50 & val_densi <= 0.79) {
                    var val_dns_final = val_densi * 1.0;
                    val_dns_final = val_dns_final.toFixed(2);

                    $("#inter_densidad_aparn").text(val_dns_final);
                } else if (val_densi >= 0.80 & val_densi <= 0.99) {
                    val_dns_final = val_densi * 1.6;
                    val_dns_final = val_dns_final.toFixed(2);
                    $("#inter_densidad_aparn").text(val_dns_final);
                } else if (val_densi >= 1 & val_densi <= 1.29) {
                    val_dns_final = val_densi * 2.0;
                    val_dns_final = val_dns_final.toFixed(2);
                    $("#inter_densidad_aparn").text(val_dns_final);
                } else if (val_densi >= 1.30 & val_densi <= 2.0) {
                    val_dns_final = val_densi * 2.6;
                    val_dns_final = val_dns_final.toFixed(2);
                    $("#inter_densidad_aparn").text(val_dns_final);
                } else {
                    $("#inter_densidad_aparn").text("Val Error").addClass('red-text');
                }
                if ($(this).val() == '') {
                    $("#inter_densidad_aparn").text("Val");
                    $("#inter_densidad_aparn").text("Val Error").removeClass('red-text');
                }
            })
            .keyup();

        //Este select determina la seleccion del clima para la M. {}       
        $('#co_o_mo').change(function () {
            var selection = $(this).val();
            switch (selection) {
                case 'mo':
                    var mo = prompt('Ingrese el valor de Materia Orgánica', '');
                    var nitrogen = mo / 1.72; //Transforma la materia orgánica a carbono orgánico
                    var nitrogen = nitrogen.toFixed(2);
                    $("#nitro").val(nitrogen); //pone el resultado en el input
                    alert("Selecciona el tipo de clima");
                    $("#tipo_clima").addClass('yellow lighten-5');
                    var myDropDown = $("#tipo_clima");
                    var length = $('#tipo_clima> option').length;
                    //abrir el dropdown
                    myDropDown.attr('size', length);
                    $("#tipo_clima").focus();
                    break;
                case 'co':
                    alert("Ingresa el valor para Carbono Orgánico");
                    $("#nitro").val('');
                    $("#nitro").focus();
                    break;
                default:
                    break;
            }
        });

        //Este select determina la seleccion del clima para la M. {}       
        $('#tipo_clima').change(function () {
            var selection = $(this).val();
            switch (selection) {
                case 'clma_frio':
                    //En el caso de que sea clima frio haga lo siguiente{
                    // Código que me permite trabajar con la materia orgánica{        
                    $("#nitro").keyup(function () {
                            var value = parseFloat($(this).val());
                            var total_nitro = value * 0.086;
                            var nitro_disponible = total_nitro * 0.013;
                            var nitro_suelo_ppm = nitro_disponible * 10000;

                            var total_nitro = total_nitro.toFixed(4);
                            var nitro_disponible = nitro_disponible.toFixed(4);
                            var nitro_suelo_ppm = nitro_suelo_ppm.toFixed(1);

                            $("#nitro_total").text("N.Total = " + total_nitro);
                            $("#nitro_dispon").text("N.Disp % = " + nitro_disponible);
                            $("#nitro_suelo_ppm").text("N.ppm = " + nitro_suelo_ppm);
                            //CÁLCULO PARA DETERMINAR EL NITROGENO EN EL SUELO
                            var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                            if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                                var n_suelo = 0;
                                n_suelo = nitro_suelo_ppm * 1.0;
                                n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
                                $("#nitro_suelo").text("N.Suelo: Kg/Ha = " + n_suelo); // imprimir nitrógeno en el suelo
                            } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                                n_suelo = nitro_suelo_ppm * 1.6;
                                n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
                                $("#nitro_suelo").text("N.Suelo: Kg/Ha = " + n_suelo); // imprimir nitrógeno en el suelo	
                            } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                                n_suelo = nitro_suelo_ppm * 2.0;
                                n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
                                $("#nitro_suelo").text("N.Suelo: Kg/Ha = " + n_suelo); // imprimir nitrógeno en el suelo

                            } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                                n_suelo = nitro_suelo_ppm * 2.6;
                                n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
                                $("#nitro_suelo").text("N.Suelo: Kg/Ha = " + n_suelo); // imprimir nitrógeno en el suelo
                            }

                            var tipo_textura = $('option:selected', "#textura").attr('t_suelo'); // captura  textura valor	

                            var n_aprovechable = 0;
                            if (tipo_textura == 2.0) {
                                n_aprovechable = n_suelo / 1.3;
                            } else if (tipo_textura == 1.0) {
                                n_aprovechable = n_suelo / 1.8;
                            } else if (tipo_textura == 2.6) {
                                n_aprovechable = n_suelo / 1.3;
                            } else {
                                //  alert("Por favor eliga una textura de suelo");
                                // $('ul.tabs').tabs('select_tab', 'vars_sign');
                            }
                            n_aprovechable = n_aprovechable.toFixed(1);
                            $("#nitro_aprovechable").text("N.Apro: Kg/Ha= " + n_aprovechable); // imprimir nitrógeno aprovechable
                            var REQ_NITROGENO = $("#REQ_NITROGENO").val(); //get requerimiento nutricional val
                            var nf_nitrogeno = REQ_NITROGENO - n_aprovechable; //var necesidad de N. Aplicar
                            nf_nitrogeno = nf_nitrogeno / 70 * 100; // estas son constantes para sacar el NF 
                            nf_nitrogeno = nf_nitrogeno.toFixed(1); //darle un solo número después del punto
                            $("#n_necesidad").text("NF.N Kg N/Ha: " + nf_nitrogeno);
                            var n_plantas_siembra = $('#N_plantas').val();
                            var cant_gr_apli_x_planta = nf_nitrogeno * 1000 / n_plantas_siembra;
                            cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                            $("#cant_aplicar_planta").text("Cant. Apli x planta. (Gr): " + cant_gr_apli_x_planta);

                            this.value = (this.value + '').replace(/[^0-9.]/g, '');
                            if (value <= 2.9) {
                                $("#inter_nitrogeno").text("Bajo");

                            } else if (value >= 3.0 & value <= 5.7) {
                                $("#inter_nitrogeno").text("Medio");
                            } else if (value >= 5.0 & value <= 7.0) {
                                $("#inter_nitrogeno").text("Ideal");
                            } else if (value >= 7.0) {
                                $("#inter_nitrogeno").text("Alto");
                            }
                            if ($(this).val() == '') {
                                $("#inter_nitrogeno").text("Val").addClass('chip');
                            }
                        })
                        // Código que me permite trabajar con la materia orgánica}

                        .keyup();

                    //}

                    break; //

                case 'clma_medio':
                    //Apreciación steniendo en cuenta el clima medio{
                    $("#nitro").keyup(function () {
                            var value = parseFloat($(this).val());
                            var total_nitro = value * 0.086;
                            var nitro_disponible = total_nitro * 0.0225;
                            var nitro_suelo_ppm = nitro_disponible * 10000;

                            var total_nitro = total_nitro.toFixed(4);
                            var nitro_disponible = nitro_disponible.toFixed(4);
                            var nitro_suelo_ppm = nitro_suelo_ppm.toFixed(1);

                            $("#nitro_total").text("N.Total = " + total_nitro);
                            $("#nitro_dispon").text("N.Disp % = " + nitro_disponible);
                            $("#nitro_suelo_ppm").text("N.ppm = " + nitro_suelo_ppm);
                            //CÁLCULO PARA DETERMINAR EL NITROGENO EN EL SUELO
                            var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                            if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                                var n_suelo = 0;
                                n_suelo = nitro_suelo_ppm * 1.0;
                                n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
                                $("#nitro_suelo").text("N.Suelo: Kg/Ha = " + n_suelo); // imprimir nitrógeno en el suelo
                            } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                                n_suelo = nitro_suelo_ppm * 1.6;
                                n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
                                $("#nitro_suelo").text("N.Suelo: Kg/Ha = " + n_suelo); // imprimir nitrógeno en el suelo	
                            } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                                n_suelo = nitro_suelo_ppm * 2.0;
                                n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
                                $("#nitro_suelo").text("N.Suelo: Kg/Ha = " + n_suelo); // imprimir nitrógeno en el suelo

                            } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                                n_suelo = nitro_suelo_ppm * 2.6;
                                n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
                                $("#nitro_suelo").text("N.Suelo: Kg/Ha = " + n_suelo); // imprimir nitrógeno en el suelo
                            }
                            var tipo_textura = $('option:selected', "#textura").attr('t_suelo'); // captura  textura valor	
                            var n_aprovechable = 0;
                            if (tipo_textura == 2.0) {
                                n_aprovechable = n_suelo / 1.3;
                            } else if (tipo_textura == 1.0) {
                                n_aprovechable = n_suelo / 1.8;
                            } else if (tipo_textura == 2.6) {
                                n_aprovechable = n_suelo / 1.3;
                            } else {
                                //  alert("Por favor eliga una textura de suelo");
                                // $('ul.tabs').tabs('select_tab', 'vars_sign');
                            }
                            n_aprovechable = n_aprovechable.toFixed(1);
                            $("#nitro_aprovechable").text("N.Apro: Kg/Ha = " + n_aprovechable); // imprimir nitrógeno aprovechable
                            var REQ_NITROGENO = $("#REQ_NITROGENO").val(); //get requerimiento nutricional val
                            var nf_nitrogeno = REQ_NITROGENO - n_aprovechable; //var necesidad de N. Aplicar
                            nf_nitrogeno = nf_nitrogeno / 70 * 100; // estas son constantes para sacar el NF 
                            nf_nitrogeno = nf_nitrogeno.toFixed(1); //darle un solo número después del punto
                            $("#n_necesidad").text("NF.N Kg N/Ha: " + nf_nitrogeno);
                            var n_plantas_siembra = $('#N_plantas').val();
                            var cant_gr_apli_x_planta = nf_nitrogeno * 1000 / n_plantas_siembra;
                            cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                            $("#cant_aplicar_planta").text("Cant. Apli x planta. (Gr): " + cant_gr_apli_x_planta);

                            if (value <= 1.7) {
                                $("#inter_nitrogeno").text("Bajo");

                            } else if (value >= 1.8 & value <= 2.9) {
                                $("#inter_nitrogeno").text("Medio");
                            } else if (value >= 3.0 & value <= 4.0) {
                                $("#inter_nitrogeno").text("Ideal");
                            } else if (value >= 4.0) {
                                $("#inter_nitrogeno").text("Alto");
                            }
                            if ($(this).val() == '') {
                                $("#inter_nitrogeno").text("Val").addClass('chip');
                            }
                        })
                        //}

                        .keyup();

                    break;
                case 'clma_calido':
                    //Apreciación para el clima calido inicio
                    $("#nitro").keyup(function () {
                            var value = parseFloat($(this).val());
                            var total_nitro = value * 0.086;
                            var nitro_disponible = total_nitro * 0.029;
                            var nitro_suelo_ppm = nitro_disponible * 10000;

                            var total_nitro = total_nitro.toFixed(4);
                            var nitro_disponible = nitro_disponible.toFixed(4);
                            var nitro_suelo_ppm = nitro_suelo_ppm.toFixed(1);

                            $("#nitro_total").text("N.Total = " + total_nitro);
                            $("#nitro_dispon").text("N.Disp % = " + nitro_disponible);
                            $("#nitro_suelo_ppm").text("N.ppm = " + nitro_suelo_ppm);
                            //CÁLCULO PARA DETERMINAR EL NITROGENO EN EL SUELO
                            var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                            if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                                var n_suelo = 0;
                                n_suelo = nitro_suelo_ppm * 1.0;
                                n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
                                $("#nitro_suelo").text("N.Suelo: Kg/Ha = " + n_suelo); // imprimir nitrógeno en el suelo
                            } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                                n_suelo = nitro_suelo_ppm * 1.6;
                                n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
                                $("#nitro_suelo").text("N.Suelo: Kg/Ha = " + n_suelo); // imprimir nitrógeno en el suelo	
                            } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                                n_suelo = nitro_suelo_ppm * 2.0;
                                n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
                                $("#nitro_suelo").text("N.Suelo: Kg/Ha = " + n_suelo); // imprimir nitrógeno en el suelo

                            } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                                n_suelo = nitro_suelo_ppm * 2.6;
                                n_suelo = n_suelo.toFixed(1); //deja 1 número después de un punto
                                $("#nitro_suelo").text("N.Suelo: Kg/Ha = " + n_suelo); // imprimir nitrógeno en el suelo
                            }
                            var tipo_textura = $('option:selected', "#textura").attr('t_suelo'); // captura  textura valor	
                            var n_aprovechable = 0;
                            if (tipo_textura == 2.0) {
                                n_aprovechable = n_suelo / 1.3;
                            } else if (tipo_textura == 1.0) {
                                n_aprovechable = n_suelo / 1.8;
                            } else if (tipo_textura == 2.6) {
                                n_aprovechable = n_suelo / 1.3;
                            } else {
                                //  alert("Por favor eliga una textura de suelo");
                                // $('ul.tabs').tabs('select_tab', 'vars_sign');
                            }
                            n_aprovechable = n_aprovechable.toFixed(1);
                            $("#nitro_aprovechable").text("N.Apro: Kg/Ha = " + n_aprovechable); // imprimir nitrógeno aprovechable
                            var REQ_NITROGENO = $("#REQ_NITROGENO").val(); //get requerimiento nutricional val
                            var nf_nitrogeno = REQ_NITROGENO - n_aprovechable; //var necesidad de N. Aplicar
                            nf_nitrogeno = nf_nitrogeno / 70 * 100; // estas son constantes para sacar el NF 
                            nf_nitrogeno = nf_nitrogeno.toFixed(1); //darle un solo número después del punto
                            $("#n_necesidad").text("NF.N Kg N/Ha: " + nf_nitrogeno);
                            var n_plantas_siembra = $('#N_plantas').val();
                            var cant_gr_apli_x_planta = nf_nitrogeno * 1000 / n_plantas_siembra;
                            cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                            $("#cant_aplicar_planta").text("Cant. Apli x planta. (Gr): " + cant_gr_apli_x_planta);

                            if (value <= 1.1) {
                                $("#inter_nitrogeno").text("Bajo");

                            } else if (value >= 1.2 & value <= 2.3) {
                                $("#inter_nitrogeno").text("Medio");
                            } else if (value >= 2.4 & value <= 2.5) {
                                $("#inter_nitrogeno").text("Ideal");
                            } else if (value >= 2.5) {
                                $("#inter_nitrogeno").text("Alto");
                            }
                            if ($(this).val() == '') {
                                $("#inter_nitrogeno").text("Val").addClass('chip');
                            }
                        })
                        // Apreciacion para el clima calido fin
                        .keyup();
                    break;

                default:
                    $("#inter_nitrogeno").text("Default");

                    break;
            }
        });

        //función para actualizar el clima del analisis de suelo
        function actualiza_clima() {
            var clima = $("#tipo_clima").val();
            var co_o_mo = $("#co_o_mo").val();
            var cabecera = $("#codcab").val(); //id dell análisis de suelo a actualizar
            $.ajax({
                url: "../../control/analisis_suelo/insertar_variables_importantes.php",
                method: "POST",
                data: {
                    clima: clima,
                    co_o_mo: co_o_mo,
                    cabecera: cabecera
                },
                success: function (data) {
                    console.log(data);
                }
            });
        }
        setInterval(actualiza_clima, 2000);
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

            //calculo y estimación para el fosforo
        $("#fosforo").keyup(function () {
                var val_fosforo = parseFloat($(this).val()); //captura el valor de la caja de texto para fosforo 
                this.value = (this.value + '').replace(/[^0-9.]/g, ''); // remplaza letras y solo deja números
                var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                //condicional para sacar el P en el suelo
                if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                    var resultado_densidad = 0;
                    var p_suelo = val_fosforo * 1.0; //CAL fosforo en el suelo
                    p_suelo = p_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#p_suelo").html("P.Suelo: " + "<b>" + p_suelo + "</b>"); // imprime el resultado de P en suelo

                } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                    var resultado_densidad = 0;
                    var p_suelo = val_fosforo * 1.6; //CAL fosforo en el suelo
                    p_suelo = p_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#p_suelo").html("P.Suelo: " + "<b>" + p_suelo + "</b>"); // imprime el resultado de P en suelo
                } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                    var resultado_densidad = 0;
                    var p_suelo = val_fosforo * 2.0; //CAL fosforo en el suelo
                    p_suelo = p_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#p_suelo").html("P.Suelo: " + "<b>" + p_suelo + "</b>"); // imprime el resultado de P en suelo

                } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                    var resultado_densidad = 0;
                    var p_suelo = val_fosforo * 2.6; //CAL fosforo en el suelo
                    p_suelo = p_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#p_suelo").html("P.Suelo: " + "<b>" + p_suelo + "</b>"); // imprime el resultado de P en suelo

                }
                var p_asimilable = p_suelo * 2.2913; // 2.2913 este es una constante - cálculo el p en el suelo
                p_asimilable = p_asimilable.toFixed(1); //quitar decimales de la derecha dejar uno
                $("#p_asimilable").html("P2O5: " + "<b>" + p_asimilable + "</b>"); // print fosforo asimilable
                var tipo_textura = $('option:selected', "#textura").attr('t_suelo');
                var p_aprovechable = 0;
                if (tipo_textura == 2.0) {
                    p_aprovechable = p_asimilable / 4.0;
                } else if (tipo_textura == 1.0) {
                    p_aprovechable = p_asimilable / 3.5;
                } else if (tipo_textura == 2.6) {
                    p_aprovechable = p_asimilable / 4.0;
                } else {
                    //  alert("Por favor eliga una textura de suelo");
                    // $('ul.tabs').tabs('select_tab', 'vars_sign');
                }
                var fosfo_final = p_aprovechable.toFixed(1); //quitar decimales de la derecha
                $("#p_aprovechable").html("P.Apro: " + "<b>" + fosfo_final + "</b>");
                var REQ_FOSFORO = $("#REQ_FOSFORO").val(); //get requerimiento nutricional val
                if (REQ_FOSFORO <= 0 || REQ_FOSFORO == null || REQ_FOSFORO == '') {
                    $("#p_necesidad").html("<del>requerimiento</del>");
                    $("#cant_aplicar_planta_p").text("No aplica");
                } else {
                    var nf_fosforo = REQ_FOSFORO - p_aprovechable; //var necesidad de P. Aplicar
                    nf_fosforo = nf_fosforo / 30 * 100; // estas son constantes para sacar el NF 
                    nf_fosforo = nf_fosforo.toFixed(1); //darle un solo número después del punto
                    $("#p_necesidad").html("NF.P KgP/Ha: " + "<b>" + nf_fosforo + "</b>");
                    var n_plantas_siembra = $('#N_plantas').val();
                    if (nf_fosforo < 0 || nf_fosforo == null || nf_fosforo == '') { //si el valor el - entonces aparece el tooltip diciendo...
                        var cant_gr_apli_x_planta = REQ_FOSFORO * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_p").text("(Gr / planta): " + cant_gr_apli_x_planta);
                        setTimeout(function () { //una función con el mensaje.
                            Materialize.toast('<span class="tooltipped" data-position="center" data-tooltip="Valor negativo aplicar  "' + REQ_FOSFORO + ' Kg/Ha">Valor negativo aplicar  ' + REQ_FOSFORO + ' Kg/Ha de P</span>', 8000);
                        }, 1500);
                    } else {
                        var cant_gr_apli_x_planta = nf_fosforo * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_p").text("(Gr / planta): " + cant_gr_apli_x_planta);

                    }

                }



                if (val_fosforo < 10) // ahora sigue la estimación
                {
                    $("#inter_fosforo").text("Est: " + " Muy Bajo");
                } else if (val_fosforo >= 10 & val_fosforo <= 20) {
                    $("#inter_fosforo").text("Est: " + "Bajo");
                } else if (val_fosforo >= 20 & val_fosforo <= 40) {
                    $("#inter_fosforo").text("Est: " + "Medio");
                } else if (val_fosforo >= 40) {
                    $("#inter_fosforo").text("Est: " + "Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_fosforo").text("Est: " + "Val");
                }
            })
            .keyup();

        //}  

        //Determinacion para los valores del Ca calcio{
        $("#calcio").keyup(function () {
                var val_calcio = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                //condicional para sacar el Ca en el suelo
                if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                    var calcio_suelo = 0;
                    calcio_suelo = val_calcio * 200;
                    calcio_suelo = calcio_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#ca_suelo").html("Ca.Suelo: " + calcio_suelo); // print calcio en suelo	    
                } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                    calcio_suelo = val_calcio * 320;
                    calcio_suelo = calcio_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#ca_suelo").html("Ca.Suelo: " + calcio_suelo); // print calcio en suelo			
                } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                    calcio_suelo = val_calcio * 400;
                    calcio_suelo = calcio_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#ca_suelo").html("Ca.Suelo: " + calcio_suelo); // print calcio en suelo	

                } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {

                    calcio_suelo = val_calcio * 520;
                    calcio_suelo = calcio_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#ca_suelo").html("Ca.Suelo: " + "<b>" + calcio_suelo + "</b>"); // print calcio en suelo	
                }
                var tipo_textura = $('option:selected', "#textura").attr('t_suelo'); // get textura valor    
                var ca_aprovechable = 0;
                if (tipo_textura == 1.0) {
                    ca_aprovechable = calcio_suelo / 10;
                } else if (tipo_textura == 2.0) {
                    ca_aprovechable = calcio_suelo / 8;
                } else if (tipo_textura == 2.6) {
                    ca_aprovechable = calcio_suelo / 10;
                }
                ca_aprovechable = ca_aprovechable.toFixed(1);
                $("#ca_aprovechable").html("Ca.Apro: " + "<b>" + ca_aprovechable + "</b>"); // print calcio aprovechable  
                var REQ_CALCIO = $("#REQ_CALCIO").val(); //get requerimiento nutricional 
                if (REQ_CALCIO <= 0 || REQ_CALCIO == null || REQ_CALCIO == '') {
                    $("#ca_necesidad").html("<del>requerimiento</del>");
                    $("#cant_aplicar_planta_ca").html("No aplica");
                } else {
                    var nf_calcio = REQ_CALCIO - ca_aprovechable;
                    nf_calcio = nf_calcio / 75 * 100;
                    nf_calcio = nf_calcio.toFixed(1);
                    $("#ca_necesidad").html("NF.P KgCa/Ha: " + "<b>" + nf_calcio + "</b>");
                    var n_plantas_siembra = $('#N_plantas').val();

                    if (nf_calcio < 0 || nf_calcio == null || nf_calcio == '') {
                        var cant_gr_apli_x_planta = REQ_CALCIO * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_ca").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                        setTimeout(function () {
                            Materialize.toast('<span class="tooltipped" data-position="center" data-tooltip="Valor negativo aplicar  "' + REQ_CALCIO + ' Kg/Ha">Valor negativo aplicar  ' + REQ_CALCIO + ' Kg/Ha de Ca</span>', 8000);
                        }, 1500);
                    } else {
                        var cant_gr_apli_x_planta = nf_calcio * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_ca").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                    }

                }


                if (val_calcio < 2) {
                    $("#inter_calcio").text("Est: " + "Muy Bajo");
                } else if (val_calcio >= 2 & val_calcio <= 3) {
                    $("#inter_calcio").text("Est: " + "Bajo");
                } else if (val_calcio > 3 & val_calcio <= 6) {
                    $("#inter_calcio").text("Est: " + "Medio");
                } else if (val_calcio >= 6) {
                    $("#inter_calcio").text("Est: " + "Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_calcio").text("Est: " + "Val");
                }
            })
            .keyup();

        //}        

        //Determinacion para los valores del Mg Magnecio{
        $("#magnecio").keyup(function () {
                var val_magnecio = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                //condicional para sacar el Mg en el suelo
                var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                    var mg_suelo = 0;
                    mg_suelo = val_magnecio * 120;
                    mg_suelo = mg_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#mg_suelo").html("Mg.Suelo: " + "<b>" + mg_suelo + "</b>"); // print Mg en el suelo
                } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                    mg_suelo = val_magnecio * 192;
                    mg_suelo = mg_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#mg_suelo").html("Mg.Suelo: " + "<b>" + mg_suelo + "</b>"); // print Mg en el suelo	
                } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                    mg_suelo = val_magnecio * 240;
                    mg_suelo = mg_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#mg_suelo").html("Mg.Suelo: " + "<b>" + mg_suelo + "</b>"); // print Mg en el suelo

                } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                    mg_suelo = val_magnecio * 312;
                    mg_suelo = mg_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#mg_suelo").html("Mg.Suelo: " + "<b>" + mg_suelo + "</b>"); // print Mg en el suelo
                }
                var tipo_textura = $('option:selected', "#textura").attr('t_suelo'); // get textura valor
                var mg_aprovechable = 0;
                if (tipo_textura == 1.0) {
                    mg_aprovechable = mg_suelo / 5;
                } else if (tipo_textura == 2.0) {
                    mg_aprovechable = mg_suelo / 4;
                } else if (tipo_textura == 2.6) {
                    mg_aprovechable = mg_suelo / 5;
                }
                mg_aprovechable = mg_aprovechable.toFixed(1);
                $("#mg_aprovechable").html("Mg.Apro: " + "<b>" + mg_aprovechable + "</b>"); // print Magnesio aprovechable
                var REQ_MAGNESIO = $("#REQ_MAGNESIO").val(); //get requerimiento nutricional 
                if (REQ_MAGNESIO <= 0 || REQ_MAGNESIO == null || REQ_MAGNESIO == '') {
                    $("#mg_necesidad").html("<del>requerimiento</del>");
                    $("#cant_aplicar_planta_mg").html("No aplica");
                } else {
                    var nf_magnesio = REQ_MAGNESIO - mg_aprovechable;
                    nf_magnesio = nf_magnesio / 60 * 100;
                    nf_magnesio = nf_magnesio.toFixed(1);
                    $("#mg_necesidad").html("NF. Kg Mg/Ha: " + "<b>" + nf_magnesio + "</b>");
                    var n_plantas_siembra = $('#N_plantas').val();

                    if (nf_magnesio < 0 || nf_magnesio == null || nf_magnesio == '') {
                        var cant_gr_apli_x_planta = REQ_MAGNESIO * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_mg").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                        setTimeout(function () {
                            Materialize.toast('<span class="tooltipped" data-position="center" data-tooltip="Valor negativo aplicar  "' + REQ_MAGNESIO + ' Kg/Ha">Valor negativo aplicar  ' + REQ_MAGNESIO + ' Kg/Ha de Mg</span>', 8000);
                        }, 1500);
                    } else {
                        var cant_gr_apli_x_planta = nf_magnesio * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_mg").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                    }
                }


                if (val_magnecio < 0.5) {
                    $("#inter_magnecio").text("Est: " + "Muy Bajo");
                } else if (val_magnecio >= 0.5 & val_magnecio <= 1.2) {
                    $("#inter_magnecio").text("Est: " + "Bajo");
                } else if (val_magnecio > 1.2 & val_magnecio <= 1.8) {
                    $("#inter_magnecio").text("Est: " + "Medio");
                } else if (val_magnecio >= 1.8) {
                    $("#inter_magnecio").text("Est: " + "Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_magnecio").text("Est: " + "Val");
                }
            })
            .keyup();

        //}     

        //Determinacion para los valores del Mg Potasio{
        $("#potasio").keyup(function () {
                var val_potasio = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                //condicional para sacar el K en el suelo
                var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                    var k_suelo = 0;
                    k_suelo = val_potasio * 390;
                    k_suelo = k_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#k_suelo").html("K.Suelo: " + "<b>" + k_suelo + "</b>"); // print potasio en el suelo
                } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                    k_suelo = val_potasio * 624;
                    k_suelo = k_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#k_suelo").html("K.Suelo: " + "<b>" + k_suelo + "</b>"); // print potasio en el suelo
                } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                    k_suelo = val_potasio * 780;
                    k_suelo = k_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#k_suelo").html("K.Suelo: " + "<b>" + k_suelo + "</b>"); // print potasio en el suelo

                } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                    k_suelo = val_potasio * 1014;
                    k_suelo = k_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#k_suelo").html("K.Suelo: " + "<b>" + k_suelo + "<b>"); // print potasio en el suelo
                }
                var tipo_textura = $('option:selected', "#textura").attr('t_suelo'); // get textura valor

                var k_asimilable = k_suelo * 1.2046;
                k_asimilable = k_asimilable.toFixed(1); //quitar decimales de la derecha
                $("#k_asimilable").html("K2O: " + "<b>" + k_asimilable + "</b>"); // print potasio asimilable
                var k_aprovechable = 0;
                if (tipo_textura == 2.0) {
                    k_aprovechable = k_asimilable / 2.0;
                } else if (tipo_textura == 1.0) {
                    k_aprovechable = k_asimilable / 1.7;
                } else if (tipo_textura == 2.6) {
                    k_aprovechable = k_asimilable / 1.8;
                } else {
                    //  alert("Por favor eliga una textura de suelo");
                    // $('ul.tabs').tabs('select_tab', 'vars_sign');
                }
                var k_final = k_aprovechable.toFixed(1); //quitar decimales de la derecha
                $("#k_aprovechable").html("K.Apro: " + "<b>" + k_final + "</b>");
                var REQ_POTASIO = $("#REQ_POTASIO").val(); //get requerimiento nutricional 
                if (REQ_POTASIO <= 0 || REQ_POTASIO == null || REQ_POTASIO == '') {
                    $("#k_necesidad").html("<del>requerimiento</del>");
                    $("#cant_aplicar_planta_k").html("No aplica");
                } else {
                    var nf_potasio = REQ_POTASIO - k_aprovechable;
                    nf_potasio = nf_potasio / 70 * 100;
                    nf_potasio = nf_potasio.toFixed(1);
                    $("#k_necesidad").html("NF.K Kg K2O5/Ha: " + "<b>" + nf_potasio + "</b>");
                    var n_plantas_siembra = $('#N_plantas').val();

                    if (nf_potasio < 0 || nf_potasio == null || nf_potasio == '') {
                        var cant_gr_apli_x_planta = REQ_POTASIO * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_k").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                        setTimeout(function () {
                            Materialize.toast('<span class="tooltipped" data-position="center" data-tooltip="Valor negativo aplicar  "' + REQ_POTASIO + ' Kg/Ha">Valor negativo aplicar  ' + REQ_POTASIO + ' Kg/Ha de K</span>', 8000);
                        }, 1500);
                    } else {
                        var cant_gr_apli_x_planta = nf_potasio * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_k").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                    }

                }



                if (val_potasio < 0.2) {
                    $("#inter_potasio").text("Est: " + "Muy Bajo");
                } else if (val_potasio >= 0.2 & val_potasio <= 0.4) {
                    $("#inter_potasio").text("Est: " + "Bajo");
                } else if (val_potasio > 0.4 & val_potasio <= 0.6) {
                    $("#inter_potasio").text("Est: " + "Medio");
                } else if (val_potasio > 0.6 & val_potasio <= 1) {
                    $("#inter_potasio").text("Est: " + "Alto");
                } else if (val_potasio > 1) {
                    $("#inter_potasio").text("Est: " + "Excesivo");
                }
                if ($(this).val() == '') {
                    $("#inter_potasio").text("Est: " + "Val");
                }
            })
            .keyup();

        //}           

        //Determinacion para los valores del Na Sodio{
        $("#sodio").keyup(function () {
                var val_sodio = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                //condicional para sacar el Na en el suelo
                if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                    var na_suelo = 0;
                    na_suelo = val_sodio * 1;
                    na_suelo = na_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#na_suelo").html("Na.Suelo: " + "<b>" + na_suelo + "</b>"); // imprime el resultado de Sodio en suelo

                } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                    na_suelo = val_sodio * 1.6;
                    na_suelo = na_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#na_suelo").html("Na.Suelo: " + "<b>" + na_suelo + "</b>"); // imprime el resultado de Sodio en suelo
                } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                    na_suelo = val_sodio * 2.0;
                    na_suelo = na_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#na_suelo").html("Na.Suelo: " + "<b>" + na_suelo + "</b>"); // imprime el resultado de Sodio en suelo
                } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                    na_suelo = val_sodio * 2.6;
                    na_suelo = na_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#na_suelo").html("Na.Suelo: " + "<b>" + na_suelo + "</b>"); // imprime el resultado de Sodio en suelo
                }


                if (val_sodio < 0.1) {
                    $("#inter_sodio").text("Bajo");
                } else if (val_sodio >= 0.1 & val_sodio <= 0.5) {
                    $("#inter_sodio").text("Medio");
                } else if (val_sodio > 0.5) {
                    $("#inter_sodio").text("Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_sodio").text("Val").addClass('black-text');
                }
            })
            .keyup();

        //}            

        //Determinacion para los valores del S Azufre{
        $("#azufre").keyup(function () {
                var val_azufre = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                //condicional para sacar el S en el suelo
                if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                    var s_suelo = 0;
                    s_suelo = val_azufre * 1;
                    s_suelo = s_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#s_suelo").html("S.Suelo: " + "<b>" + s_suelo + "</b>"); // imprime el resultado de Azufre en suelo

                } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                    s_suelo = val_azufre * 1.6;
                    s_suelo = s_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#s_suelo").html("S.Suelo: " + "<b>" + s_suelo + "</b>"); // imprime el resultado de Azufre en suelo
                } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                    s_suelo = val_azufre * 2.0;
                    s_suelo = s_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#s_suelo").html("S.Suelo: " + "<b>" + s_suelo + "</b>"); // imprime el resultado de Azufre en suelo
                } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                    s_suelo = val_azufre * 2.6;
                    s_suelo = s_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#s_suelo").html("S.Suelo: " + "<b>" + s_suelo + "</b>"); // imprime el resultado de Azufre en suelo
                }

                var tipo_textura = $('option:selected', "#textura").attr('t_suelo'); // get textura valor
                var s_aprovechable = 0;
                if (tipo_textura == 2.0) {
                    s_aprovechable = s_suelo / 1.5;
                } else if (tipo_textura == 1.0) {
                    s_aprovechable = s_suelo / 1.5;
                } else if (tipo_textura == 2.6) {
                    s_aprovechable = s_suelo / 1.5;
                } else {
                    //  alert("Por favor eliga una textura de suelo");
                    // $('ul.tabs').tabs('select_tab', 'vars_sign');
                }
                s_aprovechable = s_aprovechable.toFixed(1); //quitar decimales de la derecha dejar uno  
                $("#s_aprovechable").html("S.Apro: " + "<b>" + s_aprovechable + "</b>"); // imprime el resultado de Azufre aprovechable
                var REQ_AZUFRE = $("#REQ_AZUFRE").val(); //get requerimiento nutricional 
                if (REQ_AZUFRE <= 0 || REQ_AZUFRE == null || REQ_AZUFRE == '') {
                    $("#s_necesidad").html("<del>requerimiento</del>");
                    $("#cant_aplicar_planta_s").html("No aplica");
                } else {
                    var nf_azufre = REQ_AZUFRE - s_aprovechable;
                    nf_azufre = nf_azufre / 70 * 100;
                    nf_azufre = nf_azufre.toFixed(1);
                    $("#s_necesidad").html("NF.S Kg K2O5/Ha: " + "<b>" + nf_azufre + "</b>");

                    var n_plantas_siembra = $('#N_plantas').val();
                    if (nf_azufre < 0 || nf_azufre == null || nf_azufre == '') {
                        var cant_gr_apli_x_planta = REQ_AZUFRE * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_s").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                        setTimeout(function () {
                            Materialize.toast('<span class="tooltipped" data-position="center" data-tooltip="Valor negativo aplicar  "' + REQ_AZUFRE + ' Kg/Ha">Valor negativo aplicar  ' + REQ_AZUFRE + ' Kg/Ha de S</span>', 8000);
                        }, 1500);
                    } else {
                        var cant_gr_apli_x_planta = nf_azufre * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_s").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");

                    }

                }

                if (val_azufre < 8) {
                    $("#inter_azufre").text("Est: " + "Bajo");
                } else if (val_azufre >= 8 & val_azufre <= 16) {
                    $("#inter_azufre").text("Est: " + "Medio");
                } else if (val_azufre > 16) {
                    $("#inter_azufre").text("Est: " + "Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_azufre").text("Val");
                }
            })
            .keyup();

        //}

        //Determinacion para los valores del B Boro{
        $("#boro").keyup(function () {
                var val_boro = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                //condicional para sacar el B en el suelo
                var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                    var b_suelo = 0;
                    b_suelo = val_boro * 1.0;
                    b_suelo = b_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#b_suelo").html("B.Suelo: " + "<b>" + b_suelo + "</b>"); // print boro en suelo  
                } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                    b_suelo = val_boro * 1.6;
                    b_suelo = b_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#b_suelo").html("B.Suelo: " + "<b>" + b_suelo + "</b>"); // print boro en suelo  
                } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                    b_suelo = val_boro * 2.0;
                    b_suelo = b_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#b_suelo").html("B.Suelo: " + "<b>" + b_suelo + "</b>"); // print boro en suelo  

                } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                    b_suelo = val_boro * 2.6;
                    b_suelo = b_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#b_suelo").html("B.Suelo: " + "<b>" + b_suelo + "</b>"); // print boro en suelo  
                }
                var tipo_textura = $('option:selected', "#textura").attr('t_suelo'); // get textura valor

                var b_aprovechable = 0;
                if (tipo_textura == 2.0) {
                    b_aprovechable = b_suelo / 10;
                } else if (tipo_textura == 1.0) {
                    b_aprovechable = b_suelo / 8.0;
                } else if (tipo_textura == 2.6) {
                    b_aprovechable = b_suelo / 10;
                } else {
                    //  alert("Por favor eliga una textura de suelo");
                    // $('ul.tabs').tabs('select_tab', 'vars_sign');
                }
                b_aprovechable = b_aprovechable.toFixed(2);
                $("#b_aprovechable").html("B.Apro: " + "<b>" + b_aprovechable + "</b>");
                var REQ_BORO = $("#REQ_BORO").val(); //get requerimiento nutricional 
                if (REQ_BORO <= 0 || REQ_BORO == null || REQ_BORO == '') {
                    $("#b_necesidad").html("<del>requerimiento</del>");
                    $("#cant_aplicar_planta_b").html("No aplica");
                } else {
                    var nf_boro = REQ_BORO - b_aprovechable;
                    nf_boro = nf_boro / 20 * 100;
                    nf_boro = nf_boro.toFixed(1);
                    $("#b_necesidad").html("NF.B Kg B/Ha: " + "<b>" + nf_boro + "</b>");
                    var n_plantas_siembra = $('#N_plantas').val();

                    if (nf_boro < 0 || nf_boro == null || nf_boro == '') {
                        var cant_gr_apli_x_planta = REQ_BORO * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_b").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                        setTimeout(function () {
                            Materialize.toast('<span class="tooltipped" data-position="center" data-tooltip="Valor negativo aplicar  "' + REQ_BORO + ' Kg/Ha">Valor negativo aplicar  ' + REQ_BORO + ' Kg/Ha de B</span>', 8000);
                        }, 1500);
                    } else {
                        var cant_gr_apli_x_planta = nf_boro * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_b").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");

                    }

                }

                if (val_boro < 0.3) {
                    $("#inter_boro").text("Est: " + "Bajo");
                } else if (val_boro >= 0.3 & val_boro <= 0.6) {
                    $("#inter_boro").text("Est: " + "Medio");
                } else if (val_boro > 0.6) {
                    $("#inter_boro").text("Est: " + "Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_boro").text("Val");
                }
            })
            .keyup();

        //}         

        //Determinacion para los valores del Mn manganeso{
        $("#manganeso").keyup(function () {
                var val_manganeso = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                //condicional para sacar el Mn en el suelo
                if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                    var mn_suelo = 0;
                    mn_suelo = val_manganeso * 1.0;
                    mn_suelo = mn_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#mn_suelo").html("Mn.Suelo: " + "<b>" + mn_suelo + "</b>"); // imprime el resultado de MN en suelo

                } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                    mn_suelo = val_manganeso * 1.6;
                    mn_suelo = mn_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#mn_suelo").html("Mn.Suelo: " + "<b>" + mn_suelo + "</b>"); // imprime el resultado de MN en suelo
                } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                    mn_suelo = val_manganeso * 2.0;
                    mn_suelo = mn_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#mn_suelo").html("Mn.Suelo: " + "<b>" + mn_suelo + "</b>"); // imprime el resultado de MN en suelo
                } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                    mn_suelo = val_manganeso * 2.6;
                    mn_suelo = mn_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#mn_suelo").html("Mn.Suelo: " + "<b>" + mn_suelo + "</b>"); // imprime el resultado de MN en suelo
                }
                var tipo_textura = $('option:selected', "#textura").attr('t_suelo'); // get textura valor
                var mn_aprovechable = 0;
                if (tipo_textura == 2.0) {
                    mn_aprovechable = mn_suelo / 25.0;
                } else if (tipo_textura == 1.0) {
                    mn_aprovechable = mn_suelo / 25.0;
                } else if (tipo_textura == 2.6) {
                    mn_aprovechable = mn_suelo / 25.0;
                } else {
                    //  alert("Por favor eliga una textura de suelo");
                    // $('ul.tabs').tabs('select_tab', 'vars_sign');
                }
                mn_aprovechable = mn_aprovechable.toFixed(2);
                $("#mn_aprovechable").html("Mn.Apro: " + "<b>" + mn_aprovechable + "</b>"); // imprime el resultado de Azufre aprovechable
                var REQ_MANGANESO = $("#REQ_MANGANESO").val(); //get requerimiento nutricional 
                if (REQ_MANGANESO <= 0 || REQ_MANGANESO == null || REQ_MANGANESO == '') {
                    $("#mn_necesidad").html("<del>requerimiento</del>");
                    $("#cant_aplicar_planta_mn").html("No aplica");
                } else {
                    var nf_manganeso = REQ_MANGANESO - mn_aprovechable;
                    nf_manganeso = nf_manganeso / 8 * 100;
                    nf_manganeso = nf_manganeso.toFixed(1);
                    $("#mn_necesidad").html("NF.Mn Kg K2O5/Ha: " + "<b>" + nf_manganeso + "</b>");
                    var n_plantas_siembra = $('#N_plantas').val();

                    if (nf_manganeso < 0 || nf_manganeso == null || nf_manganeso == '') {
                        var cant_gr_apli_x_planta = REQ_MANGANESO * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_mn").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                        setTimeout(function () {
                            Materialize.toast('<span class="tooltipped" data-position="center" data-tooltip="Valor negativo aplicar  "' + REQ_MANGANESO + ' Kg/Ha">Valor negativo aplicar  ' + REQ_MANGANESO + ' Kg/Ha de S</span>', 8000);
                        }, 1500);
                    } else {
                        var cant_gr_apli_x_planta = nf_manganeso * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_mn").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                    }

                }

                if (val_manganeso < 5) {
                    $("#inter_manganeso").text("Est: " + "Bajo");
                } else if (val_manganeso >= 5 & val_manganeso <= 10) {
                    $("#inter_manganeso").text("Est: " + "Medio");
                } else if (val_manganeso > 10) {
                    $("#inter_manganeso").text("Est: " + "Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_manganeso").text("Val");
                }
            })
            .keyup();

        //}       

        //Determinacion para los valores del Cu Cobre{
        $("#cobre").keyup(function () {
                var val_cobre = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                //condicional para sacar el Cu en el suelo
                if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                    var cu_suelo = 0;
                    cu_suelo = val_cobre * 1.0;
                    cu_suelo = cu_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#cu_suelo").html("Cu.Suelo: " + "<b>" + cu_suelo + "</b>"); // imprime el resultado de Cobre en suelo

                } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                    cu_suelo = val_cobre * 1.6;
                    cu_suelo = cu_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#cu_suelo").html("Cu.Suelo: " + "<b>" + cu_suelo + "</b>"); // imprime el resultado de Cobre en suelo
                } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                    cu_suelo = val_cobre * 2.0;
                    cu_suelo = cu_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#cu_suelo").html("Cu.Suelo: " + "<b>" + cu_suelo + "</b>"); // imprime el resultado de Cobre en suelo
                } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                    cu_suelo = val_cobre * 2.6;
                    cu_suelo = cu_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#cu_suelo").html("Cu.Suelo: " + "<b>" + cu_suelo + "</b>"); // imprime el resultado de Cobre en suelo
                }

                var tipo_textura = $('option:selected', "#textura").attr('t_suelo'); // get textura valor			   
                var cu_aprovechable = 0;
                if (tipo_textura == 2.0) {
                    cu_aprovechable = cu_suelo / 10.0;
                } else if (tipo_textura == 1.0) {
                    cu_aprovechable = cu_suelo / 10.0;
                } else if (tipo_textura == 2.6) {
                    cu_aprovechable = cu_suelo / 10.0;
                } else {
                    //  alert("Por favor eliga una textura de suelo");
                    // $('ul.tabs').tabs('select_tab', 'vars_sign');
                }

                cu_aprovechable = cu_aprovechable.toFixed(1); //quitar decimales de la derecha dejar uno  
                $("#cu_aprovechable").html("Cu.Apro: " + "<b>" + cu_aprovechable + "</b>"); // imprime el resultado de Azufre aprovechable
                var REQ_COBRE = $("#REQ_COBRE").val(); //get requerimiento nutricional 
                if (REQ_COBRE <= 0 || REQ_COBRE == null || REQ_COBRE == '') {
                    $("#cu_necesidad").html("<del>requerimiento</del>");
                    $("#cant_aplicar_planta_cu").html("No aplica");
                } else {
                    var nf_cobre = REQ_COBRE - cu_aprovechable;
                    nf_cobre = nf_cobre / 20 * 100;
                    nf_cobre = nf_cobre.toFixed(1);
                    $("#cu_necesidad").html("NF.Cu Kg K2O5/Ha: " + "<b>" + nf_cobre + "</b>");
                    var n_plantas_siembra = $('#N_plantas').val();

                    if (nf_cobre < 0 || nf_cobre == null || nf_cobre == '') {
                        setTimeout(function () {
                            var cant_gr_apli_x_planta = REQ_COBRE * 1000 / n_plantas_siembra;
                            cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                            $("#cant_aplicar_planta_cu").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                            Materialize.toast('<span class="tooltipped" data-position="center" data-tooltip="Valor negativo aplicar  "' + REQ_COBRE + ' Kg/Ha">Valor negativo aplicar  ' + REQ_COBRE + ' Kg/Ha de S</span>', 8000);
                        }, 1500);
                    } else {
                        var cant_gr_apli_x_planta = nf_cobre * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_cu").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");

                    }

                }

                if (val_cobre < 2) {
                    $("#inter_cobre").text("Bajo");
                } else if (val_cobre >= 2 & val_cobre <= 4) {
                    $("#inter_cobre").text("Medio");
                } else if (val_cobre > 4) {
                    $("#inter_cobre").text("Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_cobre").text("Val").addClass('black-text');
                }
            })
            .keyup();
          //}       

        //Determinacion para los valores del Zn Zinc{
        $("#zinc").keyup(function () {
                var val_zinc = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                //condicional para sacar el Zn en el suelo
                var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                    var zn_suelo = 0;
                    zn_suelo = val_zinc * 1.0;
                    zn_suelo = zn_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#zn_suelo").html("Zn.Suelo: " + "<b>" + zn_suelo + "</b>"); // print Zinc en suelo 
                } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                    zn_suelo = val_zinc * 1.6;
                    zn_suelo = zn_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#zn_suelo").html("Zn.Suelo: " + "<b>" + zn_suelo + "</b>"); // print Zinc en suelo 
                } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                    zn_suelo = val_zinc * 2.0;
                    zn_suelo = zn_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#zn_suelo").html("Zn.Suelo: " + "<b>" + zn_suelo + "</b>"); // print Zinc en suelo 

                } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                    zn_suelo = val_zinc * 2.6;
                    zn_suelo = zn_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#zn_suelo").html("Zn.Suelo: " + "<b>" + zn_suelo + "</b>"); // print Zinc en suelo 
                }
                var tipo_textura = $('option:selected', "#textura").attr('t_suelo'); // get textura valor			   
                var zn_aprovechable = 0;
                if (tipo_textura == 2.0) {
                    zn_aprovechable = zn_suelo / 10.0;
                } else if (tipo_textura == 1.0) {
                    zn_aprovechable = zn_suelo / 10.0;
                } else if (tipo_textura == 2.6) {
                    zn_aprovechable = zn_suelo / 10.0;
                } else {
                    //  alert("Por favor eliga una textura de suelo");
                    // $('ul.tabs').tabs('select_tab', 'vars_sign');
                }
                zn_aprovechable = zn_aprovechable.toFixed(2);
                $("#zn_aprovechable").text("Zn.Apro: " + zn_aprovechable);
                var REQ_ZINC = $("#REQ_ZINC").val(); //get requerimiento nutricional 
                if (REQ_ZINC <= 0 || REQ_ZINC == null || REQ_ZINC == '') {
                    $("#zn_necesidad").html("<del>requerimiento</del>");
                    $("#cant_aplicar_planta_zn").html("No aplica");
                } else {
                    var nf_zinc = REQ_ZINC - zn_aprovechable;
                    nf_zinc = nf_zinc / 20 * 100;
                    nf_zinc = nf_zinc.toFixed(1);
                    $("#zn_necesidad").html("NF.Zn Kg Zn/Ha: " + "<b>" + nf_zinc + "</b>");
                    var n_plantas_siembra = $('#N_plantas').val();

                }

                if (nf_zinc < 0 || nf_zinc == null || nf_zinc == '') {
                    var cant_gr_apli_x_planta = REQ_ZINC * 1000 / n_plantas_siembra;
                    cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                    $("#cant_aplicar_planta_zn").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");

                    setTimeout(function () {
                        Materialize.toast('<span class="tooltipped" data-position="center" data-tooltip="Valor negativo aplicar  "' + REQ_ZINC + ' Kg/Ha">Valor negativo aplicar  ' + REQ_ZINC + ' Kg/Ha de Zn</span>', 8000);
                    }, 1500);
                } else {
                    var cant_gr_apli_x_planta = nf_zinc * 1000 / n_plantas_siembra;
                    cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                    $("#cant_aplicar_planta_zn").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                }

                if (val_zinc < 3) {
                    $("#inter_zinc").text("Est: " + "Bajo");
                } else if (val_zinc >= 3 & val_zinc <= 6) {
                    $("#inter_zinc").text("Est: " + "Medio");
                } else if (val_zinc > 6) {
                    $("#inter_zinc").text("Est: " + "Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_zinc").text("Val");
                }
            })
            .keyup();

        //}          

        //Determinacion para los valores del Fe Hierro{
        $("#hierro").keyup(function () {
                var val_hierro = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                var densidad_aparent = $('#densidad_aparn').val(); // captura  textura valor
                //condicional para sacar el Fe en el suelo
                if (densidad_aparent >= 0.50 & densidad_aparent <= 0.79) {
                    var fe_suelo = 0;
                    fe_suelo = val_hierro * 1.0;
                    fe_suelo = fe_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#fe_suelo").html("Fe.Suelo: " + "<b>" + fe_suelo + "</b>"); // imprime el resultado de Hierro en suelo

                } else if (densidad_aparent >= 0.80 & densidad_aparent <= 0.99) {
                    fe_suelo = val_hierro * 1.6;
                    fe_suelo = fe_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#fe_suelo").html("Fe.Suelo: " + "<b>" + fe_suelo + "</b>"); // imprime el resultado de Hierro en suelo
                } else if (densidad_aparent >= 1 & densidad_aparent <= 1.29) {
                    fe_suelo = val_hierro * 2.0;
                    fe_suelo = fe_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#fe_suelo").html("Fe.Suelo: " + "<b>" + fe_suelo + "</b>"); // imprime el resultado de Hierro en suelo
                } else if (densidad_aparent >= 1.30 & densidad_aparent <= 2.0) {
                    fe_suelo = val_hierro * 2.6;
                    fe_suelo = fe_suelo.toFixed(1); //deja 1 número después de un punto
                    $("#fe_suelo").html("Fe.Suelo: " + "<b>" + fe_suelo + "</b>"); // imprime el resultado de Hierro en suelo
                }

                var tipo_textura = $('option:selected', "#textura").attr('t_suelo'); // get textura valor			   
                var fe_aprovechable = 0;
                if (tipo_textura == 2.0) {
                    fe_aprovechable = fe_suelo / 20.0;
                } else if (tipo_textura == 1.0) {
                    fe_aprovechable = fe_suelo / 20.0;
                } else if (tipo_textura == 2.6) {
                    fe_aprovechable = fe_suelo / 20.0;
                } else {
                    //  alert("Por favor eliga una textura de suelo");
                    // $('ul.tabs').tabs('select_tab', 'vars_sign');
                }
                fe_aprovechable = fe_aprovechable.toFixed(1); //quitar decimales de la derecha dejar uno  
                $("#fe_aprovechable").html("Fe.Apro: " + "<b>" + fe_aprovechable + "</b>"); // imprime el resultado de Azufre aprovechable
                var REQ_HIERRO = $("#REQ_HIERRO").val(); //get requerimiento nutricional 
                if (REQ_HIERRO <= 0 || REQ_HIERRO == null || REQ_HIERRO == '') {
                    $("#fe_necesidad").html("<del>requerimiento</del>");
                    $("#cant_aplicar_planta_fe").html("No aplica");
                } else {
                    var nf_hierro = REQ_HIERRO - fe_aprovechable;
                    nf_hierro = nf_hierro / 8 * 100;
                    nf_hierro = nf_hierro.toFixed(1);
                    $("#fe_necesidad").html("NF.Fe Kg K2O5/Ha: " + "<b>" + nf_hierro + "</b>");
                    var n_plantas_siembra = $('#N_plantas').val();

                    if (nf_hierro < 0 || nf_hierro == null || nf_hierro == '') {
                        var cant_gr_apli_x_planta = REQ_HIERRO * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_fe").html("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                        setTimeout(function () {
                            Materialize.toast('<span class="tooltipped" data-position="center" data-tooltip="Valor negativo aplicar  "' + REQ_HIERRO + ' Kg/Ha">Valor negativo aplicar  ' + REQ_HIERRO + ' Kg/Ha de S</span>', 8000);
                        }, 1500);
                    } else {
                        var cant_gr_apli_x_planta = nf_hierro * 1000 / n_plantas_siembra;
                        cant_gr_apli_x_planta = cant_gr_apli_x_planta.toFixed(0);
                        $("#cant_aplicar_planta_fe").text("(Gr / planta): " + "<b>" + cant_gr_apli_x_planta + "</b>");
                    }

                }

                if (val_hierro < 50) {
                    $("#inter_hierro").text("Bajo");
                } else if (val_hierro >= 50 & val_hierro <= 100) {
                    $("#inter_hierro").text("Medio");
                } else if (val_hierro > 100) {
                    $("#inter_hierro").text("Alto");
                }
                if ($(this).val() == '') {
                    $("#inter_hierro").text("Val").addClass('black-text');
                }
            })
            .keyup();

        //}

        //PLAN DE MEJORAMIENTO QUÍMICO
        //::Calculo de la saturación de aluminio
        $("#saturacion_al").keyup(function () {
                var val_saturacion_al = parseFloat($(this).val());
                this.value = (this.value + '').replace(/[^0-9.]/g, '');
                var sat_ideal = 20; //saturación ideal
                var cice_pmq = $("#cice_pmq").val();
                var ton_ca_co3 = val_saturacion_al - sat_ideal;
                ton_ca_co3 = ton_ca_co3 * 1.5 * cice_pmq / 100;
                ton_ca_co3 = ton_ca_co3.toFixed(1);
                $("#est_saturacion_al").html(' tonCaCO<sup>3</sup>:' + ton_ca_co3+ '<input type="hidden" value="'+ton_ca_co3+'" id="r_ton_ca_co3" >'); 

            })
            .keyup();

        // comprobar el número de cales maximo a aplicar
        function comprobar() {
            var contador = $("#contador").val();
                
            if (contador > 3 || contador < 3) {
                $("#msgs").html("El número de enmiendas debe ser 3 (tres)");
                return false;
            } else {
                $("#msgs").html("Correcto");
            }
          if (contador < 1){
            $("#contador").val("0");
            }
        }setInterval(comprobar, 500);
         
        //:inicio: calculo del valor del porcentaje paara la cal viva
        $('#val_porc_cal_viva').change(function(){ 
                //Operaciones para CalViva
                var val_porc_cal_viva = $(this).val();
                if (val_porc_cal_viva == 65){
                    var caco3 = val_porc_cal_viva * 10;
                    var eq = caco3 * 100 / 134;
                    eq = eq.toFixed(0);
                    var composicion_porc = eq * 0.75;
                    var kgcaco3 = composicion_porc * 40 / 100;
                    var  r_ton_ca_co3  = $("#r_ton_ca_co3").val();
                    var mq_al = 1 *  r_ton_ca_co3 / 0.93;
                    mq_al = mq_al.toFixed(2);
                    var necesidad_aplicar = mq_al * val_porc_cal_viva / 100;
                    necesidad_aplicar = necesidad_aplicar.toFixed(1);
                    var necesidad_aplicar_kg = necesidad_aplicar * 1000;
                    $("#result_cal_viva").html("Aplicar " + necesidad_aplicar+ " toneladas");
                    
                }else if (val_porc_cal_viva == 20){
                    var caco3 = val_porc_cal_viva * 10;
                    var eq = caco3 * 100 / 134;
                    eq = eq.toFixed(0);
                    var composicion_porc = eq * 0.75;
                    var kgcaco3 = composicion_porc * 40 / 100;
                    var  r_ton_ca_co3  = $("#r_ton_ca_co3").val();
                    var mq_al = 1 *  r_ton_ca_co3 / 0.93;
                    mq_al = mq_al.toFixed(2);
                    var necesidad_aplicar = mq_al * val_porc_cal_viva / 100;
                    necesidad_aplicar = necesidad_aplicar.toFixed(1);
                    var necesidad_aplicar_kg = necesidad_aplicar * 1000;
                    $("#result_cal_viva").html("Aplicar " + necesidad_aplicar+ " toneladas");
                    
                }
            else if (val_porc_cal_viva == 15){
                    var caco3 = val_porc_cal_viva * 10;
                    var eq = caco3 * 100 / 134;
                    eq = eq.toFixed(0);
                    var composicion_porc = eq * 0.75;
                    var kgcaco3 = composicion_porc * 40 / 100;
                    var  r_ton_ca_co3  = $("#r_ton_ca_co3").val();
                    var mq_al = 1 *  r_ton_ca_co3 / 0.93;
                    mq_al = mq_al.toFixed(2);
                    var necesidad_aplicar = mq_al * val_porc_cal_viva / 100;
                    necesidad_aplicar = necesidad_aplicar.toFixed(1);
                    var necesidad_aplicar_kg = necesidad_aplicar * 1000;
                    $("#result_cal_viva").html("Aplicar " + necesidad_aplicar+ " toneladas");
                    
                }
        
        });

        //esta función permite asignar colores para diferenciar de las que no se han seleccionado y calculado en tiempo real
        function set_color_row() {
            var contador = $("#contador").val();
            var cont = 0;
            if ($('#s_cal_viva').is(':checked')) {
                cont++;
                $("#contador").val(cont);
                $(".s_cal_viva").closest('tr').addClass('lime lighten-4');

                
            } else {
                $(".s_cal_viva").closest('tr').removeClass('lime lighten-4');
            }

            if ($('#s_cal_hidratada').is(':checked')) {
                cont++;
                $("#contador").val(cont);
                $(".s_cal_hidratada").closest('tr').addClass('lime lighten-4');
            } else {
                
                $(".s_cal_hidratada").closest('tr').removeClass('lime lighten-4');
            }

            if ($('#s_cal_dolomita').is(':checked')) {
                cont++;
                $("#contador").val(cont);
                $(".s_cal_dolomita").closest('tr').addClass('lime lighten-4');
            } else {
                $(".s_cal_dolomita").closest('tr').removeClass('lime lighten-4');
            }

            if ($('#s_abono_paz_rio').is(':checked')) {
                cont++;
                $("#contador").val(cont);
                $(".s_abono_paz_rio").closest('tr').addClass('lime lighten-4');
            } else {
                $(".s_abono_paz_rio").closest('tr').removeClass('lime lighten-4');
            }
            if ($('#s_roca_fosforica').is(':checked')) {
                cont++;
                $("#contador").val(cont);
                $(".s_roca_fosforica").closest('tr').addClass('lime lighten-4');
            } else {
                $(".s_roca_fosforica").closest('tr').removeClass('lime lighten-4');
            }
            if ($('#s_escorias').is(':checked')) {
                cont++;
                $("#contador").val(cont);
                $(".s_escorias").closest('tr').addClass('lime lighten-4');
            } else {
                $(".s_escorias").closest('tr').removeClass('lime lighten-4');
            }
            if ($('#s_yeso_agricola').is(':checked')) {
                cont++;
                $("#contador").val(cont);
                $(".s_yeso_agricola").closest('tr').addClass('lime lighten-4');
            } else {
                $(".s_yeso_agricola").closest('tr').removeClass('lime lighten-4');
            }
            if ($('#s_dolomita_calcindad').is(':checked')) {
                cont++;
                $("#contador").val(cont);
                $(".s_dolomita_calcindad").closest('tr').addClass('lime lighten-4');
            } else {
                $(".s_dolomita_calcindad").closest('tr').removeClass('lime lighten-4');
            }
        }setInterval(set_color_row, 800);

    }); //Cierre de la preparación del documento.        

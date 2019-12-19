        // Grafico de Barras para los elementos
               $(document).ready(function(){
                  $(document).on('click', 'body', function(){          
                  var ph = $('#ph').val();  var ph_est = $("#inter_ph").text(); $("#ph_est").text(ph_est);   
                  var ce = $('#ce').val();  var ce_est = $("#inter_ce").text(); $("#ce_est").text(ce_est);
                  var ndvi = $('#ndvi').val(); var ndvi_est = $("#inter_ndvi").text(); $("#ndvi_est").text(ndvi_est); 
                  var clorofila = $('#clorofila').val(); var cloro_est = $("#inter_cloro").text(); $("#cloro_est").text(cloro_est);    
					var sat_hum = $('#sat_hum').val(); var sathum_est = $("#inter_sat_hum").text(); $("#sathum_est").text(sathum_est); 
                  var nitro = $('#nitro').val(); var n_est = $("#inter_nitrogeno").text(); $("#n_est").text(n_est);   
 
                      
        new Chart(document.getElementById("line-chart"), {
          type: 'line',
          data: {
            labels: ["PH (%)", "C.E (ds.m -1)", "NDVI (%)", "CLOROFILA (%)", "SAT HUM (%)", "NITROGENO (%)"],
            datasets: [{ 
                data: [ph, ce, ndvi, clorofila,sat_hum, nitro],
                label: "Valoración en la absorción de nutrientes",
                borderColor: "#ff6600",
                fill: false
              },
            ]
          },
          options: {
            title: {
              display: true,
              text: 'Estimación de las variables del tejido foliar'
            }
          }
        });             
                  
         var fosforo = $('#fosforo').val();  
         var est_p = $("#inter_fosforo").text(); $("#est_p").html("[ P ]"+" " + "  "+ est_p); 
         var calcio = $('#calcio').val();  
         var est_ca = $("#inter_calcio").text(); $("#est_ca").text("[ Ca ]"+" "+ est_ca);    
         var magnecio = $('#magnecio').val();  
         var est_mg = $("#inter_magnecio").text(); $("#est_mg").text("[ Mg ]"+" "+ est_mg); 
         var potasio = $('#potasio').val();                                        
         var est_k = $("#inter_potasio").text(); $("#est_k").text("[ K ]"+" "+ est_k); 
         var cloro = $('#cloro').val(); 
         var est_cl = $("#inter_cloro").text(); $("#est_cl").text("[ Cl ]"+" "+ est_cl); 
         var azufre = $('#azufre').val();    
         var est_s = $("#inter_azufre").text(); $("#est_s").text("[ S ]"+" "+ est_s); 
         var manganeso = $('#manganeso').val();                              
         var est_mn = $("#inter_manganeso").text(); $("#est_mn").text("[ Mn ]"+" "+ est_mn);      
         var boro = $('#boro').val();                              
         var est_b = $("#inter_boro").text(); $("#est_b").text("[ B ]"+" "+ est_b); 
         var cobre = $('#cobre').val();                                            
         var est_cu = $("#inter_cobre").text(); $("#est_cu").text("[ Cu ]"+" "+ est_cu); 
         var zinc = $('#zinc').val();                                          
         var est_zn = $("#inter_zinc").text(); $("#est_zn").text("[ Zn ]"+" "+ est_zn); 
         var hierro = $('#hierro').val();                                
         var est_fe = $("#inter_hierro").text(); $("#est_fe").text("[ Fe ]"+" "+ est_fe); 
         var molibdeno = $('#molibdeno').val();
         var est_mo = $("#inter_molibdeno").text(); $("#est_mo").text("[ Mo ]"+" "+ est_mo); 
 
    new Chart(document.getElementById("elements_chart"), {
    type: 'bar',
    data: {
      labels: ["P (%)", "Ca (%)", "Mg (%)", "K (%)", "Cl (mg.kg -1)", "S (%)", "Mn (mg.kg -1)", "B (mg.kg -1)", "Cu (mg.kg -1)", "Zn (mg.kg -1)", "Fe (mg.kg -1)", "Mo (mg.kg -1)"],
      datasets: [
        {
          label: "Estimación (Nutrientes)",
        backgroundColor: ["#ff0000", "#ff4000","#ff8000","#ffbf00","#ffff00","#00ff80", "#00ffbf","#00bfff","#0040ff","#4000ff","#bf00ff","#00bfa5"],
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

             });
   


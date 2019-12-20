            // Permite realizar la interpretación en gráficos de los elementos y las variables del suelo
               $(document).ready(function(){
                   //esta función captura los datos del formulario de las variables más significativas del suelo y las nterpreta en un gráfico con ayuda de la librería de chartJs
                  $(document).on('click', '#grafic', function(){          
                //:inicio:      variables del suelo
                  var ph = $('#ph').val();  var ph_est = $("#inter_ph").text(); $("#ph_est").text(ph_est);   
                  var ce = $('#ce').val();  var ce_est = $("#inter_ce").text(); $("#ce_est").text(ce_est);
                  var cice = $('#cice').val(); var cice_est = $("#inter_cice").text(); $("#cice_est").text(cice_est); 
                  var salinidad = $('#salinidad').val(); var sal_est = $("#inter_sal").text(); $("#sal_est").text(sal_est); 
                  var nitro = $('#nitro').val(); var n_est = $("#inter_nitrogeno").text(); $("#n_est").text(n_est);   
                //:fin:
                      
        new Chart(document.getElementById("variables-graf"), {
          type: 'line',
          data: {
            labels: ["PH (%)", "C.E (ds.m -1)", "C.I.C.E (cmol.kg -1)", "SALINIDAD (ppm)", "NITROGENO (%)"],
            datasets: [{ 
                data: [ph, ce, cice, salinidad, nitro],
                label: "Nutrición al suelo",
                borderColor: "#3cba9f",
                fill: false
              },
            ]
          },
          options: {
            title: {
              display: true,
              text: 'Estimación de las variables del suelo'
            }
          }
        });             
            
        //:inicio:elementos del suelo  con su respectiva estimación              
         var fosforo = $('#fosforo').val();  
         var est_p = $("#inter_fosforo").text(); $("#est_p").html("[ P ]"+" " + "  "+ est_p); 
         var calcio = $('#calcio').val();  
         var est_ca = $("#inter_calcio").text(); $("#est_ca").text("[ Ca ]"+" "+ est_ca);    
         var magnecio = $('#magnecio').val();  
         var est_mg = $("#inter_magnecio").text(); $("#est_mg").text("[ Mg ]"+" "+ est_mg); 
         var potasio = $('#potasio').val();                                        
         var est_k = $("#inter_potasio").text(); $("#est_k").text("[ K ]"+" "+ est_k); 
         var sodio = $('#sodio').val(); 
         var est_na = $("#inter_sodio").text(); $("#est_na").text("[ Na ]"+" "+ est_na); 
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
        //:fin:
            
    //:inicio: interpretación de los elementos del suelo
    new Chart(document.getElementById("elements_chart"), {
    type: 'bar',
    data: {
      labels: ["P (Bray II)", "Ca (cmol kg)", "Mg (cmol kg)", "K (cmol kg)", "Na (cmol kg)", "S (ppm)", "Mn (ppm)", "B (ppm)", "Cu (ppm)", "Zn (ppm)", "Fe (ppm)"],
      datasets: [
        {
          label: "Estimación (Nutrientes)",
        backgroundColor: ["#ff0000", "#ff4000","#ff8000","#ffbf00","#ffff00","#00ff80", "#00ffbf","#00bfff","#0040ff","#4000ff","#bf00ff"],
        data: [fosforo, calcio, magnecio, potasio, sodio, azufre, manganeso, boro, cobre, zinc, hierro]
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
     //:fin: interpretación de los elementos del suelo                 
 
             });

             });
   


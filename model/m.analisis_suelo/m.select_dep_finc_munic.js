//PERMITE SELECCIONAR Departamento  municipio y finca en la plantilla , realizadola a través del archivo select_dep_muni_finc.php
$(document).ready(function(){
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
    url:"../../control/analisis_suelo/select_dep_muni_finc.php",
    method:"POST",
    data:{selec_control:selec_control, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
});
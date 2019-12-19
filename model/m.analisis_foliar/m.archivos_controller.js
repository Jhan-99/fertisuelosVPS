$(document).ready(function(){
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
 $('#multiple_files').change(function(){
  var error_images = '';
  var form_data = new FormData();
  var id_ana = document.getElementById("id_cabecera_suelos").value; // esta variable rrecoge el id de la cabecera del análisis de suelo
  var files = $('#multiple_files')[0].files;
  if(files.length > 10)
  {
   error_images += 'No puedes seleccionar más de 10 archivos';
  }
  else
  {
   for(var i=0; i<files.length; i++)
   {
    var name = document.getElementById("multiple_files").files[i].name;
    var ext = name.split('.').pop().toLowerCase();
    if(jQuery.inArray(ext, ['zip','xlsx','docx','pdf']) == -1) 
    {
     error_images += '<p>Archivo '+i+' Invalido</p>';
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("multiple_files").files[i]);
    var f = document.getElementById("multiple_files").files[i];
    var fsize = f.size||f.fileSize;
    if(fsize > 5000000)
    {
     error_images += '<p>' + i + ' El peso del archivo es muy grande.</p>';
    }
    else
    {
     form_data.append("file[]", document.getElementById('multiple_files').files[i]);
     form_data.append('id_ana', id_ana);// asignar la varible del analisis al formulario para enviarlo por array
    }
   }
  }
  if(error_images == '')
  {
   $.ajax({
    url:"../../control/analisis_suelo/subir_archivos_ana_suelo.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#error_multiple_files').html('<br /><label class="blue-text">Subiendo archivo (s)...</label>');
    },   
    success:function(data)
    {
     $('#error_multiple_files').html('<br /><label class="green-text">Subido correctamente</label>');
     load_image_data();
    }
   });
  }
  else
  {
   $('#multiple_files').val('');
   $('#error_multiple_files').html("<span class='red-text'>"+error_images+"</span>");
   return false;
  }
 });  
 $(document).on('click', '.edit', function(){
  var id_archivo = $(this).attr("id");
  $.ajax({
   url:"../../control/analisis_suelo/editar_archivos_ana_suelo.php",
   method:"post",
   data:{id_archivo:id_archivo},
   dataType:"json",
   success:function(data)
   {
    $('#modal_archivos').modal('open');
    $('#id_archivo').val(id_archivo);
    $('#nombre_archivo').val(data.nombre_archivo);
    $('#descripcion_archivo').val(data.descripcion_archivo);
   }
  });
 }); 
 $(document).on('click', '.delete_file', function(){
  var id_archivo = $(this).attr("id");
  var nombre_archivo = $(this).data("nombre_archivo");
  if(confirm("Estás seguro de eliminar este archivo?"))
  {
   $.ajax({
    url:"../../control/analisis_suelo/eliminar_archivos_ana_suelo.php",
    method:"POST",
    data:{id_archivo:id_archivo, nombre_archivo:nombre_archivo},
    success:function(data)
    {
     load_image_data();
     alert("Archivo eliminado");
    }
   });
  }
 }); 
 $('#form_edita_archivo').on('submit', function(event){
  event.preventDefault();
  if($('#nombre_archivo').val() == '')
  {
   alert("Introduce el nombre del archivo");
  }
  else
  {
   $.ajax({
    url:"../../control/analisis_suelo/actualizar_archivos_ana_suelo.php",
    method:"POST",
    data:$('#form_edita_archivo').serialize(),
    success:function(data)
    {
     $('#modal_archivos').modal('close');
     load_image_data();
     alert('Detalles del archivo actualizado');
    }
   });
  }
 }); 
});
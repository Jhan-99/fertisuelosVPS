
 $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    locale: 'es',
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay',

    },
    events: '../../control/prog_cosechas/cargar_eventos.php',
    selectable:true,
    selectHelper:true,
    select: function(start, end, allDay)
    {
     var title = prompt("Introduce un titulo para el evento");
     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      $.ajax({
       url:"../../control/prog_cosechas/insertar_evento.php",
       type:"POST",
       data:{title:title, start:start, end:end},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Evento Agregado correctamente");
       }
      })
     }
    },
    editable:true,
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"../../control/prog_cosechas/actualizar_evento.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Actualización de evento');
      }
     })
    },

    eventDrop:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"../../control/prog_cosechas/actualizar_evento.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Evento Actualizado");
      }
     });
    },

    eventClick:function(event)
    {
     if(confirm("Estás seguro de eliminar este evento?"))
     {
      var id = event.id;
      $.ajax({
       url:"../../control/prog_cosechas/eliminar_eventos.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Evento eliminado");
       }
      })
     }
    },

   });
     
     ////////////// CARGAR LOS DATOS AUTOMATICAMENTE DESPUÉS DE CADA MODIFICACIÓN
    setInterval(function(){//setInterval() method execute on every interval until called clearInterval()
  $('#carga_eventos').load("../../control/prog_cosechas/traer_eventos_cercanos.php").fadeIn("slow");
  //load() method fetch data from fetch.php page
 }, 1000);
  });
   
  
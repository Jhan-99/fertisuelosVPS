//Este archivo me permite controlar la progrmación ccosechas en el calendario en vivo 

 $(document).ready(function() {
     //:inicio: inicialización del calendario
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    locale: 'es',
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay',

    },
    //:fin:   
       
    events: '../../control/prog_cosechas/cargar_eventos.php', //-> url que carga los eventos
    selectable:true,
    selectHelper:true,
    //:inicio función que inserta un evento en el calendario de la programación de cosechas:   
    select: function(start, end, allDay)
    {
     var title = prompt("Introduce un titulo para el evento");
     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");// -> formato horario del evento
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");// -> formato horario del evento
      $.ajax({
       url:"../../control/prog_cosechas/insertar_evento.php", //-> url que inserta un evento en el calendario a la programación de cosechas
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
    //:fin:   
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"../../control/prog_cosechas/actualizar_evento.php", //-> url que actualiza un evento un evento de la programación de cosechas en el calendario
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Actualización de evento');
      }
     })
    },

       //:inicio: función que actualiza un evento de la programación de cosechas
    eventDrop:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"../../control/prog_cosechas/actualizar_evento.php",// -> url que actualiza un evento en el calendario para la progrmación de cosechas 
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Evento Actualizado");
      }
     });
    },
       //:fin:

    //:inicio:    función que elimina una evento de la programacion de cosechas
    eventClick:function(event)
    {
     if(confirm("Estás seguro de eliminar este evento?"))
     {
      var id = event.id;
      $.ajax({
       url:"../../control/prog_cosechas/eliminar_eventos.php", //-> url que elimina un evento en el calendario de la programación de coechas
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
    //:fin:   

   });
     
     ////////////// CARGAR LOS DATOS AUTOMATICAMENTE DESPUÉS DE CADA MODIFICACIÓN
    setInterval(function(){//setInterval() method execute on every interval until called clearInterval()
  $('#carga_eventos').load("../../control/prog_cosechas/traer_eventos_cercanos.php").fadeIn("slow");
  //load() method fetch data from fetch.php page
 }, 1000);
  });
   
  
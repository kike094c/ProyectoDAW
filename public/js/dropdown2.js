//tecnicos

$("#compania").change(function(event){
  $.get("/tecnico/insertar/incidencia/"+event.target.value+"",function(response,compania){
    $("#handling").empty();
    for(i=0; i<response.length; i++){
      $("#handling").append("<option value='"+response[i]+"'>"+response[i]+"</option>");
    }
  });
});


$("#tipoIncidencia").change(function(event){
  $.get("/tecnico/insertar/incidencia/causante/"+event.target.value+"",function(response,tipo){
    $("#causante").empty();

    for(i=0; i<response.length; i++){
      $("#causante").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
    }
  });
});

$("#causante").change(function(event){
  $.get("/tecnico/insertar/incidencia/tipo/"+event.target.value+"",function(response,causante){
    $("#tipoCausante").empty();
    for(i=0; i<response.length; i++){
      $("#tipoCausante").append("<option value='"+response[i].tipoCausante_id+"'>"+response[i].nombreTipo+"</option>");
    }
  });
});

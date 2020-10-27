
function llenarPersonas(){

    // especialidad=vespecialidad;
    // anio=$("#anio").val();

    $.ajax({
        url:"../listas/listaPersona.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#llenar_personas").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra Trabajador");
        }
    });
}


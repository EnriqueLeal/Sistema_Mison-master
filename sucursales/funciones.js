function datos_persona(num_empleado) {
    $.ajax({
        url: "datos_persona.php",
        type: "POST",
        dateType: "html",
        data: {
            'id_persona': id_persona
        },
        success: function(respuesta) {
        	array = eval(respuesta);
            $('#id_persona').val(array[0]);
        	

        },
        error: function(xhr, status) {
            alert(xhr);
        },
    });
}
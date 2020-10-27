
function nuevaPersona(){
    // alert("Hola");
    var $num_empleado = document.getElementById("num_empleado").value;
   
    

     // $paterno, $paterno, $materno, $fechanac, $sexo);
    $.ajax({
        url:"../guardar/guardarPersona5.php",
        type:"POST",
        dateType:"html",
        data:{"num_empleado" : $num_empleado}, 
        success:function(respuesta){
                swal(
                  'Procesando!',
                  'El registro se ha guardado!',
                  'info'
                ).then(function () {
                    $('#num_empleado').focus();
                })
                // alertify.success("El registro se ha guardado");
                llenarPersonas();
                iniciarPersona();


                //slimpiar();
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}


///////////////////////////////////////////////////////////////////////////////----------------- H O R A R I O S



function iniciarPersona()
{
    // $("#frmNuevaPersona").[0].reset();
  $('#frmNuevaPersona')[0].reset();
    document.getElementById("nombre").value = "";
   
   
}
function comprobarDatos(datos) {
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

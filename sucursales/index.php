<?php 
include("../global_seguridad/verificar_sesion.php");

$variable=$_SESSION["s_IdNameUser"];
//echo $variable;
$nombre=$_SESSION["s_IdPersona"];
//echo $nombre;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="charset=utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<title>SupSys</title>
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.css">
  <!-- sweetalert2 -->
  <link rel="stylesheet" type="text/css" href="../plugins/sweetalert2-master/dist/sweetalert2.css">
  <!-- peace -->
   <link rel="stylesheet" type="text/css" href="../plugins/pace/themes/pace-theme-corner-indicator.css">
  <!-- estilo propio -->
  
   <!-- alertify -->
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
    <link rel="stylesheet" href="../plugins/select2-master/dist/css/select2.css">
    <link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">

    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
    <!-- <link href="../assets/css/style.css" rel="stylesheet"> -->
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <!-- <script src="../plugins/jquery/jquery-1.8.3.min.js"></script> -->
	<link href='../assets/img/logo.png' rel='shortcut icon' type='image/png'/>

	<!-- <link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="../assets/css/bootstrap.css"  /> -->
	<!-- <link rel="stylesheet" href="../assets/css/font-awesome.css"  /> -->
	<link rel="stylesheet" href="../assets/css/custom.css"  />
	<!-- <link rel="stylesheet" href="../assets/css/responsiveslides.css"> -->
	<!-- <link rel="stylesheet" href="../assets/css/demo.css"> -->
	<!-- <link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="../assets/css/personal.css"> -->

	<link href='../assets/img/logo.png' rel='shortcut icon' type='image/png'/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" />
	
	
	
	
	<!-- <script>
  		$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
	</script> -->
</head>
<body>
				<div id="wrapper">
					<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
						<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                		</button>
                <a class="navbar-brand" href="index.php">SupSys</a> 

            	</div>
      				 <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">  &nbsp; <a href="../login/cerrarsesion.php" class="btn btn-danger square-btn-adjust">Cerrar Sesion</a></div>
					</nav>   
                              <!-- /. NAV TOP  -->
					<nav class="navbar-default navbar-side" role="navigation">
							<?php include ("menu.php"); ?>
					</nav>  
                               <!-- /. NAV SIDE  -->
				<div id="page-wrapper" >
						<div id="page-inner">
							<div class="row">
								<div class="col-md-12">
						<h5 align="right">Bienvenido(a): <b>
							<?php echo "$nombre" ;?> </b></h5><br>
						<!--A partir de aqui construyo mi formulario -->
						<h2>Sucursales</h2>
						<hr>
					<section>
						<form id="frmNuevaSucursal" method="post" class="form-vertical">
                                
                                

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="nombre">Número de empleado:</label>
                                                    <div class="error">
                                                    <input class="form-control" id="num_empleado" type="number" autofocus placeholder="Coloca el empleado" name="num_empleado" required>
                                                    </div>
                                                </div>               
                                            </div>

                                             <br><br><br>
                                        <input type="submit" value="Guardar" class="btn btn-primary btn-main center-block" >
                                           
                                        </div>

                                     
                                </div>
                          
                            </form>
                          </section>
                      <div class="row">
            
                   
     
				        <!-- <form action="insertar_sucursal.php" method="POST" id="formulario">
							<div class="form-group col-md-6">
								<label for="nombre">Nombre: </label>
								<input type="text" class="form-control" name ="nombre" placeholder="Ej. Diaz Ordaz" autofocus="" required >
							</div>
                                                                       
							<div class="form-group col-md-6" >
								<label for="direccion">Direccion: </label>
								<input type="text" class="form-control" name="direccion" placeholder="Av. Diaz Ord�z Esq. con Pablo Salce, Linares, NL. Mex." required="">
							</div>
							<div class="form-group col-md-12" align="right" >
							
						 		<input type="submit" value="Registrar" class="btn btn-danger">
								</form> -->
																
						
							<br><hr>

							<?php include'tabla_sucursales.php' ;
							 include '../configuracion/conexion.php';
							 ?>
						</div> 
							<!--Aqui termina el espacio de mi formulario -->
						</div>
                 	<hr />              
			</div>
    </div>
  </div>
</div>
<script src="../assets/js/custom.js"></script>

     <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->

<script src="../plugins/pace/pace.js"></script>
<script src="../plugins/jquery/jquery-3.2.1.min.js"></script>

<script src="../plugins/alertifyjs/alertify.js"></script>
<script src="../plugins/jquery-validation/dist/jquery.validate.js"></script>
<script src="../plugins/jquery-validation/messages_es.js"></script>
<script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script>
<script src="../plugins/pace/pace.js"></script>
<script src="../plugins/alertifyjs/alertify.js"></script>
<!-- modificado -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>

<!-- script propios -->
<script src="../js/reportes.js" ></script>
<script src="../js/acomodo.js"></script>
<script src="../js/ingresar.js"></script>
<script src="../js/listas.js"></script>
<script src="../js/status.js"></script>
<!-- script propios -->

	<script type="text/javascript">
       $( "#frmNuevaSucursal" ).validate( {
            submitHandler: function () {
                nuevaPersona();
            }
        } );

    $( document ).ready( function () {
      $( "#frmNuevaSucursal" ).validate( {
        rules: {
          num_empleado: {
            required: true,
            number:true
          }
        
        },
        messages:{
          num_empleado: {
                        required: "Obligatorio",
                        number: "Solo numeros",
                        min: jQuery.validator.format("Menor {0}."),
                        max: jQuery.validator.format("Mayor o igual a {0}."),
                        maxlength: jQuery.validator.format("Mayor a {0} caracteres."),
                        }

        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".error" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".error" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      } );

    } );
</script>
		<script type="text/javascript">
        function OnChangeCheckbox (checkbox) {
            ajax = function(url){
                var xhr = window.XMLHttpRequest ? 
                          new XMLHttpRequest() : 
                          new ActiveXObject("Microsoft.XMLHTTP") || 
                          new ActiveXObject("Msxml2.XMLHTTP");
         
                xhr.open("GET", url, true);
                xhr.send(null);
            };
        var estado = checkbox.checked ? 1 : 0, //Si está marcado, asigno 1 a 'estado', si no, 0
        id = checkbox.getAttribute("data-id"), //El valor del pseudo-atributo 'data-id'
        url = "editar_estado.php?estado=" + estado + "&id=" + id;
        ajax(url); 

        if (estado==0) {
            alert("El registro se ha desactivado");
        };
        if (estado==1) {
            alert("El registro ha sido activado");
        };
        }
    </script>
    

<!-- <script src="js/jquery-1.10.1.min.js"></script> -->
<!-- <script src="js/bootstrap.min.js"></script> -->
<script>
$('#myModal').modal('hidden')
</script>
</body>
</html>
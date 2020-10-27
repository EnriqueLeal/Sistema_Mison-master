<?php
//se manda llamar la conexion
include("../configuracion/conexion.php");

// include("../global_seguridad/verificar_sesion.php");
// include("../configuracion/credenciales.php");

date_default_timezone_set('America/Monterrey');
//variables post
//variables post
//$s_idUsuario = $_SESSION["s_IdUser"];
//
 
 $fecha = date("Y-m-d");
 
$hora = date('H:i:s');
$numero_dia = date('N', strtotime($fecha));
$pNom_empleado=$_POST["num_empleado"]; 


$s_idUsuario = $_SESSION["s_IdUser"];



	echo $hora;
 


   mysql_query('SET NAMES utf8');
                                 $consulta=mysql_query("SELECT historial_incidencias.id_historial_incidencia,
                                                                  historial_incidencias.num_empleado,
                                                                  horarios.hora_entrada,
                                                                  horarios.hora_salida,
                                                                  horarios.hora_limite_salida
                                    FROM historial_incidencias
INNER JOIN horarios 
ON historial_incidencias.num_empleado = horarios.num_empleado

WHERE  historial_incidencias.num_empleado = '$pNom_empleado' AND horarios.dia = '$numero_dia'",$conexion) or die (mysql_error());
// $result= mysql_query($consulta, $conexion) or die(mysql_error());
// $result = mysql_query($qry,$conexion); 

//  $consulta=mysql_query("SELECT p.id_puesto ,p.nom_puesto,activo
// FROM puestos p",$conexion) or die (mysql_error());
// $row=mysql_fetch_row($result);
// // //Se cuenta el numero de filas
// $result = mysql_query($consulta,$conexion); 
// $row=mysql_fetch_row($consulta);
$num = mysql_num_rows($consulta);

// VUELTA DE SALIDA


// FIN
while ($row=mysql_fetch_row($consulta))

	$n=1;
                                 {
                                 	
                               

                                 

                                 
                         


      echo $row2[1];                           	
                

if($num==1)
{
$act = mysql_query("UPDATE historial_incidencias
                                        SET fecha_salida = '$fecha',
                                         hora_salida = '$hora'
                                        
                                        WHERE
                                            num_empleado = '$pNom_empleado'");
$ejecura = mysql_query($act,$conexion);
}



	



// elseif ($var10 <= $var3) {
// 	$resultado = $var3 - $var10; 


// 	if ($resultado >= $var10) {
// 		$insertar= mysql_query("INSERT INTO historial_incidencias

// 							(num_empleado,
// 							id_horario,
						
// 							  fecha_ingreso,
// 							  hora_ingreso,
// 							  id_incidencia,
// 							  id_justificacion)
							
// 						VALUES
// 							('$pNom_empleado', '$var1', '$fecha', '$hora', '3', '1')",$conexion) or die (mysql_error());
//  $execute = mysql_query($insertar, $conexion);
// 		# code...
// 	}

	
// 	# code...
// }
// 
// 
else{
	

	mysql_query('SET NAMES utf8');
 $consulta2=mysql_query("
					 	SELECT horarios.hora_entrada,
					 	horarios.hora_limite,
					 	puestos.id_puesto,
					 	departamentos.id_departamento,
					 	horarios.num_empleado,
					 	 horarios.dia,
					 	 horarios.id_horario,
					 	 horarios.hora_limite_salida
 						FROM trabajadores
 						INNER JOIN horarios
 						ON trabajadores.num_empleado = horarios.num_empleado
 						INNER JOIN puestos
						ON trabajadores.id_puesto = puestos.id_puesto 
						INNER JOIN departamentos
						ON trabajadores.id_departamento = departamentos.id_departamento


WHERE  horarios.num_empleado = '$pNom_empleado' AND horarios.dia = '$numero_dia'",$conexion) or die (mysql_error());


 $num2 = mysql_num_rows($consulta2);

 while ($row2=mysql_fetch_row($consulta2))
 {
 	echo " ";
	echo $row2[0];
	
	if ($hora >= $row2[0] AND $hora <= $row2[1] )
	{
		$insertar2 = mysql_query("INSERT INTO historial_incidencias

							(num_empleado,
						  id_puesto,
						  id_departamento,
							  fecha_ingreso,
							
							  hora_ingreso,
							  id_incidencia,
							  id_justificacion)
							
						VALUES
							('$pNom_empleado','$row2[2]', '$row2[3]','$fecha', '$hora', '1', '1')",$conexion) or die (mysql_error());
 $execute1 = mysql_query($insertar2, $conexion);

		# code...
	}
// 	elseif  ($num ==1 AND $hora >= $row2[7] )
// 	{
//       $act2 = mysql_query("UPDATE historial_incidencias
//                                         SET fecha_salida = '$fecha',
//                                          hora_salida = '$hora',
//                                          id_incidencia2 =  '2'
                                        
//                                         WHERE
//                                             num_empleado = '$pNom_empleado'");
// $ejecura2 = mysql_query($act2,$conexion);

// 	}
// 	elseif ($hora >= $row2[1]) {
		
// $insertar6 = mysql_query("INSERT INTO historial_incidencias

// 							(num_empleado,
// 						  id_puesto,
// 						  id_departamento,
// 							  fecha_ingreso,
							
// 							  hora_ingreso,
// 							  id_incidencia,
// 							  id_justificacion)
							
// 						VALUES
// 							('$pNom_empleado','$row2[2]', '$row2[3]','$fecha', '$hora', '2', '1')",$conexion) or die (mysql_error());
//  $execute6 = mysql_query($insertar6, $conexion);
// 		# code...

	
// 	}
elseif ($hora >= $row2[1] AND $hora >= $row2[1]) 
{

	




	$insertar2 = mysql_query("INSERT INTO historial_incidencias

							(num_empleado,
						  id_puesto,
						  id_departamento,
							  fecha_ingreso,
							
							  hora_ingreso,
							  id_incidencia,
							  id_justificacion)
							
						VALUES
							('$pNom_empleado','$row2[2]', '$row2[3]','$fecha', '$hora', '2', '1')",$conexion) or die (mysql_error());
 $execute1 = mysql_query($insertar2, $conexion);
	// $insertar4= mysql_query("INSERT INTO historial_incidencias

	// 						(num_empleado,
	// 					  id_puesto,
	// 					  id_departamento,
	// 						  fecha_ingreso,
							
	// 						  hora_ingreso,
	// 						  id_incidencia,
	// 						  id_justificacion)
							
	// 				VALUES
	// 						('$pNom_empleado','$row2[2]', '$row2[3]','$fecha', '$hora', '4', '1')",$conexion) or die (mysql_error());
 // $execute4 = mysql_query($insertar4, $conexion);
 
}
}


}
}
$n++;
?>


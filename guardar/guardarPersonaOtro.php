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
 
 
 

$numero_dia = date('N', strtotime($fecha));
$pNom_empleado=$_POST["num_empleado"]; 


$s_idUsuario = $_SESSION["s_IdUser"];




//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");

 // mysql_query('SET NAMES utf8');
  mysql_query('SET NAMES utf8');
                                 $consulta=mysql_query("SELECT id_historial_incidencia,
                                                                  historial_incidencias.num_empleado,
                                                                  horarios.hora_entrada,
                                                                  horarios.hora_salida,
                                                                  horarios.hora_limite_salida
                                    FROM historial_incidencias
INNER JOIN horarios 
ON historial_incidencias.num_empleado = horarios.nom_empleado

WHERE  historial_incidencias.num_empleado = '7863' AND horarios.dia = '1'",$conexion) or die (mysql_error());

$num = mysql_num_rows($consulta);

                                                                
                                 $n=1;
                                 while ($row=mysql_fetch_row($consulta))
                                 {
                               


                               
                                 
                                 if ($row[1] == $pNom_empleado AND $hora >=  $row[3] AND $hora <= $row[4] )
                                  {
                                    echo "else";

                         $act = mysql_query("UPDATE historial_incidencias
                                        SET fecha_salida = '$fecha',
                                      hora_salida = '$hora'
                                        
                                      WHERE num_empleado = '$pNom_empleado'");
$ejecura = mysql_query($act,$conexion);
                                 	echo "Esto es un if (UPDATE SALIDA )";
                                 	# code...
                                 }
                                 else{
                                  echo "ELSE";
                                 }
                             


}

// }

//   $consulta=mysql_query("SELECT id_historial_incidencia,
// historial_incidencias.num_empleado,
// puestos.nom_puesto,
// departamentos.nom_departamento,
// horarios.id_horario,
// historial_incidencias.hora_ingreso,
// historial_incidencias.fecha_ingreso,
// historial_incidencias.hora_salida,
// historial_incidencias.fecha_salida,
// horarios.hora_entrada
// FROM historial_incidencias
// INNER JOIN trabajadores 
// ON historial_incidencias.num_empleado = trabajadores.num_empleado
// INNER JOIN puestos
// ON trabajadores.id_puesto = puestos.id_puesto
// INNER JOIN departamentos
// ON trabajadores.id_departamento = departamentos.id_departamento
// INNER JOIN horarios
// ON trabajadores.num_empleado = horarios.nom_empleado

// WHERE  historial_incidencias.num_empleado = '$pNom_empleado' AND horarios.dia = '1'",$conexion) or die (mysql_error());
// $result= mysql_query($consulta, $conexion) or die(mysql_error());
// // $result = mysql_query($qry,$conexion); 

// //  $consulta=mysql_query("SELECT p.id_puesto ,p.nom_puesto,activo
// // FROM puestos p",$conexion) or die (mysql_error());
// // $row=mysql_fetch_row($result);
// // // //Se cuenta el numero de filas
// // $result = mysql_query($consulta,$conexion); 
// // $row=mysql_fetch_row($consulta);
// $num = mysql_num_rows($consulta);

// // VUELTA DE SALIDA


// // FIN
// while ($row=mysql_fetch_row($consulta))

// 	$n=1;

   
//                                  {
//                                  	echo " ";
// $var1 = $row[0];
// $var2 = $row[1];
// $var3 = $row[2];
// $var4 = $row[3];
// $var5 = $row[4];
// $var6 = $row[5];
                                 

                                 
                         


                                 	
                

// if($num==1)
// {

// 	$act = mysql_query("UPDATE historial_incidencias
//                                         SET fecha_salida = '$fecha',
//                                          hora_salida = '$hora'
                                        
//                                         WHERE
//                                             num_empleado = '$pNom_empleado'");
// $ejecura = mysql_query($act,$conexion);

// }
// // elseif ($var10 <= $var3) {
// // 	$resultado = $var3 - $var10; 


// // 	if ($resultado >= $var10) {
// // 		$insertar= mysql_query("INSERT INTO historial_incidencias

// // 							(num_empleado,
// // 							id_horario,
						
// // 							  fecha_ingreso,
// // 							  hora_ingreso,
// // 							  id_incidencia,
// // 							  id_justificacion)
							
// // 						VALUES
// // 							('$pNom_empleado', '$var1', '$fecha', '$hora', '3', '1')",$conexion) or die (mysql_error());
// //  $execute = mysql_query($insertar, $conexion);
// // 		# code...
// // 	}

	
// // 	# code...
// // }
// else
// {
// $insertar= mysql_query("INSERT INTO historial_incidencias

// 							(num_empleado,
// 						  id_horario,
// 							  fecha_ingreso,
							
// 							  hora_ingreso,
// 							  id_incidencia,
// 							  id_justificacion)
							
// 						VALUES
// 							('$pNom_empleado','$var4', '$fecha', '$hora', '1', '1')",$conexion) or die (mysql_error());
//  $execute = mysql_query($insertar, $conexion);


// }
// $n++;
// }
?>


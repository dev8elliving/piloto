<?php 

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

// archivo de configuración
require("config.php");

// datos recibidos por ajax

$rut_txt = $_POST['rut_txt'];
$nombre_txt = $_POST['nombre_txt'];
$telefono_txt = $_POST['telefono_txt'];
$email_txt = $_POST['email_txt'];
$proyecto_txt = $_POST['proyecto_txt'];
$fecha = date('Y-m-d');

// variables booleanas para validar campos
$nombres_txt_ok = false;
// validamos campos si es que están vacíos

if($_POST) {

	if(empty($nombre_txt)) {
		$nombres_txt_ok = false;
	} else {
		$nombres_txt_ok = true;
	}

	// Para enviar un correo HTML, debe establecerse la cabecera Content-type
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	// Cabeceras adicionales
	$cabeceras .= 'To: ICALMA | Campaña Barcelona <inmob7li4riaical@power64.powerhost.cl>' . "\r\n";
	$cabeceras .= 'From: ICALMA | Campaña Barcelona <inmob7li4riaical@power64.powerhost.cl>' . "\r\n";
	$cabeceras .= 'Cc: icalma@sistema.cl,contacto@inmobiliariaicalma.cl,aelliving@gmail.com' . "\r\n";
	// $cabeceras .= 'To: ICALMA | Campaña Barcelona <felipe.farias@elliving.cl>,<>' . "\r\n";
	// $cabeceras .= 'From: ICALMA | Campaña Barcelona <felipe.farias@elliving.cl>' . "\r\n";
	//$cabeceras .= 'Cc: felipe.farias@elliving.cl' . "\r\n";

	// Varios destinatarios
	$para = 'icalma@sistema.cl' . ', ' ;
	$para .= '';

	// $para = 'felipe.farias@elliving.cl' . ', ' ;
	// $para .= '';

	// título
	$titulo = 'Datos Formulario ICALMA | Campaña Barcelona';

	// mensaje
	$mensaje = '
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	  <title>ICALMA | Campaña Barcelona </title>
	</head>
	<body>
	  <p>Información de cliente | Campaña Barcelona</p>
	  <table>
	  	<tr>
			<td>Rut: '. $rut_txt .' </td>
	  	</tr>
	  	<tr>
			<td>Nombre y Apellido: '. $nombre_txt .' </td>
	  	</tr>
	  	<tr>
			<td>Teléfono: '. $telefono_txt .' </td>
	  	</tr>
		<tr>
			<td>mail cliente: '. $email_txt .' </td>
		</tr>
		<tr>
			<td>Proyecto: '. $proyecto_txt .' </td>
		</tr>
	  </table>
	</body>
	</html>
	';	

	if(	$nombres_txt_ok == true ) {

		// consulta para insertar nuestros datos a la bd
		// $sql = "INSERT INTO clientes_web (nombre,telefono,email,sede,campana_landing,fecha) VALUES ('$nombre','$telefono','$email','$sede','$campana','$fecha')";

		$sql = "INSERT INTO campana_exequiel (
								rut,
								nombre,
								telefono,
								email,
								proyecto,
								fecha ) VALUES
								('$rut_txt',
								'$nombre_txt',
								'$telefono_txt',
								'$email_txt',
								'$proyecto_txt',
								'$fecha')";
		// chequeamos que la consulta este bien ingresada
		if($conexion->query($sql) === TRUE) {
			mail($para,$titulo,$mensaje,$cabeceras);
			echo "Nuevo registro ingresado correctamente";
		} else {
			echo "Error en la consulta " . $sql . $conexion->error();
		}	

	} else {
		echo "Campos vacíos " . $conexion->connect_error;
	}

} else {
	echo "Campos vacíos " . $conexion->connect_error;
}

//header("Location: ../");
exit();

//cerrar siempre conexión
$conexion->close();

?>
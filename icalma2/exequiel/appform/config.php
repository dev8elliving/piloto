<?php 

// Local
// $server = "localhost";
// $usuario = "root";
// $password = "";
// $bd = "alive_3";

// Producción
$server = "localhost";
$usuario = "inmob7li_promo";
$password = "^o!++dM1Jraq";
$bd = "inmob7li_landingpromociones";

//abrimos conexión
$conexion = new mysqli($server,$usuario,$password,$bd);

// NO afectará a $mysqli->real_escape_string();
$conexion->query("SET NAMES utf8");

//chequeamos conexión
if($conexion->connect_error) {
	die("Error en la conexión :" . $conexion->connect_error);
}

?>
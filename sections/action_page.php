<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Buenos Aires_City');

header("application/json; charset=utf-8");  
header("Cache-Control: no-cache");

$data =$_POST['data'];

function sendMail($data){
	parse_str($data);
// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: '.utf8_decode('Informacion de Molfetta').' <noreplay@example.com>'. "\r\n";
$cabeceras .= utf8_decode('From: Molfetta <noreplay@example.com>') . "\r\n";
$cabeceras .= 'Cc: Clauker@gmail.com' . "\r\n";
$titulo = utf8_decode("Información de Molfetta.");
$msg = "Le enviamos la información para que pueda disfrutar de este hermoso lugar."

mail($email,$titulo,$msg,$cabeceras);

}

sendMail($data);

$ret = array();
$ret[0]->msg =  "OK";
$m = json_encode($ret);
echo $m;

?>
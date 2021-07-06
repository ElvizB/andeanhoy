<?php
$nombre_completo              = isset($_POST['nombre_completo'])   ?   $_POST['nombre_completo']     : '';
$nombre_empresa               = isset($_POST['nombre_empresa'])    ?   $_POST['nombre_empresa']      : '';
$nombre_web                   = isset($_POST['nombre_web'])        ?   $_POST['nombre_web']          : '';
$email_empresa                = isset($_POST['email_empresa'])     ?   $_POST['email_empresa']       : '';
$pais_empresa                 = isset($_POST['pais_empresa'])      ?   $_POST['pais_empresa']        : '';
$organization                 = isset($_POST['organization'])      ?   $_POST['organization']        : '';
$mensaje_empresa              = isset($_POST['mensaje_empresa'])   ?   $_POST['mensaje_empresa']     : '';
$to = "pruebahoy@andean-tours.com";
$from = "pruebahoy@andean-tours.com";
$subject = "$nombre_empresa";
$body = "Llego la siguiente informacion,\n\n
         Su Nombre Completo es : $nombre_completo\n\n
         Nombre de la empresa es : $nombre_empresa\n\n
         Web de la empresa es : $nombre_web\n\n
         Su E-mail es : $email_empresa\n\n
         Pais donde reside la empresa es : $pais_empresa\n\n
         Pertenece a una organizacion : $organization\n\n
         Informacion extra de la empresa : $mensaje_empresa\n\n";
$body .= "Enviado el : " . date('d-m-Y');

if (mail($to, $subject, $body,"From: $from")) {
echo("<p>Message successfully sent!</p>");
} else {
echo("<p>Message delivery failed.</p>");
}

?>
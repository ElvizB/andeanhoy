<?php
$nombre        = isset($_POST['nombre'])       ?   $_POST['nombre']        : '';
$apellido      = isset($_POST['apellido'])     ?   $_POST['apellido']      : '';
$email         = isset($_POST['email'])        ?   $_POST['email']         : '';
$nacionalidad  = isset($_POST['nacionalidad']) ?   $_POST['nacionalidad']  : '';
$categoria     = isset($_POST['categoria'])    ?   $_POST['categoria']     : '';
$servicios     = isset($_POST['servicios'])    ?   $_POST['servicios']     : '';
$mensaje       = isset($_POST['mensaje'])      ?   $_POST['mensaje']       : '';
$to = "pruebahoy@andean-tours.com";
$from = "pruebahoy@andean-tours.com";
$subject = "$nombre";
$body = "Llego la siguiente informacion,\n\n
         Su Nombre es : $nombre\n\n
         Su Apellido es : $apellido\n\n
         Su E-mail es : $email\n\n
         Su Nacionalidad es : $nacionalidad\n\n
         La categoria escogida es : $categoria\n\n
         El servicio escogido es : $servicios\n\n
         El detalle del viaje es : $mensaje\n\n";
$body .= "Enviado el : " . date('d-m-Y');

if (mail($to, $subject, $body,"From: $from")) {
echo("<p>Message successfully sent!</p>");
} else {
echo("<p>Message delivery failed.</p>");
}
?>
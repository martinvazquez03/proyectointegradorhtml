<?php
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
$headers = "From: " . $email . "\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail('martincp2003@outlook.com.ar','enviado desde mi portafolio',$mensaje,$headers);

echo'
<p>hola '.$email.' su mensaje '.$mensaje.' se envio correctamente</p>
';

?>
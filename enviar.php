 
<?php
$nombre = $_POST['nombre'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Teléfono de contacto: " . $tel . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'contacto@cpend.cl';
$asunto = 'mensaje desde formulario';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:enviado.html");
?>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: noreply@example.com' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";


$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Descripcion: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'ana.flores@pacificovida.com.pe';
$asunto = 'Mensaje de contacto WEB';

$email=@email($para, $asunto, utf8_decode($message), $header);
if ($email) {
	echo "<h4>MAIL ENVIADO EXITOSAMENTE</h4>"; 
}

header("Location:index.html");
?>


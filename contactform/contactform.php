<?php
$remitente = $_POST['email'];
$destinatario = 'sebastianechazu@outlook.com'; 
$asunto = 'Consulta'; 
if (!$_POST) {
?>

<?php
} else {

    $cuerpo = "Nombre: " . $_POST["name"] . "\r\n";
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
    $cuerpo .= "Asunto: " . $_POST["subject"] . "\r\n";
    $cuerpo .= "Mensaje: " . $_POST["message"] . "\r\n";
    
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"" . $_POST['name'] . " " . $remitente . ">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
}
?>

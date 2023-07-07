<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $nombre_amigo = $_POST["nombre_amigo"];
    $email_amigo = $_POST["email_amigo"];
    $mensaje = $_POST["mensaje"];
    
    $to = $email_amigo;
    $subject = "¡Te recomendaron este sitio web!";
    $message = "Hola $nombre_amigo,\n\n$nombre te ha recomendado este sitio web:\n\n$mensaje\n\n¡Esperamos que lo disfrutes!\n\n$nombre\n$email";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "¡Gracias por recomendar nuestro sitio web!";
    } else {
        echo "Hubo un error al enviar el correo electrónico. Por favor, inténtalo nuevamente.";
    }
}
?>

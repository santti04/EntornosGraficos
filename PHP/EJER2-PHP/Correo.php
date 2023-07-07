<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    $to = "soficoppari@gmail.com"; 
    $subject = "Consulta de contacto";
    $message = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "¡Gracias por tu consulta!";
    } else {
        echo "Hubo un error al enviar el correo electrónico. Por favor, inténtalo nuevamente.";
    }
}
?>

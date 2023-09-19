<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    
    $destinatario = "agustoponi354@gmail.com"; // Tu dirección de correo
    $asuntoCorreo = "Nuevo mensaje de contacto desde el sitio web";

     
    $cuerpoCorreo = "Nombre: $nombre\n";
    $cuerpoCorreo .= "Email: $email\n";
    $cuerpoCorreo .= "Asunto: $asunto\n";
    $cuerpoCorreo .= "Mensaje:\n$mensaje";

     
    $resultado = mail($destinatario, $asuntoCorreo, $cuerpoCorreo);

    if ($resultado) {
        if ($resultado) {
            echo '<script>alert("Su mensaje ha sido enviado correctamente, muchas gracias!");</script>';
            echo '<script>window.location = "index.html";</script>';
            exit;
        }
    
    } else {
        // Si hubo un error al enviar el correo, muestra un mensaje de error
        echo "Error al enviar el correo. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>

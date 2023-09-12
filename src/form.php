<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    // Configura los detalles del correo
    $destinatario = "agustoponi354@gmail.com"; // Tu dirección de correo
    $asuntoCorreo = "Nuevo mensaje de contacto desde el sitio web";

    // Construye el cuerpo del correo
    $cuerpoCorreo = "Nombre: $nombre\n";
    $cuerpoCorreo .= "Email: $email\n";
    $cuerpoCorreo .= "Asunto: $asunto\n";
    $cuerpoCorreo .= "Mensaje:\n$mensaje";

    // Envía el correo
    $resultado = mail($destinatario, $asuntoCorreo, $cuerpoCorreo);

    if ($resultado) {
        // Redirige al usuario a una página de confirmación o agradecimiento
        header("Location: index.html");
        exit;
    } else {
        // Si hubo un error al enviar el correo, muestra un mensaje de error
        echo "Error al enviar el correo. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>

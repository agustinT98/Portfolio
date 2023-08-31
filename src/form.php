<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "agustoponi354@gmail.com";
    $subject = "Contacto portfolio";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado correctamente";
    } else {
        echo "Ha ocurrido un error enviando el mensaje, por favor reintente o diríjase a 
        <a href='https://www.linkedin.com/in/agustin-toponi-557362198/'>LinkedIn</a>";
    }
}
?>

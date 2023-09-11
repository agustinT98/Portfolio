<?php 
    $nombre = $_POST['name'];
    $mail = $_POST['email'];
    $mensaje = $_POST['message'];

    $mensaje = "Este mensaje fue enviado por" . $nombre . ". \r\n";
    $mensaje .= "Su e-mail es: " . $mail . ". \r\n";
    $mensaje .= "El mensaje es: " . $_POST['mensaje'] . ". \r\n";

    $to = 'agustoponi354@gmail.com';
    $asunto = 'Contacto portfolio.';

    mail( $to, $asunto, ($mensaje), $header);

    $header('Location:index.html');
?>
<?php

    # A mandar el correo
    $to = $_POST["email"];
    $subject = "Hola papas, vuestro hijo/a, ".$_POST["name"]." ha escrito esta carta a los Reyes Magos";
    $message = $_POST["letter"];
    $header = "From: pajes@escribealosreyesmagos.com";

    $retval = mail($to, $subject, $message, $header);
    if ($retval == true) {
        http_response_code(200);
    }

    else {
        http_response_code(500);
    }

?>

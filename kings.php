<?php

    # A mandar el correo
    $to = $_POST["email"];
    $subject = "Hola papas, vuestro hijo/a, ".$_POST["name"]." ha escrito esta carta a los Reyes Magos";
    $message = $_POST["letter"];
    $header = "From: pajes@escribealosreyesmagos.com";

    $retval = mail($to, $subject, $message, $header);
    if ($retval == true) {
        echo "Pues ya hemos mandado el correo a ".$_POST["email"];
    }

    else {
        echo "El correo no se ha mandado a ".$_POST["email"];
    }

?>

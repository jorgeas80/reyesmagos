<?php

    # Cargar Twig y SwiftMailer
    require_once('lib/SwiftMailer/swift_required.php');
    require_once('lib/Twig/Autoloader.php');
    Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem('views');
    $twig = new Twig_Environment($loader, array(
        'cache' => 'cache',
    ));

    $mailer = Swift_Mailer::newInstance(Swift_MailTransport::newInstance());

    # Renderizar plantilla a una cadena y crear mensaje
    $template = $twig->loadTemplate('email.twig');
    $body = $template->renderBlock('body', array('name' => $_POST["name"], 'letter' => $_POST["letter"]));

    $message = Swift_Message::newInstance()
        ->setFrom("pajes@escribealosreyesmagos.com")
        ->setSubject("Hola papas, vuestro hijo/a, ".$_POST["name"]." ha escrito esta carta a los Reyes Magos")
        ->setBody($body, 'text/html')
        ->setTo($_POST["email"]);

    # Enviar el correo
    $retval = $mailer->send($message);

    if ($retval == true) {
        http_response_code(200);
    }

    else {
        http_response_code(500);
    }

?>

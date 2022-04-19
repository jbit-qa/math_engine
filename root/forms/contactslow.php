<?php 

    $destino = 'info@jbit.com.ar';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $contet = "Nombre: " . $name . "\nEmail: " . $email . "\nConsulta sobre una: " . $service . "\nMensaje: " . $message; 

    mail($destino,'Consulta WEB', $contet);
    header("Location:https://jbit.com.ar/");

?>
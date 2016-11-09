<?php
    $destino = 'info@bintec.com.mx';
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST["tel"];
    $mensaje = $_POST["mensaje"];

    $contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nTeléfono".$telefono."\nMensaje: ".$mensaje;

    $asunto = $nombre;

    mail($destino,$asunto,$contenido);
    echo "Mensaje enviado";
?>

<?php
    $destino = "integra@bintec.com.mx";
    $nombre = $_POST["nombreAspirante"];
    $edad = $_POST["edad"];
    $apellidoPaterno = $_POST["pat"];
    $apellidoMaterno = $_POST["mat"];
    /*$ingles = $_POST["ingles"];
    $otroidioma = $_POST["otroidioma"];
    $nivelotroidioma = $_POST["nivelotroidioma"];
    $estudios = $_POST["estudios"];
    $carrera = $_POST["carrera"];
    $paqueteria = $_POST["paqueteria"];

    $contenido = "Nombre: ".$nombre."\nEdad: ".$edad."\nCorreo".$correo."\nGénero: ".$genero."\nNivel de inglés: ".$ingles."\nNivel de ".$otroidioma.": ".$nivelotroidioma."\nTerminó la carrera: ".$estudios."\nCarrera que estudió: ".$carrera."\nPaquetería: ".$paqueteria;

    $asunto = $nombre;

    $headers ='From: '.$_POST['email']."\r\n".
        'Reply-To:'.$_POST['email']."\r\n".
        'X-Mailer:PHP/'.phpversion();*/
    //mail($destino,$asunto,$contenido,$headers);
    //echo "Mensaje enviado";
    $archivo = $_FILES['cv']['tmp_name'];
    $destinoArchivo = "CV/".$apellidoPaterno.$apellidoMaterno.$nombre.".pdf";

    if($_FILES['cv']['type']=="application/pdf"){
        if($_FILES['cv']['size'] <=2560000){
            move_uploaded_file($archivo,$destinoArchivo);
            echo "CV subido exitosamente";
        }else{
            echo "El archivo excede los 2.5 MB";
        }
    }else{
        echo "Solo se admiten archivos .pdf";
    }
?>

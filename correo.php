 <?php 

    $destino = "ignaciosergiodiaz@gmail.com";
    $nombre = $_POST['name'];
    $asunto = $_POST['asunto'];
    $msg = $_POST['msg'];

    $contenido = "Nombre:" . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje" . $msg ;
    mail($destino, "Contacto ", $contenido);


 ?>
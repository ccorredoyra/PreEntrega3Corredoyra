<?php
if (isset($_POST['enviar'])){
    if(!empty($_POST['email'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $asunto = 'Información sobre Molfetta.'
        $msg = 'Enviamos información para que pueda disfrutar este hermoso lugar.'
        $email = $_POST['email'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-to: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($email0,$asunto,$msg,$header);
        if ($mail){
            echo "<h4> Mail enviado exitosamente ! </h4>";
        }
    }
}
?>
<?php
if(isset($_POST["enviar"])){
    if (!empty($_POST['nombre']) 
    && !empty($_POST['telefono'])
    && !empty($_POST['correo']) 
    && !empty($_POST['tema']) 
    && !empty($_POST['msj'] )){

     $nombre = $_POST['nombre'];
     $telefono = $_POST['telefono'];
     $email = $_POST['correo'];
     $tema = $_POST['tema'];
     $msj = $_POST['msj'];
     $header = "From: jordyalexjatr@hotmail.com" . "\r\n";
     $header .= "Reply-To: jordyalexjatr@hotmail.com" . "\r\n";
     $header = "X-Mailer: PHP/" . phpversion();
     $mail = @mail($nombre, $telefono, $correo, $tema, $msj, $header);
     if($mail){
        echo "<h4>¡Mail enviado correctamente</h4>";
    }
    
  }

}
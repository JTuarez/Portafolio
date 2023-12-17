<?php

include("base_d.php");

if (isset($_POST['enviar'])) {
    
        if(
        strlen($_POST['name'])  >=1 && 
        strlen($_POST['telefono'])  >=1 && 
        strlen($_POST['correo']) >= 1 && 
        strlen($_POST['tema']) >= 1 && 
        strlen($_POST['msj']) >= 1
    ) {

        $name = trim($_POST['name']);
        $telefono = trim($_POST['telefono']);
        $correo = trim($_POST['correo']);
        $tema = trim($_POST['tema']);
        $msj = trim($_POST['msj']);

        $consulta ="INSERT INTO registro (nombre, telefono, correo, tema, mensaje)
         VALUES ('$name','$telefono','$correo','$tema','$msj')";

        $resultado = mysqli_query($conex, $consulta);

        if ($consulta){
            ?>
            <h4 class ="success">Tu Mensaje ha sido enviado al programador!</h4>
            <?php 
              
     }
     }else {
        
        ?> <h3 class="error" > No has llenado los campos solicitados!</h3> 
        <?php
   }
    
    
}

?>
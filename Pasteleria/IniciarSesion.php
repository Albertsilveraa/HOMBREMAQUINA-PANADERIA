<?php

require_once('conexionBD.php');


if(isset($_POST['submit'])) {
    
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM tb_usuarios WHERE Nombre = '$usuario' AND Clave = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        echo "Inicio de sesión exitoso";
        
    } else {
       
        echo "Usuario o contraseña incorrectos";
    }

   
}
?>

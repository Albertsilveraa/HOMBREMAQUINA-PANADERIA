<?php
require_once('conexionBD.php'); // Incluir el archivo de conexión

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $usuario = $_POST["txtUsu"];
    $contraseña = $_POST["txtCon"];

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM tb_administradores 
                WHERE Nombre = '$usuario' 
                    AND Clave = '$contraseña'";
    $result = $conn->query($sql);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Iniciar sesión
        session_start();
        $_SESSION["usuario_admin"] = $usuario;
        
        
        header("Location: intranetAdmin.php");
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>

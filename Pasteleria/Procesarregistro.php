<?php
// Incluir el archivo de conexión a la base de datos
require_once('conexionBD.php');

// Verificar si se envió el formulario
if(isset($_POST['submit'])) {
    // Obtener los valores del formulario
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['Correo'];
    $contraseña = $_POST['password2'];
    
    // Preparar la consulta SQL para insertar los datos en la tabla tb_usuarios
    $sql = "INSERT INTO tb_usuarios (Nombre, Apellido, Correo, Clave) 
                VALUES ('$nombre', '$apellido', '$correo', '$contraseña')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        
        header("Location:Ingresar_Usuario.php");
    } else {
        echo "Error al insertar el registro: " . $conn->error;
    }

    
}
?>


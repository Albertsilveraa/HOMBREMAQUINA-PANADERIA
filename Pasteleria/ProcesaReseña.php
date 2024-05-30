<?php
// Incluir el archivo de conexión a la base de datos
require_once('conexionBD.php');

// Verificar si se envió el formulario
if(isset($_POST['submit'])) {
    // Obtener los valores del formulario
    $comentarios = $_POST['comments'];
    $puntuacion = $_POST['rating'];
    
    // Preparar la consulta SQL para insertar los datos en la tabla tb_reviews
    $sql = "INSERT INTO tb_reseñas (reseña, calidad) 
                VALUES ('$comentarios', '$puntuacion')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        // Redirigir a una página de éxito o mostrar un mensaje de éxito
        header("Location: reseñas.php");
    } else {
        echo "Error al insertar el registro: " . $conn->error;
    }
}

?>
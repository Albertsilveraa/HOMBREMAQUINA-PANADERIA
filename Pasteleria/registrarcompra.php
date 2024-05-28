<?php
// Incluir el archivo de conexión a la base de datos
require_once('conexionBD.php');

// Verificar si se envió el formulario
    // Obtener los valores del formulario
    $json = file_get_contents('php://input');
    $datos = json_decode($json,true);
    $carrito = $datos;
    $precio = $carrito[0]['precio'];
    $cantidad = $carrito[0]['cantidad'];
    $tipo = $carrito[0]['tipo'];
    echo "datos extraidos satisfactoriamente";
    
    // Preparar la consulta SQL para insertar los datos en la tabla tb_usuarios
    $sql = "INSERT INTO tb_compras (precio, cantidad, tipo) 
                VALUES ('$precio', '$cantidad', '$tipo')";

    // Ejecutar la consulta
    header("Location: index.PHP");
    if ($conn->query($sql) === TRUE) {
        echo "Se ha registrado satisfactoriamente";
        
    } else {
        echo "Error al insertar el registro: " . $conn->error;
    }
?>

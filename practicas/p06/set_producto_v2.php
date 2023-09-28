<?php
// Crear una conexión a la base de datos
$link = new mysqli('localhost', 'root', 'Diego1322', 'marketzone');

// Verificar la conexión
if ($link->connect_errno) {
    die('Falló la conexión: ' . $link->connect_error . '<br/>');
}

// Comprobar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre_producto"];
    $marca = $_POST["marca_producto"];
    $modelo = $_POST["modelo_producto"];
    $precio = $_POST["precio_producto"];
    $detalles = $_POST["detalles_producto"];
    $unidades = $_POST["unidades_producto"];

    // Validación de datos
    if (empty($nombre) || empty($marca) || empty($modelo) || empty($precio) || empty($detalles) || empty($unidades)) {
        echo 'Error: Todos los campos son obligatorios.';
    } elseif (!is_numeric($precio) || $precio <= 0) {
        echo 'Error: El precio debe ser un número válido mayor que cero.';
    } elseif (!is_numeric($unidades) || $unidades <= 0) {
        echo 'Error: Las unidades deben ser un número válido mayor que cero.';
    } else {
        // Insertar los datos en la base de datos con el valor 0 en la columna "eliminado"
        $sql = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, eliminado) VALUES ('$nombre', '$marca', '$modelo', $precio, '$detalles', $unidades, 0)";

        if ($link->query($sql)) {
            echo 'Producto insertado con éxito:<br>';
            echo 'Nombre: ' . $nombre . '<br>';
            echo 'Marca: ' . $marca . '<br>';
            echo 'Modelo: ' . $modelo . '<br>';
            echo 'Precio: $' . number_format($precio, 2) . '<br>';
            echo 'Detalles: ' . $detalles . '<br>';
            echo 'Unidades: ' . $unidades . '<br>';
        } else {
            echo 'El Producto no pudo ser insertado =(';
        }
    }
}

// Cerrar la conexión a la base de datos
$link->close();
?>
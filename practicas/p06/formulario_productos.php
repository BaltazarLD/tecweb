<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Productos</title>
</head>
<body>
    <h1>Formulario de Registro de Productos</h1>
    <form action="set_producto_v2.php" method="POST">
        <label for="nombre_producto">Nombre del Producto:</label>
        <input type="text" name="nombre_producto" required><br>

        <label for="marca_producto">Marca:</label>
        <input type="text" name="marca_producto" required><br>

        <label for="modelo_producto">Modelo:</label>
        <input type="text" name="modelo_producto" required><br>

        <label for="precio_producto">Precio:</label>
        <input type="text" name="precio_producto" required pattern="\d+(\.\d{2})?" title="Formato válido: 99.99"><br>

        <label for="detalles_producto">Detalles:</label>
        <textarea name="detalles_producto" rows="4" required></textarea><br>

        <label for="unidades_producto">Unidades:</label>
        <input type="number" name="unidades_producto" required><br>

        <!-- Otros campos que necesites agregar -->

        <input type="submit" value="Registrar Producto">
    </form>
</body>
</html>
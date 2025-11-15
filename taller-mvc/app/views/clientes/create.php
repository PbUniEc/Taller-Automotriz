<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Cliente</title>
</head>
<body>

<h2>Registrar Cliente</h2>

<form action="/?route=clientes-store" method="POST">

    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono" required><br><br>

    <label>Dirección:</label><br>
    <input type="text" name="direccion" required><br><br>

    <button type="submit">Guardar</button>

</form>

<br>
<a href="/?route=clientes">Volver</a>

</body>
</html>

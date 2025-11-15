<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
</head>
<body>

<h2>Lista de Clientes</h2>

<a href="/?route=clientes-create">Registrar Cliente</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($clientes as $c): ?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= $c['nombre'] ?></td>
            <td><?= $c['telefono'] ?></td>
            <td><?= $c['direccion'] ?></td>
            <td>
                <a href="/?route=clientes-delete&id=<?= $c['id'] ?>" onclick="return confirm('¿Eliminar cliente?')">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>

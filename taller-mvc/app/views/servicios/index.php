<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servicios del Vehículo</title>
</head>
<body>

<h2>Servicios del Vehículo: <?= $vehiculo['marca'] . " " . $vehiculo['modelo'] ?></h2>

<a href="/?route=servicios-create&vehiculo_id=<?= $vehiculo['id'] ?>">Registrar Servicio</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Descripción</th>
        <th>Fecha</th>
        <th>Costo</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($servicios as $s): ?>
        <tr>
            <td><?= $s['id'] ?></td>
            <td><?= $s['descripcion'] ?></td>
            <td><?= $s['fecha_servicio'] ?></td>
            <td>$<?= $s['costo'] ?></td>
            <td>
                <a href="/?route=servicios-delete&id=<?= $s['id'] ?>&vehiculo_id=<?= $vehiculo['id'] ?>"
                   onclick="return confirm('¿Eliminar servicio?')">
                   Eliminar
                </a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

<br>
<a href="/?route=vehiculos">Volver a Vehículos</a>

</body>
</html>

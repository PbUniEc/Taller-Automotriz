<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Servicio</title>
</head>
<body>

<h2>Registrar Servicio para el Vehículo: <?= $vehiculo['marca'] . " " . $vehiculo['modelo'] ?></h2>

<form action="/?route=servicios-store" method="POST">

    <input type="hidden" name="vehiculo_id" value="<?= $vehiculo['id'] ?>">

    <label>Descripción del servicio:</label><br>
    <textarea name="descripcion" required></textarea>
    <br><br>

    <label>Fecha del servicio:</label><br>
    <input type="date" name="fecha_servicio" required><br><br>

    <label>Costo:</label><br>
    <input type="number" name="costo" step="0.01" required><br><br>

    <button type="submit">Guardar Servicio</button>

</form>

<br>
<a href="/?route=servicios&vehiculo_id=<?= $vehiculo['id'] ?>">Volver</a>

</body>
</html>

<?php require __DIR__ . '/../layout/header.php'; ?>
<h2>Vehículos</h2>
<p><a href="/?route=vehiculos/create">Registrar vehículo</a></p>

<table border="1" cellpadding="8">
  <thead>
    <tr>
      <th>ID</th><th>Placa</th><th>Marca</th><th>Modelo</th><th>Año</th><th>Propietario</th><th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($vehiculos as $v): ?>
      <tr>
        <td><?= htmlspecialchars($v['id']) ?></td>
        <td><?= htmlspecialchars($v['placa']) ?></td>
        <td><?= htmlspecialchars($v['marca']) ?></td>
        <td><?= htmlspecialchars($v['modelo']) ?></td>
        <td><?= htmlspecialchars($v['ano']) ?></td>
        <td><?= htmlspecialchars($v['propietario']) ?></td>
        <td>
          <a href="/?route=servicios&vehiculo_id=<?= $v['id'] ?>">Ver servicios</a> |
          <a href="/?route=vehiculos/delete&id=<?= $v['id'] ?>" onclick="return confirm('Eliminar vehículo?')">Eliminar</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php require __DIR__ . '/../layout/footer.php'; ?>

<?php require __DIR__ . '/../layout/header.php'; ?>
<h2>Registrar Vehículo</h2>

<form action="/?route=vehiculos/store" method="post">
  <label>Placa:<br><input name="placa" required></label><br>
  <label>Marca:<br><input name="marca"></label><br>
  <label>Modelo:<br><input name="modelo"></label><br>
  <label>Año:<br><input name="ano" type="number" min="1900" max="<?= date('Y') ?>"></label><br>
  <label>Propietario:<br>
    <select name="cliente_id" required>
      <?php foreach($clientes as $c): ?>
        <option value="<?= $c['id'] ?>"><?= htmlspecialchars($c['nombre']) ?></option>
      <?php endforeach; ?>
    </select>
  </label><br><br>
  <button type="submit">Guardar</button>
</form>

<?php require __DIR__ . '/../layout/footer.php'; ?>

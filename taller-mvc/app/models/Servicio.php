<?php
// app/models/Servicio.php
require_once __DIR__ . '/../config/Database.php';

class Servicio {
    private $conn;
    private $table = 'servicios';

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function allByVehiculo($vehiculo_id) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE vehiculo_id = ? ORDER BY fecha_servicio DESC");
        $stmt->execute([$vehiculo_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (vehiculo_id, descripcion, fecha_servicio, costo) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$data['vehiculo_id'], $data['descripcion'], $data['fecha_servicio'], $data['costo']]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

<?php
// app/models/Vehiculo.php
require_once __DIR__ . '/../config/Database.php';

class Vehiculo {
    private $conn;
    private $table = 'vehiculos';

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function all() {
        $sql = "SELECT v.*, c.nombre as propietario FROM {$this->table} v
                JOIN clientes c ON v.cliente_id = c.id
                ORDER BY v.id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (placa, marca, modelo, ano, cliente_id) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$data['placa'], $data['marca'], $data['modelo'], $data['ano'], $data['cliente_id']]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function find($id) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

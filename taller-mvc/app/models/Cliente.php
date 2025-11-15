<?php
// app/models/Cliente.php
require_once __DIR__ . '/../config/Database.php';

class Cliente {
    private $conn;
    private $table = 'clientes';

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function all() {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (nombre, telefono, direccion) VALUES (?, ?, ?)");
        return $stmt->execute([$data['nombre'], $data['telefono'], $data['direccion']]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

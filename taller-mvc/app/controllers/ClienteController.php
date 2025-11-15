<?php
// app/controllers/ClienteController.php
require_once __DIR__ . '/../models/Cliente.php';

class ClienteController {

    private $clienteModel;

    public function __construct() {
        $this->clienteModel = new Cliente();
    }

    // Mostrar todos los clientes
    public function index() {
        $clientes = $this->clienteModel->all();
        require __DIR__ . '/../views/clientes/index.php';
    }

    // Formulario para crear cliente
    public function createForm() {
        require __DIR__ . '/../views/clientes/create.php';
    }

    // Guardar nuevo cliente
    public function store() {
        $data = [
            'nombre'    => $_POST['nombre'],
            'telefono'  => $_POST['telefono'],
            'direccion' => $_POST['direccion']
        ];

        $this->clienteModel->create($data);

        header("Location: /?route=clientes");
    }

    // Eliminar cliente
    public function delete() {
        $id = $_GET['id'];
        $this->clienteModel->delete($id);

        header("Location: /?route=clientes");
    }
}

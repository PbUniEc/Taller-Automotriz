<?php
// app/controllers/VehiculoController.php
require_once __DIR__ . '/../models/Vehiculo.php';
require_once __DIR__ . '/../models/Cliente.php';

class VehiculoController {
    private $vehiculoModel;
    private $clienteModel;

    public function __construct(){
        $this->vehiculoModel = new Vehiculo();
        $this->clienteModel = new Cliente();
    }

    public function index(){
        $vehiculos = $this->vehiculoModel->all();
        require __DIR__ . '/../views/vehiculos/index.php';
    }

    public function createForm(){
        $clientes = $this->clienteModel->all();
        require __DIR__ . '/../views/vehiculos/create.php';
    }

    public function store(){
        $data = [
            'placa' => $_POST['placa'],
            'marca' => $_POST['marca'],
            'modelo' => $_POST['modelo'],
            'ano' => $_POST['ano'] ?? null,
            'cliente_id' => $_POST['cliente_id']
        ];
        $this->vehiculoModel->create($data);
        header('Location: /?route=vehiculos');
    }

    public function delete(){
        $id = $_GET['id'];
        $this->vehiculoModel->delete($id);
        header('Location: /?route=vehiculos');
    }
}

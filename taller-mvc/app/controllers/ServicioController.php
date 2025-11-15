<?php
// app/controllers/ServicioController.php
require_once __DIR__ . '/../models/Servicio.php';
require_once __DIR__ . '/../models/Vehiculo.php';

class ServicioController {

    private $servicioModel;
    private $vehiculoModel;

    public function __construct() {
        $this->servicioModel = new Servicio();
        $this->vehiculoModel = new Vehiculo();
    }

    // Listar servicios por vehículo
    public function index() {

        if (!isset($_GET['vehiculo_id'])) {
            echo "<h2>Debe seleccionar un vehículo para ver los servicios.</h2>";
            return;
        }

        $vehiculo_id = $_GET['vehiculo_id'];

        $vehiculo = $this->vehiculoModel->find($vehiculo_id);
        $servicios = $this->servicioModel->allByVehiculo($vehiculo_id);

        require __DIR__ . '/../views/servicios/index.php';
    }

    // Form para crear servicio
    public function createForm() {

        if (!isset($_GET['vehiculo_id'])) {
            echo "<h2>Error: vehículo no encontrado.</h2>";
            return;
        }

        $vehiculo_id = $_GET['vehiculo_id'];
        $vehiculo = $this->vehiculoModel->find($vehiculo_id);

        require __DIR__ . '/../views/servicios/create.php';
    }

    // Guardar servicio
    public function store() {
        $data = [
            'vehiculo_id'    => $_POST['vehiculo_id'],
            'descripcion'    => $_POST['descripcion'],
            'fecha_servicio' => $_POST['fecha_servicio'],
            'costo'          => $_POST['costo']
        ];

        $this->servicioModel->create($data);

        header("Location: /?route=servicios&vehiculo_id=" . $_POST['vehiculo_id']);
    }

    // Eliminar servicio
    public function delete() {
        $id = $_GET['id'];
        $vehiculo_id = $_GET['vehiculo_id']; // para regresar a la vista correcta

        $this->servicioModel->delete($id);

        header("Location: /?route=servicios&vehiculo_id=$vehiculo_id");
    }
}

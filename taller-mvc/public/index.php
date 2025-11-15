<?php
// public/index.php
// Hacer accesible la carpeta app
require_once __DIR__ . '/../app/controllers/VehiculoController.php';
require_once __DIR__ . '/../app/controllers/ClienteController.php';
require_once __DIR__ . '/../app/controllers/ServicioController.php';

$route = $_GET['route'] ?? 'vehiculos';
switch($route) {
    // Vehículos
    case 'vehiculos':
        $c = new VehiculoController();
        $c->index();
        break;
    case 'vehiculos/create':
        $c = new VehiculoController();
        $c->createForm();
        break;
    case 'vehiculos/store':
        $c = new VehiculoController();
        $c->store();
        break;
    case 'vehiculos/delete':
        $c = new VehiculoController();
        $c->delete();
        break;

    // Clientes
    case 'clientes':
        $c = new ClienteController();
        $c->index();
        break;
    case 'clientes/create':
        $c = new ClienteController();
        $c->createForm();
        break;
    case 'clientes/store':
        $c = new ClienteController();
        $c->store();
        break;
    case 'clientes/delete':
        $c = new ClienteController();
        $c->delete();
        break;

    // Servicios
    case 'servicios':
        $c = new ServicioController();
        $c->index(); // lista servicios por vehiculo si vehiculo_id existe
        break;
    case 'servicios/create':
        $c = new ServicioController();
        $c->createForm();
        break;
    case 'servicios/store':
        $c = new ServicioController();
        $c->store();
        break;
    case 'servicios/delete':
        $c = new ServicioController();
        $c->delete();
        break;

    default:
        echo "Ruta no encontrada";
}

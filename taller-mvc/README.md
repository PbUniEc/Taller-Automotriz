Sistema de Taller Automotriz (MVC + PHP + MySQL)
🚗 Sistema de Taller Automotriz

Proyecto desarrollado con PHP, MySQL, HTML, CSS, JavaScript y arquitectura MVC, que permite gestionar:

Clientes

Vehículos

Servicios realizados a cada vehículo

Incluye operaciones: Insertar, Listar y Eliminar.

🏗 Tecnologías utilizadas

PHP 8+

MySQL 5.7+

Apache (XAMPP)

HTML5

CSS3

JavaScript

Arquitectura MVC

Git / GitHub

📂 Estructura del proyecto
taller-mvc/
│── app/
│   ├── controllers/
│   │   ├── VehiculoController.php
│   │   ├── ClienteController.php
│   │   └── ServicioController.php
│   ├── models/
│   │   ├── Vehiculo.php
│   │   ├── Cliente.php
│   │   └── Servicio.php
│   └── views/
│       ├── vehiculos/
│       ├── clientes/
│       └── servicios/
│
│── config/
│   └── database.php
│
│── public/
│   ├── assets/
│   │   ├── css/style.css
│   │   └── js/main.js
│   └── index.php
│
└── README.md

🛢 Base de datos

Nombre recomendado:

taller_mvc


Codificación:

utf8mb4_general_ci

Tablas del sistema

clientes

vehiculos

servicios

Cada servicio tiene relación con un vehículo y un cliente.

🚀 Cómo ejecutar el proyecto
1️⃣ Clonar el repositorio
git clone https://github.com/tuusuario/taller-mvc.git

2️⃣ Iniciar XAMPP

Activar Apache y MySQL

3️⃣ Crear la base de datos

Abrir phpMyAdmin

Crear base taller_mvc con utf8mb4_general_ci

Importar el archivo SQL si existe

4️⃣ Configurar conexión

Editar:

config/database.php


Asegurar que coincida con tu XAMPP:

$host = "localhost";
$user = "root";
$pass = "";
$db   = "taller_mvc";

5️⃣ Abrir el proyecto

En el navegador:

http://localhost/taller-mvc/public/

🔧 Funciones principales
✔ Módulo Vehículos

Registrar un vehículo

Listar todos

Eliminar

✔ Módulo Clientes

Registrar cliente

Listar clientes

✔ Módulo Servicios

Registrar servicios por vehículo

Listar servicios realizados

Eliminar servicio
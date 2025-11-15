-- Crear base de datos
CREATE DATABASE IF NOT EXISTS taller_mvc CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE taller_mvc;

-- Tabla Clientes
CREATE TABLE clientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  telefono VARCHAR(30),
  direccion VARCHAR(200),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla Vehículos
CREATE TABLE vehiculos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  placa VARCHAR(20) NOT NULL UNIQUE,
  marca VARCHAR(50),
  modelo VARCHAR(50),
  ano YEAR,
  cliente_id INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE
);

-- Tabla Servicios
CREATE TABLE servicios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  vehiculo_id INT NOT NULL,
  descripcion TEXT NOT NULL,
  fecha_servicio DATE NOT NULL,
  costo DECIMAL(10,2),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (vehiculo_id) REFERENCES vehiculos(id) ON DELETE CASCADE
);

-- Datos de ejemplo
INSERT INTO clientes (nombre, telefono, direccion) VALUES
('Carlos Perez', '0991234567', 'Av. Siempre Viva 123'),
('María Gomez', '0987654321', 'Calle Falsa 456');

INSERT INTO vehiculos (placa, marca, modelo, ano, cliente_id) VALUES
('ABC-123', 'Toyota', 'Corolla', 2015, 1),
('XYZ-987', 'Honda', 'Civic', 2018, 2);

INSERT INTO servicios (vehiculo_id, descripcion, fecha_servicio, costo) VALUES
(1, 'Cambio de aceite y filtro', '2025-10-01', 50.00),
(2, 'Alineación y balanceo', '2025-10-05', 30.00);

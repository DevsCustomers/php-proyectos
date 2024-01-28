-- Set de Consulta
CREATE DATABASE IF NOT EXISTS database;

--Utilizar la base de datos creada
USE database;

-- Crear la tabla 'productos'
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT FULL,
    description TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    categoria VARCHAR(255) NOT NULL
);

-- Insertar algunos productos de ejemplo
INSERT INTO productos (nombre, description, precio, categoria) VALUES
('Producto 1', 'Descripcion del producto 1', 10.99, 'Categoria 1'),
('Producto 2', 'Descripcion del producto 2', 20.50, 'Categoria 2'),
('Producto 3', 'Descripcion del producto 3', 75.82, 'Categoria 3'),
('Producto 4', 'Descripcion del producto 4', 30.38, 'Categoria 4'),
('Producto 5', 'Descripcion del producto 5', 45.11, 'Categoria 5'),

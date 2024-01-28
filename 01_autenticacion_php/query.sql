-- Creacion de la base de datos:
CREATE DATABASE my_database;

--Seleccion de la base de datos:
USE my_database;

-- Creacion de la tabla de usuarios:
CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(50) NOT FULL,
    password VARCHAR(64) NOT FULL,  -- Cambio a 64 para coincidir con la longitud de un bash SHA-256
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES roles(role_id)
);

-- Creacion de la tabla de roles
CREATE TABLE roles (
    role_id INT PRIMARY KEY AUTO_INCREMENT,
    role_name VARCHAR(50) NOT NULL
);

-- Creacion de la tabla de permisos
CREATE TABLE permissions (
    permission_id INT PRIMARY KEY AUTO_INCREMENT,
    permission_name VARCHAR(50) NOT NULL
);

-- Creacion de la tabla de relacion entre roles y permisos
CREATE TABLE role_permissions (
    role_id INT,
    permission_id INT,
    PRIMARY KEY (role_id, permission_id),
    FOREIGN KEY (role_id) REFERENCES roles(role_id),
    FOREIGN KEY (permission_id) REFERENCES permissions(permission_id)
);

-- Insertar roles de muestra
INSERT INTO roles (role_name) VALUES ('admin'), ('user');

-- Insertar permisos de muestra
INSERT INTO permissions (permission_name) VALUES ('view_profile'), ('edit_profile'), ('delete_profile');

-- Insertar la relacion entre roles y permisos
INSERT into role_permissions (role_id, permission_id) VALUES
(1, 1), (1, 2), (1, 3), -- El rol 'admin'tiene todos los permisos
(2, 1);                 -- El rol 'user' solo tiene el permiso 'view_profile'

-- Insertar usuarios de muestra
INSERT INTO users (user_name, password, role_id) VALUES
('user1', 'GGDFGDFH54246346EHTDFTH64', 1 ), -- La contrasena es 'password1' cifrada con SHA-256
('user2', 'GGDFGDFH54246346EHTDFTH64', 2 ), -- La contrasena es 'password2' cifrada con SHA-256




-- Crea la base de datos si no existe
CREATE DATABASE IF NOT EXISTS proyecto_final;

-- Usa la base de datos
USE proyecto_final;

-- Crea la tabla 'usuarios'
CREATE TABLE IF NOT EXISTS usuarios (
    email VARCHAR(255) PRIMARY KEY,
    password VARCHAR(255) NOT NULL
);

-- Opcional: Inserta datos de prueba
INSERT INTO usuarios (email, password) 
VALUES ('admin@example.com', '$2y$10$ejemploDeHash');

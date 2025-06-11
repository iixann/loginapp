CREATE DATABASE sistema_login;

USE sistema_login;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Usuario de prueba (usuario: admin, contraseña: 1234)
INSERT INTO usuarios (usuario, password) VALUES ('admin', SHA2('1234', 256));

SELECT * FROM usuarios;
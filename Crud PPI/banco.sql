
CREATE DATABASE IF NOT EXISTS carros_db;


USE carros_db;


CREATE TABLE IF NOT EXISTS carros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(100),
    modelo VARCHAR(100),
    ano INT,
    cor VARCHAR(50),
    placa VARCHAR(10)
);

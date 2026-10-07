CREATE DATABASE IF NOT EXISTS crud_brinquedos
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE crud_brinquedos;

CREATE TABLE IF NOT EXISTS brinquedos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    faixa_etaria VARCHAR(50) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL DEFAULT 0
);

INSERT INTO brinquedos 
(nome, categoria, faixa_etaria, preco, quantidade)
VALUES
('Barbie', 'Bonecas', '5 a 10 anos', 59.90, 10);
CREATE DATABASE db_album
    DEFAULT CHARACTER SET = 'utf8mb4';

CREATE TABLE musicas(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    nome_albumn VARCHAR(50),
    nome_musica VARCHAR(50),
    localizacao VARCHAR(255)
) COMMENT '';
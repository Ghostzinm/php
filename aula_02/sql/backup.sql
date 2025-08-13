CREATE TABLE tb_cadastro (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    nome VARCHAR(255),
    telefone VARCHAR(20),
    usuario VARCHAR(100),
    senha VARCHAR(100)
) COMMENT '';

INSERT INTO
    tb_cadastro (
        nome,
        telefone,
        usuario,
        senha
    )
VALUES (
        'João',
        '(19) 98765-4321',
        'joao',
        '1234'
    ),
    (
        'Maria',
        '(90) 98456-8956',
        'maria',
        '5678'
    ),
    (
        'Pedro',
        '(19) 98561-8637',
        'pedro',
        '9012'
    ),
    (
        'Luiza',
        '(65) 98426-9763',
        'luiza',
        '3456'
    ),
    (
        'Carlos',
        '(23) 965318-7539',
        'carlos',
        '7890'
    ),
    (
        'Ana',
        '(19) 998642-2569',
        'ana',
        '1234'
    );
CREATE TABLE locais (
    id_local INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    bloco VARCHAR(50),
    andar VARCHAR(50),
    sala VARCHAR(50)
);


CREATE TABLE funcionarios (
    id_funcionario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    cargo VARCHAR(50),
    area VARCHAR(50),
    email VARCHAR(50) UNIQUE,
    telefone VARCHAR(50)
);


CREATE TABLE funcionarios_locais (
    id_funcionario INT,
    id_local INT,

    PRIMARY KEY (id_funcionario, id_local),

    FOREIGN KEY (id_funcionario)
        REFERENCES funcionarios(id_funcionario),

    FOREIGN KEY (id_local)
        REFERENCES locais(id_local)
);


CREATE TABLE administrador (
    id_admin INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(50) UNIQUE,
    senha VARCHAR(255)
);
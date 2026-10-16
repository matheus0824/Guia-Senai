INSERT INTO locais (nome, bloco, andar, sala) VALUES
('Sala de Informática 1', 'A', '1', 'A101'),
('Sala de Informática 2', 'A', '1', 'A102'),
('Laboratório de Mecânica', 'B', '2', 'B201'),
('Laboratório de Elétrica', 'B', '2', 'B202'),
('Biblioteca', 'A', 'Térreo', 'A001'),
('Secretaria', 'C', 'Térreo', 'C001'),
('Sala dos Professores', 'C', '1', 'C101'),
('Laboratório de Automação', 'B', '3', 'B301'),
('Oficina de Soldagem', 'D', '1', 'D101'),
('Auditório', 'D', 'Térreo', 'D001');

INSERT INTO funcionarios (nome, cargo, area, email, telefone) VALUES
('João Silva', 'Professor', 'Informática', 'joao@senai.com', '11999990001'),
('Maria Souza', 'Professora', 'Mecânica', 'maria@senai.com', '11999990002'),
('Carlos Oliveira', 'Técnico', 'Elétrica', 'carlos@senai.com', '11999990003'),
('Ana Santos', 'Professora', 'Informática', 'ana@senai.com', '11999990004'),
('Pedro Costa', 'Professor', 'Automação', 'pedro@senai.com', '11999990005'),
('Juliana Lima', 'Coordenadora', 'Administração', 'juliana@senai.com', '11999990006'),
('Rafael Alves', 'Técnico', 'Mecânica', 'rafael@senai.com', '11999990007'),
('Fernanda Rocha', 'Bibliotecária', 'Administração', 'fernanda@senai.com', '11999990008'),
('Lucas Martins', 'Professor', 'Elétrica', 'lucas@senai.com', '11999990009'),
('Camila Ferreira', 'Professora', 'Automação', 'camila@senai.com', '11999990010'),
('Bruno Mendes', 'Técnico', 'Informática', 'bruno@senai.com', '11999990011'),
('Gabriela Ramos', 'Professora', 'Mecânica', 'gabriela@senai.com', '11999990012');

INSERT INTO funcionarios_locais (id_funcionario, id_local) VALUES
(1, 1),
(1, 2),
(1, 7),

(2, 3),
(2, 9),

(3, 4),
(3, 8),

(4, 1),
(4, 2),

(5, 8),
(5, 10),

(6, 6),
(6, 7),

(7, 3),
(7, 9),

(8, 5),

(9, 4),
(9, 8),

(10, 8),
(10, 10),

(11, 1),
(11, 2),

(12, 3),
(12, 9);

INSERT INTO administrador (nome, email, senha) VALUES
('Administrador Principal', 'admin@senai.com', '123456'),
('Carlos Admin', 'carlos.admin@senai.com', 'admin123');

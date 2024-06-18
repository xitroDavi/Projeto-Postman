CREATE DATABASE db_usuarios;
USE db_usuarios;
CREATE TABLE tbl_usuarios(
id INT AUTO_INCREMENT PRIMARY KEY,
 nome varchar (100),
 sobrenome varchar (100),
 idade varchar(4), 
 cpf   char(11),
 rendaMensal varchar(50)
);

INSERT INTO tbl_usuarios(nome, sobrenome, idade, cpf, rendaMensal)VALUES
	('João', 'Silva', '30', '12345678901', 500.00),
	('Maria', 'Santos', '25', '98765432101', 4000.00),
	('Carlos', 'Ferreira', '35', '24681357901', 6000.00),
	('Ana', 'Rodrigues', '28', '13579246801', 450000),
	('Pedro', 'Oliveira', '40', '36925814701', 7000.00),
	('Juliana', 'Almeida', '33', '57931468201', 5500.00),
	('Fernando', 'Pereira', '29', '46813579201', 4800.00),
	('Patricia', 'Costa', '31', '78945612301', 200.00),
	('Lucas', 'Martins', '27', '24681357901', 4700.00),
	('Gabriela', 'Gomes', '36', '12345678901', 5800.00);
  
	-- GET
    SELECT * FROM tbl_usuarios;
    
    -- POST
    INSERT INTO tbl_usuarios (nome, sobrenome, idade, cpf, rendaMensal) VALUES
    ('Robson', 'Oliveira', '28', '12349863901','5630.00');
    
    -- PUT
    UPDATE tbl_usuarios 
    SET nome = 'Veloso', sobrenome = 'Viado', idade = '17', cpf = '05001234550', rendaMensal='10'
    where id = 11;
    
    -- DELETE
    DELETE FROM tbl_usuarios
    WHERE id = 11;
    ALTER TABLE tbl_usuarios convert to character set utf8mb4 collate utf8mb4_general_ci;

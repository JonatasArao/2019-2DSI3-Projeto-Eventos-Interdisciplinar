CREATE DATABASE db_evento;

USE db_evento;

CREATE TABLE tb_administrador(
	cd_administrador INT PRIMARY KEY AUTO_INCREMENT,
	nm_administrador VARCHAR(45),
	nm_email VARCHAR(45),
	cd_senha VARCHAR(50)
);

INSERT INTO tb_administrador VALUES (null,"Administrador Padrão","adm@adm","adm123");
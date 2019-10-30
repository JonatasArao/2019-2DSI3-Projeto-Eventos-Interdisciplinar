CREATE DATABASE db_evento;

USE db_evento;

create table tb_estado(
	cd_estado INT AUTO_INCREMENT,
    nm_estado VARCHAR(45) NOT NULL,
    PRIMARY KEY(cd_estado)
    );

create table tb_cidade(
	cd_cidade INT AUTO_INCREMENT,
    nm_cidade VARCHAR(45) NOT NULL,
    id_estado INT NOT NULL,
    PRIMARY KEY(cd_cidade),
    CONSTRAINT CIDADE_ESTADO_FK
    FOREIGN KEY(id_estado) REFERENCES tb_estado(cd_estado)
    );
    
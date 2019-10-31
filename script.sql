CREATE DATABASE db_evento;

USE db_evento;

CREATE TABLE tb_administrador(
	cd_administrador INT AUTO_INCREMENT,
	nm_administrador VARCHAR(45) NOT NULL,
	nm_email VARCHAR(45) NOT NULL,
	cd_senha VARCHAR(50) NOT NULL,
    st_administrador CHAR(1) NOT NULL DEFAULT 'T',
    PRIMARY KEY(cd_administrador),
    CONSTRAINT EMAIL_ADMIN_UNICO UNIQUE (nm_email)
);

CREATE TABLE tb_usuario(
	cd_usuario INT PRIMARY KEY AUTO_INCREMENT,
	nm_usuario VARCHAR(45),
	nm_email VARCHAR(45),
  CONSTRAINT EMAIL_USER_UNICO UNIQUE(nm_email),
	cd_senha VARCHAR(50),
    dt_nascimento DATE NOT NULL,
    cd_cpf VARCHAR(11) NOT NULL,
  CONSTRAINT CPF_USER_UNICO UNIQUE(cd_cpf),
    cd_rg VARCHAR(9) NOT NULL,
    dt_cadastro TIMESTAMP NOT NULL
    DEFAULT CURRENT_TIMESTAMP
    ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE tb_palestrante(
	cd_palestrante INT AUTO_INCREMENT,
    nm_palestrante VARCHAR(60)  NOT NULL,
    cd_cpf VARCHAR(14) NOT NULL ,
	CONSTRAINT CPF_PALEST_UNICO UNIQUE (cd_cpf),
    cd_rg VARCHAR(12) NOT NULL,
    nm_email VARCHAR(45) NOT NULL,
	CONSTRAINT EMAIL_PALEST_UNICO UNIQUE (nm_email),
    cd_senha VARCHAR(50) NOT NULL,
    dt_nascimento DATE NOT NULL,
    dt_cadastro DATETIME NOT NULL
    DEFAULT CURRENT_TIMESTAMP
    ON UPDATE CURRENT_TIMESTAMP,
    id_administrador INT NOT NULL,
    ds_palestrante LONGTEXT,
    CONSTRAINT ADM_PALEST_FK
    FOREIGN KEY (id_administrador) REFERENCES 
    tb_administrador(cd_administrador)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

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
    
CREATE TABLE tb_organizacao(
	cd_organizacao INT AUTO_INCREMENT,
    nm_organizacao VARCHAR(45) NOT NULL,
    ds_organizacao LONGTEXT,
    img_organizacao VARCHAR(150) NOT NULL,
    id_administrador INT NOT NULL,
    PRIMARY KEY(cd_organizacao),
    CONSTRAINT ADM_ORGANIZ_FK
    FOREIGN KEY (id_administrador) REFERENCES 
    tb_administrador(cd_administrador)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

create table tb_patrocinador(
	cd_patrocinador INT PRIMARY KEY AUTO_INCREMENT,
    nm_patrocinador VARCHAR(45) NOT NULL,
    ds_patrocinador LONGTEXT NOT NULL,
    img_patrocinador VARCHAR(150) NOT NULL,
    id_administrador INT NOT NULL,
    CONSTRAINT ADM_PATROC_FK
    FOREIGN KEY (id_administrador) REFERENCES 
    tb_administrador(cd_administrador)
);

create table tb_inscricao(
	cd_inscricao INT PRIMARY KEY AUTO_INCREMENT,
    id_tipo INT NOT NULL,
    id_usuario INT NOT NULL,
    CONSTRAINT TIPO_INSCRICAO_FK
    FOREIGN KEY (id_tipo) REFERENCES 
    tb_tipo_evento(cd_tipo),
    CONSTRAINT USER_INSCRICAO_FK
    FOREIGN KEY (id_usuario) REFERENCES 
    tb_usuario(cd_usuario)
);

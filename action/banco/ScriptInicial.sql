CREATE DATABASE db_blank;
USE db_blank;

CREATE TABLE tb_user(
	id_user INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
    foto VARCHAR(200),  
	senha VARCHAR(32) NOT NULL,
	perfil INT NOT NULL, -- 1 Usuário 'detran' apenas visualiza,
				-- 2 Funcionário estampador alterar o status da placa de blank para estampada, 
				-- 3 Administrador socios Adcionar ususario, dar entrada e saída das blank.
	cpf VARCHAR(15)NOT NULL,
	celular VARCHAR(15) NOT NULL,
	endereco VARCHAR(200) NOT NULL,
	cep VARCHAR(11) NOT NULL,

	UNIQUE KEY unico_id_user(id_user)

)ENGINE=InnoDB COMMENT='Tabela da usuário.';

INSERT INTO tb_user(nome,email,foto,senha,perfil,cpf,celular,endereco,cep)VALUES
("Fernando Athaide","fernandoathaide@hotmail.com","img/fotos","e10adc3949ba59abbe56e057f20f883e",3,"040.762.284-56","(61)98210-4151","SHDB QL32 CONJUNTO18 CASA 3","71.676-190");
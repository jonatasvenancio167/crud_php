Script do banco de dados

``
CREATE TABLE formulario;

USE formulario;

CREATE TABLE funcionario(
	id int PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	salario DECIMAL(10,2) NOT NULL,
	data_nascimento date NOT NULL
);
``

OBS: Não esqueça de alterar o usuário e senha dentro arquivo de conexão, para o usuário e senha do seu banco atual. 

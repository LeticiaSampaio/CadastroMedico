CREATE DATABASE teste_fc;

use teste_fc;

CREATE TABLE medico (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
senha VARCHAR(20) NOT NULL,
data_criacao TIMESTAMP,
data_alteracao TIMESTAMP
);

CREATE TABLE horario (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_medico INT(11),
data_horario DATETIME,
horario_agendado BOOLEAN,
data_criacao TIMESTAMP,
data_alteracao TIMESTAMP
);
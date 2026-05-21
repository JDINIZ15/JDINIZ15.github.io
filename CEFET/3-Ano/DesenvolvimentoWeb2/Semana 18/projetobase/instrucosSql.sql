CREATE DATABASE IF NOT EXISTS teste DEFAULT CHARSET=utf8 DEFAULT COLLATE=utf8_unicode_ci;
USE teste;
DROP TABLE IF EXISTS produto;
CREATE TABLE produto(id INT AUTO_INCREMENT PRIMARY KEY,
descricao VARCHAR(30) NOT NULL, preco_de_custo DECIMAL(9,2) NOt NULL,
UNIQUE INDEX unq_produto__descricao(descricao))ENGINE=INNODB;

INSERT INTO produto(id, descricao,preco_de_custo) 
VALUES(1,'HEINECKEN',4.50),(2,'GUARANÁ',3.50),(3,'STELLA ATROIS',4.45),(4,'BECKS',4.50),
(5,'LEITE',8.50),(6,'CX DE BOMBOM GAROTO',15.00),(7,'SALGADINHO TORCIDA QUEIJO',3.50),
(8,'ERVILHA',4.50);

DROP TABLE IF EXISTS genero;
CREATE TABLE genero(id INT AUTO_INCREMENT PRIMARY KEY,
descricao VARCHAR(20) NOT NULL, 
UNIQUE INDEX unq_genero__descricao(descricao))ENGINE=INNODB;

INSERT INTO genero(id,descricao) VALUES(1,'BEBIDAS ALCOOLICAS'),
(2,'REFRIGERANTES'), (3,'LATICINIOS'), (4,'PETISCOS'), (5,'DOCES'), (6,'ENLATADOS');

ALTER TABLE PRODUTO ADD COLUMN genero_id INT AFTER id;

UPDATE produto SET genero_id=1 WHERE id IN(1,3,4);
UPDATE produto SET genero_id=2 WHERE id =2;
UPDATE produto SET genero_id=3 WHERE id =5;
UPDATE produto SET genero_id=4 WHERE id =6;
UPDATE produto SET genero_id=5 WHERE id =7;
UPDATE produto SET genero_id=6 WHERE id =8;

ALTER TABLE produto ADD CONSTRAINT fk_produto__genero_id FOREIGN KEY(genero_id) 
REFERENCES genero(id) ON DELETE RESTRICT ON UPDATE CASCADE;

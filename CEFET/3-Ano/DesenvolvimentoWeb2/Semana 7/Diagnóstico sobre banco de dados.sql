CREATE DATABASE IF NOT EXISTS biblioteca DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;
CREATE TABLE IF NOT EXISTS assunto(id INT AUTO_INCREMENT PRIMARY KEY, descricao VARCHAR(20) NOT NULL, UNIQUE INDEX unq_assunto(descricao))ENGINE=INNODB;


CREATE TABLE IF NOT EXISTS editora(codEditora INT AUTO_INCREMENT PRIMARY KEY, nomeEditora VARCHAR(20) NOT NULL)ENGINE=INNODB;


CREATE TABLE IF NOT EXISTS livro(id INT AUTO_INCREMENT, titulo VARCHAR(30) NOT NULL, editora_CodEditora INT NOT NULL, assunto_id INT NOT NULL, ano_lancamento INT NOT NULL,

PRIMARY KEY(id),

CONSTRAINT fk_livro__editora_CodEditora FOREIGN KEY(editora_CodEditora) REFERENCES editora(CodEditora) ON DELETE CASCADE ON UPDATE CASCADE,

CONSTRAINT fk_livro__assunto_id FOREIGN KEY(assunto_id) REFERENCES assunto(id) ON DELETE CASCADE ON UPDATE CASCADE

)ENGINE=INNODB;



CREATE TABLE IF NOT EXISTS exemplar(codigo INT AUTO_INCREMENT PRIMARY KEY,

livro_id INT, situacao ENUM('DISPONIVEL','EMPRESTADO','DEFEITUOSO') NOT NULL DEFAULT 'DISPONIVEL',

CONSTRAINT fk_exemplar__livro_id FOREIGN KEY(livro_id) REFERENCES livro(id) ON DELETE CASCADE ON UPDATE CASCADE

)ENGINE=INNODB;


CREATE TABLE IF NOT EXISTS autor(codAutor INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(40) NOT NULL, data_nascimento DATE NOT NULL)ENGINE=INNODB;


CREATE TABLE IF NOT EXISTS livro_autor(id INT AUTO_INCREMENT PRIMARY KEY,

livro_id INT NOT NULL, autor_CodAutor INT NOT NULL,

UNIQUE INDEX unq_livro_autor__livro__autor(livro_id,autor_CodAutor),
CONSTRAINT fk_livro_autor__autor_CodAutor FOREIGN KEY(autor_CodAutor) REFERENCES autor(CodAutor) ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT fk_livro_autor__livro_id FOREIGN KEY(livro_id) REFERENCES livro(id) ON DELETE CASCADE ON UPDATE CASCADE)ENGINE=INNODB;

INSERT INTO assunto(descricao) VALUES('PROGRAMAÇÃO'),('BANCO DE
DADOS'),('MATEMÁTICA'),('UML');
SELECT * FROM assunto;

ALTER TABLE livro ADD COLUMN tiragem INT, ADD COLUMN preco_de_custo DECIMAL(9,2);
DESCRIBE livro;
-- SHOW COLUMNS FROM livro;
SHOW INDEX FROM assunto;

INSERT INTO editora(nomeEditora) VALUES('Editora 1'),('Editora 2'),('Editora 3');
SELECT * FROM editora;

INSERT INTO livro(titulo, assunto_id, editora_CodEditora, ano_lancamento, preco_de_custo, tiragem)
VALUES('Java Como Programar',1,3,'2000',90.75,2000),('PHP essencial',1,2,'2000',50.25,2000);
INSERT INTO livro(titulo, assunto_id, editora_CodEditora, ano_lancamento, preco_de_custo, tiragem)
VALUES('MySQL essencial',2,1,'1995',60.00,2000)
,('Postgres - A Bíblia',2,3,'2001',50.00,1000)
,('MySql - Um guia para certificação',2,2,'2010',120.00,4000);
SELECT * FROM livro;

UPDATE livro SET tiragem = tiragem * 1.2 WHERE titulo LIKE '% %' || (titulo LIKE '%PHP%' OR titulo LIKE
'%JAVA%');
SELECT * FROM livro; 

UPDATE livro SET tiragem = tiragem * 1.2 WHERE titulo LIKE '% %' || (titulo LIKE '%PHP%' OR titulo LIKE
'%JAVA%');
SELECT l.titulo, e.nomeEditora, ass.descricao as desc_assunto, l.tiragem, l.ano_lancamento as
lancamento
FROM livro l JOIN editora e ON(l.editora_CodEditora = e.CodEditora)
JOIN assunto ass ON(l.assunto_id = ass.id)
WHERE l.ano_lancamento>'2000';

SELECT l.titulo, ass.descricao as desc_assunto, l.preco_de_custo, ROUND( (l.preco_de_custo * 1.3), 2)
as preco_de_venda, l.tiragem
FROM livro l RIGHT JOIN assunto ass ON(l.assunto_id = ass.id)
WHERE (l.tiragem > (SELECT avg(tiragem) FROM livro) OR l.tiragem is null);

INSERT INTO autor(CodAutor,nome, data_nascimento) VALUES(10,'RODRIGO REIS GOMES','1975-10-
09'),
(11,'ROBERTO ZARCO CÂMARA','1978-05-10'),(12,'RAFAEL ELIAS DE LIMA ESCALFONI','1984-09-27'); 

ALTER TABLE livro_autor ADD UNIQUE INDEX unq_livro_autor__autor__livro(autor_CodAutor,livro_id); 

INSERT INTO exemplar(livro_id) VALUES(1),(1),(1);
INSERT INTO exemplar(livro_id) VALUES(2),(2),(2);
INSERT INTO exemplar(livro_id) VALUES(3),(3),(3);
INSERT INTO exemplar(livro_id) VALUES(4),(4),(4);
INSERT INTO exemplar(livro_id) VALUES(5),(5),(5);
INSERT INTO exemplar(livro_id) VALUES(10),(10),(10);

SELECT l.titulo, ex.codigo,ex.situacao FROM livro l JOIN exemplar ex ON(ex.livro_id=l.id);

INSERT INTO livro_autor(livro_id,autor_CodAutor)
VALUES(1,10),(1,11),(2,11),(3,12),(4,10),(5,12),(10,10);
SELECT l.titulo, a.nome as autor
FROM livro l JOIN livro_autor la ON(la.livro_id=l.id)
JOIN autor a ON(la.autor_CodAutor=a.codAutor); 







INSERT INTO livro_autor(livro_id,autor_CodAutor)
VALUES(1,10); 

SELECT l.titulo, l.ano_lancamento, e.nomeEditora, ass.descricao as assunto
FROM livro l JOIN editora e ON(l.editora_CodEditora = e.CodEditora)
JOIN assunto ass ON(l.assunto_id = ass.id); 

SELECT ex.codigo, l.titulo, e.nomeEditora, ass.descricao as assunto, ex.situacao,a.nome as autor
FROM livro l JOIN editora e ON(l.editora_CodEditora = e.CodEditora)
JOIN exemplar ex ON(ex.livro_id=l.id)
JOIN assunto ass ON(l.assunto_id = ass.id)
JOIN livro_autor la ON(la.livro_id = l.id)
JOIN autor a ON(la.autor_CodAutor=a.codAutor) 

-- funcionario(id,nome)
CREATE TABLE funcionario(id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(20) NOT
NULL)ENGINE=INNODB;
-- aluno(id, nome, email)
CREATE TABLE aluno(id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(20) NOT NULL, email
VARCHAR(30))ENGINE=INNODB;
-- emprestimo(id, exemplar_codigo,funcionario_id, aluno_id, data_emprestimo)
CREATE TABLE emprestimo(
 id INT AUTO_INCREMENT PRIMARY KEY,
 exemplar_codigo INT NOT NULL,
 funcionario_id INT NOT NULL,
 aluno_id INT NOT NULL,
 data_emprestimo DATETIME NOT NULL DEFAULT now(),
 CONSTRAINT fk_emprestimo__exemplar_codigo FOREIGN KEY(exemplar_codigo) REFERENCES
exemplar(codigo) ON DELETE RESTRICT ON UPDATE CASCADE,
 CONSTRAINT fk_emprestimo__funcionario_id FOREIGN KEY(funcionario_id) REFERENCES
funcionario(id) ON DELETE RESTRICT ON UPDATE CASCADE,
 CONSTRAINT fk_emprestimo__aluno_id FOREIGN KEY(aluno_id) REFERENCES aluno(id) ON DELETE
RESTRICT ON UPDATE CASCADE
)ENGINE=INNODB;

SELECT * FROM livro WHERE titulo LIKE ‘%guia%’;

SELECT * FROM exemplar WHERE livro_id=3;
SELECT * FROM livro_autor WHERE livro_id=3;

DELETE FROM livro WHERE titulo LIKE ‘%guia%’;

SELECT * FROM exemplar WHERE livro_id=3;
SELECT * FROM livro_autor WHERE livro_id=3;
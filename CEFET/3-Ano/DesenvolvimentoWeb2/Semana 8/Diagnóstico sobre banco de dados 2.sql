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
-- Criação das Tabelas
CREATE TABLE IF NOT EXISTS lov
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(10),
    descricao VARCHAR(250),
    tipo INTEGER
);

CREATE TABLE IF NOT EXISTS funcionario
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    matricula VARCHAR(15),
    data_admissao DATE,
    data_demissao DATE,
    id_situacao INTEGER,
    id_funcao INTEGER,
    id_pessoa INTEGER
);

CREATE TABLE IF NOT EXISTS pessoa
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(250),
    cpf VARCHAR(11),
    data_nascimento DATE
);

CREATE TABLE IF NOT EXISTS funcao
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(100),
    ativo BOOLEAN
);

CREATE TABLE IF NOT EXISTS tarefa
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    codigo varchar(20),
    obra varchar(20),
    tarefa varchar(70),
    id_situacao INTEGER
);

CREATE TABLE IF NOT EXISTS tarefa_funcionario
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    data_entrada DATE,
    data_saida DATE,
    id_tarefa INTEGER,
    id_funcionario INTEGER,
    id_motivo_saida INTEGER
);

-- Criação das Foreign Key
ALTER TABLE funcionario ADD CONSTRAINT funcionario_situacao_fk FOREIGN KEY (id_situacao) REFERENCES lov(id);
ALTER TABLE funcionario ADD CONSTRAINT funcionario_pessoa_fk FOREIGN KEY (id_pessoa) REFERENCES pessoa(id);
ALTER TABLE funcionario ADD CONSTRAINT funcionario_funcao_fk FOREIGN KEY (id_funcao) REFERENCES funcao(id);
ALTER TABLE tarefa ADD CONSTRAINT tarefa_situacao_fk FOREIGN KEY (id_situacao) REFERENCES lov(id);
ALTER TABLE tarefa_funcionario ADD CONSTRAINT tarefa_funcionario_tarefa_fk FOREIGN KEY (id_tarefa) REFERENCES tarefa(id);
ALTER TABLE tarefa_funcionario ADD CONSTRAINT tarefa_funcionario_funcionario_fk FOREIGN KEY (id_funcionario) REFERENCES funcionario(id);
ALTER TABLE tarefa_funcionario ADD CONSTRAINT tarefa_funcionario_motivo_saida_fk FOREIGN KEY (id_motivo_saida) REFERENCES lov(id);
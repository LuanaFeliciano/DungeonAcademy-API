 CREATE TABLE dificuldade (
    id SERIAL PRIMARY KEY,
    dificuldade VARCHAR(15),
    pontuacao INTEGER
);
 
 
 CREATE TABLE perguntas (
    id SERIAL PRIMARY KEY,
    sala INTEGER,
    tema VARCHAR(100),
    dificuldade INTEGER REFERENCES dificuldade(id),
    descricao TEXT
);

CREATE TABLE opcoes_resposta (
    id SERIAL PRIMARY KEY,
    id_pergunta INTEGER REFERENCES perguntas(id),
    descricao TEXT,
    correta BOOLEAN
);



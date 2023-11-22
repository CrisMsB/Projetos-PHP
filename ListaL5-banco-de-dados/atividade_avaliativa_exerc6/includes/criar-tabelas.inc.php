<?php
// Tabela Alunos
$sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1 (
    matricula INT PRIMARY KEY,
    nome_aluno VARCHAR(255)
) ENGINE=InnoDB";

$conexao->query($sql) or die($conexao->error);

// Tabela Materias
$sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela2 (
   codigo_UC INT,
   nome_UC VARCHAR(255),
   matricula INT,
   FOREIGN KEY (matricula) REFERENCES $nomeDaTabela1(matricula)
) ENGINE=InnoDB";

$conexao->query($sql) or die($conexao->error);
?>
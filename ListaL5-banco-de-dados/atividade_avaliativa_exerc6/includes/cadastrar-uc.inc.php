<?php
// Cadastro da UC
$codigoUc = trim($conexao->escape_string($_POST['codigo-Uc']));
$nomeUc = trim($conexao->escape_string($_POST['nome-Uc']));
$matriculaAluno = trim($conexao->escape_string($_POST['matricula1']));

// Verificar se a matrícula do aluno existe na tabela de Alunos usando um prepared statement
$verificar_aluno_sql = "SELECT * FROM $nomeDaTabela1 WHERE matricula = ?";
$stmt = $conexao->prepare($verificar_aluno_sql);
$stmt->bind_param("i", $matriculaAluno);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows == 0) {
    exit("<p>ERRO: A matrícula fornecida é inválida. Tente novamente!</p>");
}

// Inserir os dados da UC na tabela de Materias usando um prepared statement
$inserir_uc_sql = "INSERT INTO $nomeDaTabela2 (nome_UC, codigo_UC, matricula) VALUES (?, ?, ?)";
$stmt = $conexao->prepare($inserir_uc_sql);
$stmt->bind_param("sii", $nomeUc, $codigoUc, $matriculaAluno);

if ($stmt->execute()) {
    echo "<p>Dados da Unidade Curricular cadastrados com sucesso no banco de dados e associados ao aluno.</p>";
} else {
    echo "<p>Erro ao cadastrar dados da Unidade Curricular: " . $conexao->error . "</p>";
}
?>
<?php
//pegando dados do formulário
$matricula = trim($conexao->escape_string($_POST['matricula']));
$aluno = trim($conexao->escape_string($_POST['nome-aluno']));

//inserindo no bando de dados Alunos o id da matricula e o nome do aluno. 
$sql = "INSERT INTO $nomeDaTabela1 (matricula, nome_aluno) VALUES ('$matricula', '$aluno')";// poderia usar (?, ?)

//validação para saber se deu tudo certo e o aluno foi cadastrado ou deu algum erro. 
if ($conexao->query($sql)) {
    echo "<p>Dados do aluno cadastrados com sucesso no banco de dados.</p>";
} else {
    echo "<p>Erro ao cadastrar dados do aluno: " . $conexao->error . "</p>";//$conexao->error indica o tipo de erro que ocorreu na inserção do banco de dados.
}
?>
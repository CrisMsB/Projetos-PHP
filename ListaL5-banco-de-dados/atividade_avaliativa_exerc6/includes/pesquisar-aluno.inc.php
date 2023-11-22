<?php
// Operações de consulta de aluno no banco de dados

// Obtendo o nome do aluno pesquisado a partir do formulário
$nomeAlunoPesquisado = trim($_POST['pesquisa-nome-aluno']);

// Verificando se o nome do aluno não está em branco e tem um comprimento mínimo
if (empty($nomeAlunoPesquisado) || strlen($nomeAlunoPesquisado) < 3) {
    echo "<p>Por favor, insira um nome de aluno válido para pesquisa.</p>";
} else {
    // Agora, com os dados seguros, usando o prepared statements para consulta
    $sql = "SELECT materias.codigo_UC, materias.nome_UC
            FROM materias
            INNER JOIN alunos ON materias.matricula = alunos.matricula
            WHERE alunos.nome_aluno = ?"; // Usando o ? como marcador de posição ao invez de '$nomeAlunoPesquisado' que da na mesma.

    $stmt = $conexao->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $nomeAlunoPesquisado); // "s" indica uma string

        if ($stmt->execute()) {
            $result = $stmt->get_result();

            // Verifique se algum resultado foi encontrado
            if ($result->num_rows > 0) {
                echo "<p>Unidades Curriculares em que $nomeAlunoPesquisado está matriculado:</p>";
                echo "<table>";
                echo "<tr><th>Código UC</th><th>Nome UC</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['codigo_UC'] . "</td><td>" . $row['nome_UC'] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Nenhum resultado encontrado para o aluno $nomeAlunoPesquisado.</p>";
            }
        } else {
            echo "<p>Ocorreu um erro ao executar a consulta.</p>";
        }

        $stmt->close();
    } else {
        echo "<p>Ocorreu um erro na preparação da consulta.</p>";
    }
}
?>
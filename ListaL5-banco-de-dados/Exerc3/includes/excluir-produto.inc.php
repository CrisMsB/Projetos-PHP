<?php
/// Obtém os valores do formulário
$quantia_estoque = $_POST["exclui-produto"];

// Verifique a conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se a quantidade é um número inteiro positivo
    if (is_numeric($quantia_estoque) && $quantia_estoque >= 0) {
        // Consulta SQL para excluir a quantidade especificada de produtos
        $sql = "DELETE FROM produtos LIMIT $quantia_estoque";
        
        // Executa a consulta
        $resultado = $conexao->query($sql);

        if ($resultado === true) {
            echo "Exclusão bem-sucedida. $quantia_estoque produtos foram removidos do banco de dados.";
        } else {
            echo "Erro na exclusão: " . $conexao->error;
        }
    } else {
        echo "Digite uma quantidade válida (número inteiro positivo) para excluir.";
    }
}
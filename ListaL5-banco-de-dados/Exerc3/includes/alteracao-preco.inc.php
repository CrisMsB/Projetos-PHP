<?php

/// Obtém os valores do formulário
$ID = $_POST["pesquisa-id"];
$novo_preco = $_POST["altera-preco"];

// Verifique a conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// Consulta SQL para obter o valor antigo
$sqlAntigo = "SELECT preco FROM produtos WHERE id = $ID";
$resultadoAntigo = $conexao->query($sqlAntigo);
$registroAntigo = $resultadoAntigo->fetch_assoc();

if ($registroAntigo) {
    $valorAntigo = $registroAntigo['preco'];
    echo "Valor antigo: $valorAntigo<br>";
    echo "Novo valor: $novo_preco<br>";
} else {
    echo "Não foi possível obter o valor antigo.";
}

// Consulta SQL para atualizar o preço e obter o valor antigo
$sql = "UPDATE produtos SET preco = $novo_preco WHERE id = $ID";
$resultado = $conexao->query($sql);

if ($resultado === true) {
    // Consulta bem-sucedida
    echo "Produto com ID $ID foi atualizado com sucesso.<br>";

} else {
    // Erro na consulta
    echo "Erro na atualização: " . $conexao->error;
}

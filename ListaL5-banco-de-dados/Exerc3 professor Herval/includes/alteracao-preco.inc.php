<?php

/// Obtém os valores do formulário
$ID =trim($conexao->escape_string($_POST["pesquisa-id"]));
$novo_preco =trim($conexao->escape_string($_POST["altera-preco"]));

// Consulta SQL para atualizar o preço e obter o valor antigo
$sql = "UPDATE $nomeDaTabela SET preco = $novo_preco WHERE id = '$ID'";
$conexao->query($sql) or die($conexao->error);


$quantosRegistrosAfetados = $conexao->affected_rows;

//teste para saber se a atualização foi feita ou não;
if ($quantosRegistrosAfetados === 0) {
    // Consulta bem-sucedida
    echo "<p> Nenhum registro teve seu preço alterado.verifique o ID do produto fornecido! </p>";

} else {
    // Erro na consulta
    echo "<p> O novo preço fornecido foi alterado com sucesso: </p>";
}

<?php
/// Obtém os valores do formulário
$estoque = trim($conexao->escape_string($_POST["exclui-produto"]));

$sql = "DELETE FROM $nomeDaTabela WHERE quantia_estoque < $estoque";
$conexao->query($sql) or die($conexao->error);

$quantosRegistrosAfetados = $conexao->affected_rows;

//teste para saber se a atualização foi feita ou não;
if ($quantosRegistrosAfetados === 0) {
    // Consulta bem-sucedida
    echo "<p> Nenhum registro foi excluido do Banco de dados. Porque todos produtos apresentam estoque maior ou igual ao estoque minimo! </p>";

} else {
    // Erro na consulta
    echo "<p> O produto foi excluido com sucesso: </p>";
}
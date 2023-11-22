<?php
 $estoque = trim($conexao->escape_string($_POST['exclui-produto']));
 
 $sql = "DELETE FROM $nomeDaTabela WHERE quantia_estoque < $estoque";
 $conexao->query($sql) or die($conexao->error);

 $quantoRegistrosAfetados = $conexao->affected_rows;

 if($quantoRegistrosAfetados == 0)
  {
  echo "<p> Nenhum registro foi excluído do banco de dados. Todos os produtos apresentam estoque maior ou igual ao estoque mínimo fornecido! </p>";
  }
 else
  {
  echo "<p> O produto foi excluído com sucesso no banco de dados. </p>";
  }

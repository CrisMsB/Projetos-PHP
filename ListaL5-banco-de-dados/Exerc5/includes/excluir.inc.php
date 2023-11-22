<?php
 $sql = "DELETE FROM $nomeDaTabela WHERE data_validade > '2023-10-01'";
 $conexao->query($sql) or die($conexao->error);

 $quantoRegistrosAfetados = $conexao->affected_rows;

 if($quantoRegistrosAfetados == 0)
  {
  echo "<p> Nenhum medicamento foi excluído do banco de dados, pois todos os cadastrados têm data de validade menor ou igual a 01/10/2023. </p>";
  }
 else
  {
  echo "<p> Medicamentos excluídos com sucesso no banco de dados. </p>";
  }

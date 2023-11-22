<?php
 $sql = "DELETE FROM $nomeDaTabela WHERE horas < 100 AND orcamento < 1000 ";
 $conexao->query($sql) or die($conexao->error);

 $quantoRegistrosAfetados = $conexao->affected_rows;

 if($quantoRegistrosAfetados == 0)
  {
  echo "<p> Nenhum projeto foi excluído do banco de dados, pois todos os projetos tem horas maior que 100 e orcamento maior que 1000. </p>";
  }
 else
  {
  echo "<p> Projetos excluídos com sucesso no banco de dados. </p>";
  }

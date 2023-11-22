<?php
 $id = trim($conexao->escape_string($_POST['pesquisa-id']));
 $novoPreco = trim($conexao->escape_string($_POST['altera-preco']));

 $sql = "UPDATE $nomeDaTabela SET preco=$novoPreco WHERE ID='$id'";
 $conexao->query($sql) or die($conexao->error);

 //antes de mostrar o resultado, o PHP pode descobrir se, de fato, algum produto teve o seu preço alterado. Não esqueçamos que o usuário pode fornecer um id incorreto, que não será encontrado no banco de dados
 $quantoRegistrosAfetados = $conexao->affected_rows;

 if($quantoRegistrosAfetados == 0)
  {
  echo "<p> Nenhum registro teve o preço alterado. Verifique o ID do produto fornecido! </p>";
  }
 else
  {
  echo "<p> O novo preço fornecido foi alterado com sucesso no banco de dados. </p>";
  }

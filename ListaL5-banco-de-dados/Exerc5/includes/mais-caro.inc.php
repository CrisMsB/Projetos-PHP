<?php 
 $sql = "SELECT nome FROM $nomeDaTabela WHERE preco = (SELECT MAX(preco) FROM $nomeDaTabela)";

 $resultado = $conexao->query($sql) or die($conexao->error);

 while($vetorRegistro = $resultado->fetch_array())
  {
  $nome = htmlentities($vetorRegistro[0], ENT_QUOTES, "UTF-8");
  echo "<p> Nome do medicamento com maior preço cadastrado no banco de dados = <span> $nome </span> </p>";
  }

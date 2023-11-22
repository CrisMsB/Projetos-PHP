<?php
 //esta include cria uma consulta que permite ao banco de dados multiplicar o preço pela quantidade em estoque, somando estes valores parciais. Ele faz isso somente para os produtos não-perecíveis
 $sql = "SELECT SUM(preco * quantia_estoque) FROM $nomeDaTabela WHERE classificacao='1'";

 $resultado = $conexao->query($sql) or die($conexao->error);
 $registro = $resultado->fetch_array();
 $faturamento = $registro[0];
 $faturamento = number_format($faturamento, 2, ",", ".");

 echo "<p> O Valor total da venda de todos os produtos não-perecíveis é igual a <span> R$$faturamento </span> </p>";

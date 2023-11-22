<?php
 //include que executa operação para multiplicar uma quantidade em estoque somando esses valores parciais, no banco de dados, para calcular faturamento dos alimentos não pereciveis.
 
 $sql = "SELECT SUM(preco * quantia_estoque) FROM $nomeDaTabela WHERE classificacao ='1'";

 $resultado = $conexao->query($sql) or die($conexao->error);
 $registro = $resultado->fetch_array();
 $faturamento = $registro[0];
 $faturamento = number_format($faturamento,2,",",".");

 echo "<p> Faturamento total dos produtos não perecíveis é igual a R$<span> $faturamento </span>. </p>";


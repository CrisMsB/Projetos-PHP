<?php
 $sql = "SELECT SUM(preco) FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) or die($conexao->error);
 $registro = $resultado->fetch_array();
 $faturamento = $registro[0];
 $faturamento = number_format($faturamento, 2, ",", ".");

 echo "<p> O Valor total da venda de todos os remédios é igual a <span> R$$faturamento </span> </p>";

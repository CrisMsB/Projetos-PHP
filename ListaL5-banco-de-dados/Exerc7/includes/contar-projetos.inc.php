<?php
 $sql = "SELECT COUNT(*) FROM $nomeDaTabela WHERE data > '2020-01-01'";

 $resultado = $conexao->query($sql) or die($conexao->error);

 //chegando aqui, o PHP encontrou o médico pesquisado, e já temos ou seu crm - recuperamos seu crm
 $registro = $resultado->fetch_array();

 $registro = $resultado->fetch_array();

 $quantos = $registro[0];

 echo "<p> Número de projetos iniciados após 01/01/2020 = <span> $quantos </span> ";
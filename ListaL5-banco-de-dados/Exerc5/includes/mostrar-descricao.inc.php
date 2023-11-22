<?php
 //para que o PHP mostre,  na página web, a descrição do produto com a menor quantidade em estoque, vamos dividir esta operação em duas consultas separadas. A primeira retorna o valor mínimo da quantidade em estoque. A segunda operação busca, no banco de dados, a descrição do produto que tem este valor mínimo

 //a primeira consulta retornando a quantidade mínima em estoque

 $sql = "SELECT MIN(quantia_estoque) FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) OR die($conexao->error);
 
 $registro = $resultado->fetch_array();
 $menorEstoque = $registro[0];

 //a segunda consulta está abaixo. Nela, vamos até o banco de dados e solicitamos a coluna descrição do produto que tem a menor quantidade em estoque
 $sql = "SELECT descricao FROM $nomeDaTabela WHERE quantia_estoque = $menorEstoque LIMIT 1";

 $resultado = $conexao->query($sql) OR die($conexao->error);
 
 $registro = $resultado->fetch_array();
 $descricao = htmlentities($registro[0], ENT_QUOTES, "UTF-8");

 echo "<p> Dados do produto com a menor quantidade em estoque: <br>
           Quantidade em estoque = <span> $menorEstoque unidades </span> <br>
           Descrição = <span> $descricao </span> </p>";
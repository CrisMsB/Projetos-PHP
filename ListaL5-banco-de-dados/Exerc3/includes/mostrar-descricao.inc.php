<?php
 /*Para que o php mostre a descrição do produto com a menor quantidade em estoque, 
 vamos dividir esta opração em duas consultas separadas. A primeira retorna o ID do produto com menor quantidade em estoque. 
 A segunda operação busca no bando de dados a descrição do produto que tem o valor. */
 
 //1)primeira consulta. retorna a quantdade minima em estoque
 $sql = "SELECT MIN(quantia_estoque) FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) OR die($conexao->error);

 $registro = $resultado->fetch_array();
 $menor_estoque = $registro[0];
  
 //2) a segunda consulta está a baixo , nela vamos até 
 
 $sql = "SELECT descricao FROM $nomeDaTabela WHERE quantia_estoque = $menor_estoque LIMIT 1";

 $resultado = $conexao->query($sql) OR die($conexao->error);

 $registro = $resultado->fetch_array();
 $descricao = htmlentities($registro[0], ENT_QUOTES, "UTF-8");

echo "<p> Dados do produto com a menor quantidade em estoque : <br> 
        Quantidade em Estoque: <span>$menor_estoque unidades </span> <br>
        Descrição do Produto: <span>$descricao </span> </p>";

<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          ID VARCHAR(30) PRIMARY KEY,
          preco DECIMAL(6,2),
          quantia_estoque INT,
          classificacao VARCHAR(10),
          descricao VARCHAR(500)) ENGINE=innoDB"; 
 
 $conexao->query($sql) OR die($conexao->error);
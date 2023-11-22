<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          ID VARCHAR (100) PRIMARY KEY,
          orcamento DECIMAL(6,2),
          data DATE,
          horas INT) ENGINE=innoDB"; 
 
 $conexao->query($sql) OR die($conexao->error);
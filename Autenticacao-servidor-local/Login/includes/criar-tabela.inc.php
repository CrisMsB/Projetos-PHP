<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          ID INT PRIMARY KEY AUTO_INCREMENT,
          nome VARCHAR(500),
          email VARCHAR(500),
          login VARCHAR(500),
          senha VARCHAR(128)) ENGINE=innoDB"; 
 
 $conexao->query($sql) OR die($conexao->error);
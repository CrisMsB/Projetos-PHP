<?php
 //include para criação automática de tabelas no banco de dados. Assim como foi com o comando para a criação do banco, esta include é OPCIONAL
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
           matricula VARCHAR(20) PRIMARY KEY,
           aluno VARCHAR(300),
           media DECIMAL(3,1)) ENGINE=innoDB";
 
 
 $conexao->query($sql) OR die($conexao->error);
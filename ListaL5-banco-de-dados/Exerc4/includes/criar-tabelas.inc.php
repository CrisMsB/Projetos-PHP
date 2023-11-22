<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1(
           crm VARCHAR(20) PRIMARY KEY,
           medico VARCHAR(300)) ENGINE=innoDB"; 
 
 $conexao->query($sql) OR die($conexao->error);

 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela2(
           id INT PRIMARY KEY AUTO_INCREMENT,
           paciente VARCHAR(300),
           data_internacao DATE,
           crm_atendimento VARCHAR(20),
           
           FOREIGN KEY (crm_atendimento)
           REFERENCES $nomeDaTabela1 (crm)) ENGINE=innoDB";

$conexao->query($sql) OR die($conexao->error);
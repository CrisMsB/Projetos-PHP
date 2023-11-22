<?php
 //operações de cadastro dos alunos no banco de dados
 $crm = trim($conexao->escape_string($_POST['crm']));
 $medico  = trim($conexao->escape_string($_POST['nome-medico']));

 //agora, com os dados seguros, eles estão prontos para serem enviados ao banco de dados
 $sql = "INSERT $nomeDaTabela1 VALUES(
                   '$crm',
                   '$medico')";

 //execução da consulta no banco de dados
 $conexao->query($sql) OR $conexao->error;

 echo "<p> Dados do Medico cadastrados com sucesso no banco de dados. </p>";
<?php
 //operações de cadastro dos médicos
 $medico = trim($conexao->escape_string($_POST['nome-medico']));
 $crm    = trim($conexao->escape_string($_POST['crm']));
 
 $sql = "INSERT $nomeDaTabela1 VALUES(
                   '$crm',
                   '$medico')";

 $conexao->query($sql) OR $conexao->error;

 echo "<p> Dados do médico cadastrados com sucesso no banco de dados. </p>";
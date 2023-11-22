<?php
 //operações de consulta de medico no banco de dados
 $medicoPesquisado  = trim($conexao->escape_string($_POST['pesquisa-nome-medico']));

 //agora, com os dados seguros, eles estão prontos para serem enviados ao banco de dados
 $sql = "SELECT crm FROM $nomeDaTabela1 WHERE medico = '$medicoPesquisado';

 $registro = $conexao->query($sql) OR die($conexao->error);

 //agora testamos se o bdo encontrou o médico pesquisado;
 if($conexao->affected_rows == 0 )
 {
    exit ("<p> Erro: o nome do médico fornecido não foi encontrado no banco de dados. Tente novamente!");
 }

 //execução da consulta no banco de dados
 $conexao->query($sql) OR $conexao->error;

 echo "<p> Dados do Medico cadastrados com sucesso no banco de dados. </p>";
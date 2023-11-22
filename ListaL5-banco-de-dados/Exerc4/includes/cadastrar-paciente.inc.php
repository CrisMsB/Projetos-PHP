<?php
 //cadastro de pacientes
 $paciente = trim($conexao->escape_string($_POST['nome-paciente']));
 $crm      = trim($conexao->escape_string($_POST['crm-atendimento']));
 $data     = trim($conexao->escape_string($_POST['data-internacao']));

 //antes de cadastrar os dados do paciente, vamos verificar se o CRM digitado existe na tabela de médicos
 $sql = "SELECT * FROM $nomeDaTabela1 WHERE crm = '$crm'";
 $conexao->query($sql) or die($conexao->error);

 //testando se a consulta acima foi bem-sucedida

 if($conexao->affected_rows == 0)
  {
  exit("<p> ERRO: o crm fornecido é inválido. Tente novamente! </p>");
  }
 
 $sql = "INSERT $nomeDaTabela2 VALUES(
                   null,
                   $paciente',
                   '$data',
                   '$crm')";

 /*outra forma de escrever esta mesma consulta. Veja abaixo
 $sql = "INSERT $nomeDaTabela2 (paciente, data_internacao, crm_atendimento) VALUES(
  $paciente',
  '$data',
  '$crm')";*/
 $conexao->query($sql) OR $conexao->error;

 echo "<p> Dados do paciente cadastrados com sucesso no banco de dados. </p>";
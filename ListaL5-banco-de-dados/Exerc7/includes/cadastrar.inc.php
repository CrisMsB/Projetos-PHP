<?php
 $id     = $conexao->escape_string(trim($_POST['id']));
 $orcamento = $conexao->escape_string(trim($_POST['orcamento']));
 $data    = $conexao->escape_string(trim($_POST['inicio']));
 $horas    = $conexao->escape_string(trim($_POST['horas']));

 $sql = "INSERT $nomeDaTabela VALUES(
                   '$id',
                    $orcamento, 
                   '$data',
                   $horas)";

 $conexao->query($sql) OR $conexao->error;

 echo "<p> Dados do projeto cadastro com sucesso no banco de dados. </p>";
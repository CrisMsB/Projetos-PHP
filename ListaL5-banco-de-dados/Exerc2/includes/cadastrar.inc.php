<?php
 $id        = $conexao->escape_string(trim($_POST['id']));
 $preco     = $conexao->escape_string(trim($_POST['preco']));
 $estoque   = $conexao->escape_string(trim($_POST['estoque']));
 $classific = $conexao->escape_string(trim($_POST['classific']));
 $descricao = $conexao->escape_string(trim($_POST['descricao']));

 $sql = "INSERT $nomeDaTabela VALUES(
                   '$id',
                    $preco, 
                    $estoque,
                    '$classific',
                    '$descricao')";

 $conexao->query($sql) OR $conexao->error;

 echo "<p> Dados do produto cadastrados com sucesso no banco de dados. </p>";
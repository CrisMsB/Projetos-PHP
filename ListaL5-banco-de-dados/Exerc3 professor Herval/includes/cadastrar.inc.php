<?php
 $id        = $conexao->escape_string(trim($_POST['id']));
 $preco     = $conexao->escape_string(trim($_POST['preco']));
 $estoque   = $conexao->escape_string(trim($_POST['estoque']));


 $sql = "INSERT $nomeDaTabela VALUES(
                   '$id',
                    $preco, 
                    $estoque)";

 $conexao->query($sql) OR $conexao->error;

 echo "<p> Dados do produto cadastrados com sucesso no banco de dados. </p>";